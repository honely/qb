<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/28
 * Time: 11:35
 */
namespace app\home\controller;
use think\Controller;
use think\Db;

class Index extends Controller{

    //头部
    public function header(){
        return $this->fetch();
    }
    //尾部
    public function footer(){
        return $this->fetch();
    }
    //渲染首页
    public function index(){
        if($_POST){
            dump($_POST);
            $stime=strtotime(date('Y-m-d 00:00:00'));
            $etime=strtotime(date('Y-m-d 23:59:59'));
            //获取当日预约的数量
            $cusNum=Db::table('qbl_customer')->where('cus_opptime','between',[$stime,$etime])->count();
            //生成用户编号；
            $data['cus_bid'] = date('Ymd').sprintf("%04d", $cusNum+1);
            $data['cus_link'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $data['cus_position'] = $_POST['title'];
            $data['cus_sys'] = $_POST['bid'];
            $data['cus_phone'] = $_POST['mycall'];
            $name="";
            if(isset($_POST['name']) && $_POST['name'] != ""){
                $name=$_POST['name'];
            }
            $data['cus_name'] = $name;
            $data['cus_from'] = $_POST['laiyuan'];
            $data['cus_origin'] = $_POST['chuangyi'];
            $data['cus_opptime'] = time();
            $data['cus_ip'] = $_SERVER['SERVER_ADDR'];
            //判断当前用户是否用重复提交
            $isRepeat=Db::table('qbl_customer')
                //时间限制
                ->where('cus_opptime','between',[$stime,$etime])
                //手机号和限制
                ->where(['cus_phone' => $_POST['mycall'] , 'cus_ip' => $_SERVER['SERVER_ADDR']])
                ->find();
            if($isRepeat){
                $this->error('您已预约，请勿重复提交！','index');
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    $this->success('预约成功！','index');
                }else{
                    $this->success('预约成功！','index');
                }
            }
        }
        return $this->fetch();
    }
    //渲染定制整装
    public function product(){
        return $this->fetch();
    }

    //渲染量房设计
    public function design(){
        return $this->fetch();
    }

    //渲染智能报价
    public function quote(){
        return $this->fetch();
    }


    //渲染关于我们
    public function about(){
        return $this->fetch();
    }

    //渲染样板间
    public function demo(){
        return $this->fetch();
    }
    public function case_list(){
        return $this->fetch();
    }




    public function cus_order(){
    }
}