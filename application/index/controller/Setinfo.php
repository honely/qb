<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/18
 * Time: 11:04
 */
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Setinfo extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //配置信息列表
    public function setlist(){
        $setInfo=Db::table('qbl_setinfo')
            ->order('s_id desc')
            ->select();
        $this->assign('setinfo',$setInfo);
        return $this->fetch();
    }

    //添加配置信息；
    public function addset(){
        if($_POST){
            $data['s_key']=$_POST['s_key'];
            $data['s_value']=$_POST['s_value'];
            $data['s_is_able']=$_POST['s_is_able'];
            $addSet=Db::table('qbl_setinfo')->insert($data);
            if($addSet){
                $this->success('添加成功！','setlist');
            }else{
                $this->error('添加失败！','setlist');
            }
        }else{
            return $this->fetch();
        }
    }

    //修改信息配置：
    public function editSet(){
        $s_id=intval($_GET['s_id']);
        if($_POST){
            $data['s_key']=$_POST['s_key'];
            $data['s_value']=$_POST['s_value'];
            $data['s_is_able']=$_POST['s_is_able'];
            $edit=Db::table('qbl_setinfo')->where(['s_id' => $s_id])->update($data);
            if($edit){
                $this->success('修改信息成功！','setlist');
            }else{
                $this->error('未做任何修改！','setlist');
            }
        }else{
            $setInfo=Db::table('qbl_setinfo')->where(['s_id' => $s_id])->find();
            $this->assign('set',$setInfo);
            return $this->fetch();
        }
    }

    //删除配置
    public function delSet(){
        $s_id=intval($_GET['s_id']);
        $delSet=Db::table('qbl_setinfo')->where(['s_id' => $s_id])->delete();
        if($delSet){
            $this->success('删除配置成功！','setlist');
        }else{
            $this->error('删除配置失败！','setlist');
        }
    }
































    //分站列表
    public function branch(){
        $branch=Db::table('qbl_branch')
            ->join('qbl_province','qbl_province.p_id = qbl_branch.b_province')
            ->join('qbl_city','qbl_city.c_id = qbl_branch.b_city')
            ->order('b_id desc')
            ->select();
        foreach($branch as $k =>$v){
            $branch[$k]['b_createtime']=date('Y-m-d',$v['b_createtime']);
        }
        $this->assign('branch',$branch);
        return $this->fetch();
    }

    //添加分站信息；
    public function addBranch(){
        if($_POST){
            $data['b_name']=$_POST['b_name'];
            $data['b_logo']=$_POST['b_logo'];
            $data['b_logo_alt']=$_POST['b_logo_alt'];
            $data['b_prex']=$_POST['b_prex'];
            $data['b_tel']=$_POST['b_tel'];
            $data['b_weichat']=$_POST['b_weichat'];
            $data['b_weibo']=$_POST['b_weibo'];
            $data['b_province']=$_POST['b_province'];
            $data['b_city']=$_POST['b_city'];
            $data['b_address']=$_POST['b_address'];
            $data['b_location']=$_POST['b_location'];
            $data['b_thridcode']=$_POST['b_thridcode'];
            $data['b_serviceurl']=$_POST['b_serviceurl'];
            $data['b_adminphone']=$_POST['b_adminphone'];
            $data['b_codecount']=$_POST['b_codecount'];
            $data['b_othercode']=$_POST['b_othercode'];
            $data['b_createtime']=strtotime($_POST['b_createtime'].' 12:12:21');
            $data['b_isopen']=$_POST['b_isopen'];
            $addBase=Db::table('qbl_branch')->insert($data);
            if($addBase){
                $this->success('站点信息添加成功！','branch');
            }else{
                $this->success('站点添加失败！','branch');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }

    //修改站点信息
    public function editBranch(){
        $branch_id=intval($_GET['b_id']);
        if($_POST){
            $data['b_name']=$_POST['b_name'];
            $data['b_logo']=$_POST['b_logo'];
            $data['b_logo_alt']=$_POST['b_logo_alt'];
            $data['b_prex']=$_POST['b_prex'];
            $data['b_tel']=$_POST['b_tel'];
            $data['b_weichat']=$_POST['b_weichat'];
            $data['b_weibo']=$_POST['b_weibo'];
            $data['b_province']=$_POST['b_province'];
            $data['b_city']=$_POST['b_city'];
            $data['b_address']=$_POST['b_address'];
            $data['b_location']=$_POST['b_location'];
            $data['b_thridcode']=$_POST['b_thridcode'];
            $data['b_serviceurl']=$_POST['b_serviceurl'];
            $data['b_adminphone']=$_POST['b_adminphone'];
            $data['b_codecount']=$_POST['b_codecount'];
            $data['b_othercode']=$_POST['b_othercode'];
            $data['b_createtime']=strtotime($_POST['b_createtime'].' 12:12:21');
            $data['b_isopen']=$_POST['b_isopen'];
            $editBranch=Db::table('qbl_branch')->where(['b_id' =>$branch_id])->update($data);
            if($editBranch){
                $this->success('修改成功','branch');
            }else{
                $this->error('修改失败','branch');
            }
        }else{
            $branchInfo=Db::table('qbl_branch')->where(['b_id' =>$branch_id])->find();
            $branchInfo['b_createtime']=date('Y-m-d',$branchInfo['b_createtime']);
            $provInfo=Db::table('qbl_province')->select();
            $provid=$branchInfo['b_province'];
            $cusCity=Db::table('qbl_city')->where(['p_id' => $provid])->select();
            $this->assign('prov',$provInfo);
            $this->assign('cusCity',$cusCity);
            $this->assign('branch',$branchInfo);
            return $this->fetch();
        }
    }

    //修改站点扩展信息
    public function extedit(){
        $branch_id=$_GET['b_id'];
        $data['b_title']=$_POST['b_title'];
        $data['b_keywords']=$_POST['b_keywords'];
        $data['b_desc']=$_POST['b_desc'];
        $data['b_codecount']=$_POST['b_codecount'];
        $data['b_thridcode']=$_POST['b_thridcode'];
        $data['b_serviceurl']=$_POST['b_serviceurl'];
        $updateExt=Db::table('qbl_branch')->where(['b_id' => $branch_id])->update($data);
        if($updateExt){
            $this->success('修改扩展信息成功!');
        }else{
            $this->error('修改扩展信息失败！');
        }
    }
    //删除某一站点
    public function delBranch(){
        $branch_id=intval($_GET['b_id']);
        $delBranch=Db::table('qbl_branch')->where(['b_id'=> $branch_id])->delete();
        if($delBranch){
            $this->success('删除成功','branch');
        }else{
            $this->error('删除失败','branch');
        }
    }

    //类型添加
    public function addType(){
        if($_POST){
            $type=$_GET['type'];
            $data['type_name']=$_POST['type_name'];
            $data['type_remarks']=$_POST['type_remarks'];
            if($type == 1){
                $data['type_sort']=1;
            }elseif($type == 2){
                $data['type_sort']=2;
            }elseif($type == 3){
                $data['type_sort']=3;
            }elseif($type == 4){
                $data['type_sort']=4;
            }elseif($type == 5){
                $data['type_sort']=5;
            }
            $data['type_isable']=$_POST['type_isable'];
            $addType=Db::table('qbl_type')->insert($data);
            if($addType){
                $this->success('添加成功','typeList');
            }else{
                $this->error();
            }
        }else{
            //装修品质需要的站点名称
            $branchInfo=Db::table('qbl_branch')
                ->field('b_id,b_name')
                ->where(['b_isopen' => '1'])
                ->select();
            $type=$_GET['type'];
            $this->assign('branchInfo',$branchInfo);
            $this->assign('type',$type);
            return $this->fetch();
        }
    }

    //类型添加
    public function editType(){
        $typeId=intval($_GET['type_id']);
        if($_POST){
            $data['type_name']=$_POST['type_name'];
            $data['type_remarks']=$_POST['type_remarks'];
            $data['type_isable']=$_POST['type_isable'];
            $addType=Db::table('qbl_type')->where(['type_id' => $typeId])->update($data);
            if($addType){
                $this->success('修改成功','typeList');
            }else{
                $this->error('您未做任何修改','typeList');
            }
        }else{
            $typeInfo=Db::table('qbl_type')->where(['type_id' => $typeId])->find();
            if($typeInfo){
                $this->assign('typeInfo',$typeInfo);
            }
            return $this->fetch();
        }
    }
    //删除一类型：
    public function delType(){
        $type_id=intval($_GET['type_id']);
        $delType=Db::table('qbl_type')->where(['type_id' =>$type_id])->delete();
        if($delType){
            $this->success('删除成功','typeList');
        }else{
            $this->success('删除失败','typeList');
        }
    }


    //图片上传的方法
    public function upload(){
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $path_filename =  $info->getFilename();
            $path_date=date("Ymd",time());
            $path="/uploads/".$path_date."/".$path_filename;
            // 成功上传后 返回上传信息
            return json(array('state'=>1,'path'=>$path,'msg'=> '图片上传成功！'));
        }else{
            // 上传失败返回错误信息
            return json(array('state'=>0,'msg'=>'上传失败,请重新上传！'));
        }
    }

    //类型列表
    public function typeList(){
        //类型参数
        $typeInfo=Db::table('qbl_type')
            ->order('type_id desc')
            ->where(['type_sort' => 1])
            ->select();
        //装修风格
        $styleInfo=Db::table('qbl_type')
            ->order('type_id desc')
            ->where(['type_sort' => 2])
            ->select();
        //装修品质
        $qualityInfo=Db::table('qbl_type')
            ->order('type_id desc')
            ->where(['type_sort' => 3])
            ->select();
        //房屋类型
        $houseInfo=Db::table('qbl_type')
            ->order('type_id desc')
            ->where(['type_sort' => 4])
            ->select();
        //房屋面积
        $areaInfo=Db::table('qbl_type')
            ->order('type_id desc')
            ->where(['type_sort' => 5])
            ->select();
        $this->assign('qualityInfo',$qualityInfo);
        $this->assign('styleInfo',$styleInfo);
        $this->assign('typeInfo',$typeInfo);
        $this->assign('houseInfo',$houseInfo);
        $this->assign('areaInfo',$areaInfo);
        return $this->fetch();
    }
}