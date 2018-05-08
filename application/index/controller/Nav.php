<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/28
 * Time: 9:19
 * Name: 导航管理： 1.列表；2.添加导航；3.修改；4.删除；5.禁用；6.条件查找。
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Nav extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //导航列表
    public function navList(){
        $nav=Db::table('qbl_nav')->order('nav_id desc')->select();
        $this->assign('nav',$nav);
        return $this->fetch();
    }



    //添加导航
    public function add(){
        if($_POST){
            $data['nav_title'] = $_POST['nav_title'];
            $data['nav_isable'] = $_POST['nav_isable'];
            $add=Db::table('qbl_nav')->insert($data);
            if($add){
                $this->success('添加导航成功','navlist');
            }else{
                $this->error('添加导航失败','navlist');
            }
        }else{
            return $this->fetch();
        }
    }

    //修改导航

    public function edit(){
        $nav_id=intval($_GET['nav_id']);
        if($_POST){
            $data['nav_title'] = $_POST['nav_title'];
            $data['nav_isable'] = $_POST['nav_isbale'];
            $edit=Db::table('qbl_nav')->where()->update($data);
            if($edit){
                $this->success('修改导航成功！','navlist');
            }else{
                $this->error('修改导航失败！','navlist');
            }
        }else{
            $navInfo=Db::table('qbl_nav')->where(['nav_id' => $nav_id])->find();
            $this->assign('nav',$navInfo);
            return $this->fetch();
        }
    }


    //删除导航
    public function del(){
        $nav_id=intval($_GET['nav_id']);
        $del=Db::table('qbl_nav')->where(['nav_id' => $nav_id])->delete();
        if($del){
            $this->success('删除成功','navlist');
        }else{
            $this->error('删除失败','navlist');
        }
    }

}