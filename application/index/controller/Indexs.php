<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/7
 * Time: 11:33
 */
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;


class Indexs extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }

//`m_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜单id',
//`m_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '菜单名称',
//`m_fid` int(11) DEFAULT NULL COMMENT '菜单父级id',
//`m_control` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '控制器名称，小写',
//`m_action` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '方法名，小写',
//`m_sort` int(10) DEFAULT NULL COMMENT '排序',
//`m_type` int(10) DEFAULT NULL COMMENT '菜单类型1.菜单；2.操作',
//`m_icon` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '菜单图标',
    //头部渲染
    public function header(){
        $menuList=Db::table('qbl_menu')
            ->where(['m_fid' => '0', 'm_type' => '1'])
            ->order('m_id desc')
            ->select();
        foreach ($menuList as $k =>$v){
            $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
        }
        $this->assign('menuList',$menuList);
        return  $this->fetch();
    }
    //尾部渲染
    public function footer(){
        return  $this->fetch();
    }

    public function index_1(){
        //获取管理员信息
        $adminId=session('adminId');
        $adminInfo=Db::table('qbl_admin')->where(['ad_id' => $adminId])->find();
		$menuList=Db::table('qbl_menu')
            ->where(['m_fid' => '0', 'm_type' => '1'])
            ->order('m_id desc')
            ->select();
        foreach ($menuList as $k =>$v){
            $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
        }
        $this->assign('admin',$adminInfo);
        $this->assign('menuList',$menuList);
        return  $this->fetch();
    }

 public function index(){
        $adminId = session('adminId');
        $userData = Db::table("qbl_admin")
                    ->alias('admin')
                    ->join('qbl_role role',"admin.ad_role=role.r_id")
                    ->where(['admin.ad_id' => $adminId])
                    ->find();
        if($userData){
            $power_list = explode(',',trim($userData['r_power'],','));
            if($power_list){
                foreach ($power_list as $val){
                    $menu_list = Db::table("qbl_menu")
                                 ->where(['m_id' =>$val])
                                 ->find();
                    $powerData[] = $menu_list;
                }
            }
        };
        if($powerData){
            $parentData = [];
            foreach ($powerData as $key => $val){
                if($val['m_fid'] == 0 && $val['m_type'] == 1){
                    $parentData[] = $val;
                }
            }
            foreach ($powerData as $key => $val){
                if($val['m_fid'] != 0 && $val['m_type'] == 1){
                    if(!empty($parentData)){
                        foreach ($parentData as $k => $v){
                            if($v !== null){
                                if($v['m_id'] == $val['m_fid']){
                                    $parentData[$k]['child'][] = $val;
                                }
                            }
                        }
                    }
                }
            }
        }
        $adminInfo=Db::table('qbl_admin')->where(['ad_id' => $adminId])->find();
        $this->assign('admin',$adminInfo);
        $this->assign('menuList',$parentData);
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


    //网站首页。欢迎页
    public function welcome(){
        return $this->fetch();
    }
}
