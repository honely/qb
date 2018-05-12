<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/12
 * Time: 9:19
 */
namespace app\xian\controller;
use think\Controller;
use think\Request;
use think\Db;

class Xian extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        /*
         * 西安千百炼
         * 此方法里面参数禁止修改
         * */
        session('cus_provid',1);
        session('cus_cityid',3);
        session('cus_branchid',22);
    }
    public function index(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }

    public function about(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function activity(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function contact(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function fresh(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function design(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function example(){
        return $this->fetch();
    }


    public function orangequote(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function process(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function product(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }


    public function quote(){
        if($_POST){
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
            if(empty($_POST['mycall'])){
                return  json(['code' => '3','msg' => '请输入电话号码！']);
            }else{
                if(!preg_match("/^1[23456789]{1}\d{9}$/",$_POST['mycall'])){
                    return  json(['code' => '4','msg' => '电话号码格式错误！']);
                }
            }
            //名字
            $name="";
            if(isset($_POST['name'])){
                if(empty($_POST['name'])){
                    return  json(['code' => '4','msg' => '请输您的称呼！']);
                }else{
                    $name=$_POST['name'];
                }
            }
            $data['cus_name'] = $name;
            //小区名称
            $builds="";
            if(isset($_POST['bulids']) && $_POST['bulids'] != ""){
                $builds=$_POST['bulids'];
            }
            $data['cus_build'] = $builds;
            //房屋面积
            $area="";
            if(isset($_POST['mianji']) && $_POST['mianji'] != ""){
                $area=$_POST['mianji'];
            }
            $data['cus_area'] = $area;
            //户型
            $houseType="";
            if(isset($_POST['woshi']) && $_POST['woshi'] != ""){
                $houseType=$_POST['woshi']."".$_POST['keting']."".$_POST['weishengjian'];
            }
            $data['cus_house_type'] = $houseType;
            //房屋类型
            $leixing="";
            if(isset($_POST['leixing']) && $_POST['leixing'] != ""){
                $leixing=$_POST['leixing'];
            }
            $data['cus_type'] = $leixing;
            //装修风格
            $fengge="";
            if(isset($_POST['fengge']) && $_POST['fengge'] != ""){
                $fengge=$_POST['fengge'];
            }
            $data['cus_style'] = $fengge;
            //精装品质
            $pinzhi="";
            if(isset($_POST['pinzhi']) && $_POST['pinzhi'] != ""){
                $pinzhi=$_POST['pinzhi'];
            }
            $data['cus_quality'] = $pinzhi;
            //省份
            $prov="";
            if(isset($_POST['provinces']) && $_POST['provinces'] != ""){
                $prov=$_POST['provinces'];
            }
            //城市
            $city="";
            if(isset($_POST['citys']) && $_POST['citys'] != ""){
                $city=$_POST['citys'];
            }
            $cus_p_id=session('cus_provid');
            $cus_c_id=session('cus_cityid');
            $data['cus_provid'] = $prov ? $prov : $cus_p_id;
            $data['cus_cityid'] = $city ? $city : $cus_c_id;
            $data['cus_branchid'] =session('cus_branchid');
            $data['cus_status'] ="41";      //此参数禁止修改
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
                return  json(['code' => '2','msg' => '您已预约，请勿重复提交！']);
            }else{
                $makePoint=Db::table('qbl_customer')->insert($data);
                if($makePoint){
                    return  json(['code' => '1','msg' => '预约成功！']);
                }else{
                    return  json(['code' => '0','msg' => '预约失败！']);
                }
            }
        }else{
            return $this->fetch();
        }
    }

}