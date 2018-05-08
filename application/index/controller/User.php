<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/18
 * Time: 14:02
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Loader;
use think\Request;

class User extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //客户列表
    public function userlist(){
        $city_id=intval(session('ad_c_id'));
        $where='cus_isdelete = 1 and  cus_cityid = '.$city_id;
        if($_GET){
            if($_GET['keywords']){
                $where.=" and ( cus_name like '%".$_GET['keywords']."%' or cus_phone like '%".$_GET['keywords']."%' )";
                $this->assign('keywords',$_GET['keywords']);
            }
            if($_GET['cus_status']){
                $where.=" and cus_status = ".$_GET['cus_status'];
                $this->assign('cus_status',$_GET['cus_status']);
            }
            if($_GET['cus_sys']){
                $where.=" and cus_sys = ".$_GET['cus_sys'];
                $this->assign('cus_sys',$_GET['cus_sys']);
            }
//            if($_GET['cus_via']){
//                $where.=" and cus_via = ".$_GET['cus_via'];
//                $this->assign('cus_from',$_GET['cus_from']);
//            }
            if($_GET['cus_opptime']){
                $cus_opptime=$_GET['cus_opptime'];
                $sdate=strtotime(substr($cus_opptime,'0','10')." 00:00:00");
                $edate=strtotime(substr($cus_opptime,'-10')." 23:59:59");
                $where.=" and ( cus_opptime>= ".$sdate." and cus_opptime <= ".$edate." ) ";
                $this->assign('cus_opptime',$_GET['cus_opptime']);
            }
        }
        //分页统计总数；
        $count=Db::table('qbl_customer')
            ->join('qbl_province','qbl_customer.cus_provid = qbl_province.p_id')
            ->join('qbl_city','qbl_customer.cus_cityid = qbl_city.c_id')
                    ->where($where)->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $cusInfo=Db::table('qbl_customer')
            ->join('qbl_province','qbl_customer.cus_provid = qbl_province.p_id')
            ->join('qbl_city','qbl_customer.cus_cityid = qbl_city.c_id')
            ->where($where)
            ->limit(($page-1)*$limit,$limit)
            ->order('cus_id desc')
            ->select();
        foreach($cusInfo as $k => $v){
            $cusInfo[$k]['cus_opptime']=date('Y-m-d H:i:s',$v['cus_opptime']);
            $cusInfo[$k]['cus_backtime']=date('Y-m-d H:i:s',$v['cus_backtime']);
            $cusInfo[$k]['cus_phone'] = substr_replace($v['cus_phone'],'****',3,4);
        }
        //获取客户标签
        $userTip=Db::table('qbl_type')
            ->where(['type_sort' => '1','type_isable' => '1'])
            ->field('type_id,type_name')
            ->select();
        //获取推广渠道
//        $extends=Db::table('qbl_extend')->where(['ex_isable' =>'1'])->field('ex_id,ex_name')->select();
//        $this->assign('extends',$extends);
        $this->assign('userTip',$userTip);
        $this->assign('cusInfo',$cusInfo);
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        return $this->fetch();
    }
    //客户列表style2
    public function userlist1(){
       return $this->fetch();
    }

    public function details(){
        $cus_id=intval($_GET['user_id']);
        //获取客户信息；
        $cusInfo=Db::table('qbl_customer')->where(['cus_id' => $cus_id])->find();
        //用户系统
        if($cusInfo['cus_sys'] == '1'){
            $cusInfo['cus_sys']='手机端';
        }elseif ($cusInfo['cus_sys'] == '2'){
            $cusInfo['cus_sys']='PC端';
        }
        $cusInfo['cus_opptime']=date('Y-m-d H:i',$cusInfo['cus_opptime']);
        $cus_provid=$cusInfo['cus_provid'];
        $cusCity=Db::table('qbl_city')->where(['p_id' => $cus_provid])->select();
        //获取客户标签
        $userTip=Db::table('qbl_type')
            ->where(['type_sort' => '1','type_isable' => '1'])
            ->field('type_id,type_name')
            ->select();
        $provInfo=Db::table('qbl_province')->select();

        //获取装修品质：
        $decLevel=Db::table('qbl_type')
            ->where(['type_sort' => '3','type_isable' => '1'])
            ->select();
        //获取装修风格：
        $decStyle=Db::table('qbl_type')
            ->where(['type_sort' => '2','type_isable' => '1'])
            ->select();
        $this->assign('level',$decLevel);
        $this->assign('style',$decStyle);
        $this->assign('prov',$provInfo);
        $this->assign('userTip',$userTip);
        $this->assign('cus',$cusInfo);
        $this->assign('cusCity',$cusCity);
        return $this->fetch();
    }

    //修改客户信息
    public function editUser(){
        $cus_id=intval($_GET['cus_id']);
        $data=$_POST;
        $data['cus_backtime']=time();
        $editCus=Db::table('qbl_customer')->where(['cus_id' => $cus_id])->update($data);
        if($editCus){
            $this->success('修改成功','userList');
        }else{
            $this->error('修改失败','userList');
        }
    }

    //删除某一客户、
    public function delUser(){
        $cus_id=intval($this->request->param('cus_id'));
        $delCus=Db::table('qbl_customer')->where(['cus_id' => $cus_id])->update(['cus_isdelete' => '2']);
        if($delCus){
            $this->success('删除成功','userList');
        }else{
            $this->error('删除失败','userList');
        }
    }

    //批量删除；
    public function delBatch(){
        // ids 格式为： 15,13
        $ids=rtrim($this->request->param('ids'),',');
        $res=Db::table('qbl_customer')
            ->where('cus_id','in',$ids)
            ->update(['cus_isdelete' => '2']);
        if($res){
            return  json(['code' => '1']);
        }else{
            return  json(['code' => '0']);
        }
    }

    //全部删除客户数据
    public function delAll(){
        $res=Db::table('qbl_customer')->update(['cus_isdelete' => '2']);
        if($res){
            return  json(['code' => '1']);
        }else{
            return  json(['code' => '0']);
        }
    }



    //给某一客户发送短信；
