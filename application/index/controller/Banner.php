<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/18
 * Time: 10:52
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Banner extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    public function bannerList(){

        $ad_role=intval(session('ad_role'));
        //分站id
        $ad_branch = intval(session('ad_branch'));
        if($ad_role == 1 ){// 超级管理员
            $where =' 1 = 1';
        }else{
            $where=' ba_branch = '.$ad_branch;
        }
        //PC端
        $pcBan=Db::table('qbl_banner')
            ->where(['ba_via' => 1])
            ->join('qbl_province','qbl_banner.ba_p_id = qbl_province.p_id')
            ->join('qbl_city','qbl_banner.ba_c_id = qbl_city.c_id')
            ->where($where)
            ->order('ba_createtime desc')
            ->select();
        foreach ($pcBan as $k =>$v){
            $pcBan[$k]['ba_createtime']=date('Y-m-d H:i',$v['ba_createtime']);
            $pcBan[$k]['ba_isable']=$v['ba_isable']==1?"是":"否";
        }
        //手机端
        $mobBan=Db::table('qbl_banner')
            ->join('qbl_province','qbl_banner.ba_p_id = qbl_province.p_id')
            ->join('qbl_city','qbl_banner.ba_c_id = qbl_city.c_id')
            ->where(['ba_via' => 2])
            ->where($where)
            ->order('ba_createtime desc')
            ->select();
        foreach ($mobBan as $k =>$v){
            $mobBan[$k]['ba_createtime']=date('Y-m-d H:i',$v['ba_createtime']);
            $mobBan[$k]['ba_isable']=$v['ba_isable']==1?"是":"否";
        }
        $this->assign('pcBan',$pcBan);
        $this->assign('mobBan',$mobBan);
        return $this->fetch();
    }

    public function addBanner(){
        if($_POST){
            $data['ba_title']=$_POST['ba_title'];
            $data['ba_via']=$_POST['ba_via'];
            $data['ba_alt']=$_POST['ba_alt'];
            $data['ba_img']=$_POST['ba_img'];
            $data['ba_p_id']=$_POST['ba_p_id'];
            $data['ba_c_id']=$_POST['ba_c_id'];
            $data['ba_branch']=$_POST['ba_branch'];
            $data['ba_isable']=$_POST['ba_isable'];
            $data['ba_createtime']=time();
            $data['ba_branch']="12";//那个分站登录的就是那个分站的id
            $addBan=Db::table('qbl_banner')->insert($data);
            if($addBan){
                $this->success('添加banner成功！','bannerlist');
            }else{
                $this->error('添加banner失败!');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }

    public function editBanner(){
        $ba_id=$_GET['ba_id'];
        if($_POST){
            $data['ba_title']=$_POST['ba_title'];
            $data['ba_via']=$_POST['ba_via'];
            $data['ba_alt']=$_POST['ba_alt'];
            $data['ba_img']=$_POST['ba_img'];
            $data['ba_p_id']=$_POST['ba_p_id'];
            $data['ba_c_id']=$_POST['ba_c_id'];
            $data['ba_branch']=$_POST['ba_branch'];
            $data['ba_isable']=$_POST['ba_isable'];
            $data['ba_createtime']=time();
            $update=Db::table('qbl_banner')->where(['ba_id'=> $ba_id])->update($data);
            if($update){
                $this->success('修改banner成功！','bannerlist');
            }else{
                $this->error('您未做任何修改！','bannerlist');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            $banInfo=Db::table('qbl_banner')->where(['ba_id'=> $ba_id])->find();
            $p_id=$banInfo['ba_p_id'];
            $citys=Db::table('qbl_city')->where(['p_id' => $p_id])->select();
            $c_id=$banInfo['ba_c_id'];
            $branchs=Db::table('qbl_branch')->where(['b_city' =>$c_id ])->field('b_id,b_name')->select();
            $this->assign('ban',$banInfo);
            $this->assign('citys',$citys);
            $this->assign('branchs',$branchs);
            return $this->fetch();
        }
    }

    //删除banner图；
    public function delBanner(){
        $ba_id=intval($_GET['ba_id']);
        $delBan=Db::table('qbl_banner')->where(['ba_id'=>$ba_id])->delete();
        if($delBan){
            $this->success('删除成功！','bannerlist');
        }else{
            $this->error('删除失败！','bannerlist');
        }
    }
}