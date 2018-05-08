<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;


class Index extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }


    //头部渲染
    public function header(){
        return  $this->fetch();
    }
    //尾部渲染
    public function footer(){
        return  $this->fetch();
    }

    public function index(){
        return  $this->fetch();
    }

    //重置密码
    public function resetpwd(){
        return  $this->fetch();
    }

    //基本资料
    public function details(){
        return $this->fetch();
    }
}