//
//     public function sendMsg(){
//        $cus_id=intval($_GET['cus_id']);
//        $cusInfo=Db::table('qbl_customer')->field('cus_phone')->where(['cus_id'=> $cus_id])->find();
//        $cus_phone=$cusInfo['cus_phone'];
////        dump($cus_phone);
//        Loader::import('aliyun/api_demo/SmsDemo',EXTEND_PATH);
//        $sems = new \SmsDemo();
//        $sem1=$sems->sendSms($cus_phone,'SMS_133976891');
//        $array=$this->object2array($sem1);
////        dump($array);
//        if($array['Code'] == 'OK'){
//            return  json(['code' => '1']);
//        }else{
//            return  json(['code' => '0']);
//        }
//    }


    //回收站
    public function userBack(){
        $city_id = intval(session('ad_c_id'));
        $where = ' cus_isdelete = 2 and  cus_cityid = '.$city_id;
        if($_GET){
            if($_GET['keywords']){
                $where.=" and ( cus_name like '%".$_GET['keywords']."%' or cus_phone like '%".$_GET['keywords']."%' )";
                $this->assign('keywords',$_GET['keywords']);
            }
            if($_GET['cus_status']){
                $where.=" and cus_status = ".$_GET['cus_status'];
                $this->assign('cus_status',$_GET['cus_status']);
            }
            if($_GET['cus_sys']){
                $where.=" and cus_sys = ".$_GET['cus_sys'];
                $this->assign('cus_sys',$_GET['cus_sys']);
            }
//            if($_GET['cus_via']){
//                $where.=" and cus_via = ".$_GET['cus_via'];
////                $this->assign('cus_via',$_GET['cus_via']);
//            }
            if($_GET['cus_opptime']){
                $cus_opptime=$_GET['cus_opptime'];
                $sdate=strtotime(substr($cus_opptime,'0','10')." 00:00:00");
                $edate=strtotime(substr($cus_opptime,'-10')." 23:59:59");
                $where.=" and ( cus_opptime>= ".$sdate." and cus_opptime <= ".$edate." ) ";
                $this->assign('cus_opptime',$_GET['cus_opptime']);
            }
        }
        //分页统计总数；
        $count=Db::table('qbl_customer')
            ->join('qbl_province','qbl_customer.cus_provid = qbl_province.p_id')
            ->join('qbl_city','qbl_customer.cus_cityid = qbl_city.c_id')
            ->where($where)->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $userBack=Db::table('qbl_customer')
            ->join('qbl_province','qbl_customer.cus_provid = qbl_province.p_id')
            ->join('qbl_city','qbl_customer.cus_cityid = qbl_city.c_id')
            ->limit(($page-1)*$limit,$limit)
            ->where($where)
            ->select();
        foreach($userBack as $k => $v){
            $userBack[$k]['cus_opptime']=date('Y-m-d H:i:s',$v['cus_opptime']);
            $userBack[$k]['cus_backtime']=date('Y-m-d H:i:s',$v['cus_backtime']);
            $userBack[$k]['cus_phone'] = substr_replace($v['cus_phone'],'****',3,4);
        }
        //获取客户标签
        $userTip=Db::table('qbl_type')
            ->where(['type_sort' => '1','type_isable' => '1'])
            ->field('type_id,type_name')
            ->select();
//        //获取推广渠道
//        $extends=Db::table('qbl_extend')->where(['ex_isable' =>'1'])->field('ex_id,ex_name')->select();
//        $this->assign('extends',$extends);
        $this->assign('userTip',$userTip);
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('userBack',$userBack);
        return $this->fetch();
    }

    //恢复某一用户（单个恢复）
    public function backNormal(){
        $cus_id=intval($_GET['cus_id']);
        $back=Db::table('qbl_customer')
            ->where(['cus_id' =>$cus_id,'cus_isdelete' => '2'])
            ->update(['cus_isdelete' => '1']);
        if($back){
            $this->success('恢复成功','userback');
        }else{
            $this->error('恢复失败','userback');
        }
    }

    //彻底删除某一用户
    public function absdelete(){
        $cus_id=intval($_GET['cus_id']);
        $abs=Db::table('qbl_customer')
            ->where(['cus_id' => $cus_id ,'cus_isdelete' => '2'])
            ->delete();
        if($abs){
            $this->success('删除成功','userback');
        }else{
            $this->error('删除失败','userback');
        }
    }

    //批量彻底删除
    public function absdelBatch(){
        $ids=rtrim($this->request->param('ids'),',');
        $res=Db::table('qbl_customer')
            ->where('cus_id','in',$ids)
            ->where(['cus_isdelete' => '2'])
            ->delete();
        if($res){
            return  json(['code' => '1']);
        }else{
            return  json(['code' => '0']);
        }
    }

    //批量恢复
    public function backBatch(){
        $ids=rtrim($this->request->param('ids'),',');
        $res=Db::table('qbl_customer')
            ->where('cus_id','in',$ids)
            ->where(['cus_isdelete' => '2'])
            ->update(['cus_isdelete' => '1']);
        if($res){
            return  json(['code' => '1']);
        }else{
            return  json(['code' => '0']);
        }
    }


    //把对象转换成数组的方法；
    public function object2array($object) {
        if (is_object($object)) {
            foreach ($object as $key => $value) {
                $array[$key] = $value;
            }
        }
        else {
            $array = $object;
        }
        return $array;
    }



    //二级联动根据传过来的省份id获取对应的城市名称
    public function getCityName(){
        $p_id=intval($_GET['p_id']);
        $cityNames=Db::table('qbl_city')->where(['p_id' => $p_id])->select();
        if($cityNames){
            return  json(['code' => '1','data' => $cityNames]);
        }else{
            return  json(['code' => '0','data' => ['']]);
        }
    }
}