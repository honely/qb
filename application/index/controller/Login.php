<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/6
 * Time: 9:15
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
class Login extends Controller{


    //用户登录
    public function login(){
        if($_POST){
            $user=trim($_POST['username']);
            $pwd=md5(trim($_POST['password']));
            if(empty($user)){
                $this->error('请输入手机号或密码进行登录！','login');
            }else{
                if(empty($pwd)){
                    $this->error('请输入密码！','login');
                }else{
                    $login=Db::table('qbl_admin')
                        ->where(['ad_email' => $user])
                        ->whereOr(['ad_phone' => $user])
                        ->find();
                    if($login){
                        $pwds=$login['ad_password'];
                        if($pwd == $pwds){
                            session('adminName',$login['ad_realname']);
                            session('adminId',$login['ad_id']);
                            session('ad_c_id',$login['ad_c_id']);
                            $this->success('登录成功！','indexs/index');
                        }else{
                            $this->error('账号或者密码错误！','login');
                        }
                    }else{
                        $this->error('没有改账户信息！');
                    }
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function loginOut()
    {
        session(null);
        $this->success('欢迎再来','login', 3);
    }
}