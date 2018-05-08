<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/6
 * Time: 10:03
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Admin extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }

    //管理员
    public function admin(){
        $count=Db::table('qbl_admin')
            ->join('qbl_province','qbl_province.p_id = qbl_admin.ad_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_admin.ad_c_id')
            ->join('qbl_role','qbl_role.r_id = qbl_admin.ad_role')
            ->join('qbl_branch','qbl_branch.b_id = qbl_admin.ad_branch')
            ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $admin=Db::table('qbl_admin')
            ->join('qbl_province','qbl_province.p_id = qbl_admin.ad_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_admin.ad_c_id')
            ->join('qbl_role','qbl_role.r_id = qbl_admin.ad_role')
            ->join('qbl_branch','qbl_branch.b_id = qbl_admin.ad_branch')
            ->limit(($page-1)*$limit,$limit)
            ->order('ad_id desc')
            ->select();
        foreach($admin as $k => $v){
            $admin[$k]['ad_sex'] = $v['ad_sex']== 1 ? '男' :'女';
        }
        $menuList=Db::table('qbl_menu')
            ->where(['m_fid' => '0', 'm_type' => '1'])
            ->order('m_id desc')
            ->select();
        foreach ($menuList as $k =>$v){
            $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
        }
        $this->assign('menuList',$menuList);
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('admin',$admin);
        return $this->fetch();
    }



    //添加管理员
    public function add(){
        if($_POST){
            $data['ad_realname'] = $_POST['ad_realname'];
            $data['ad_sex'] = $_POST['ad_sex'];
            $data['ad_p_id'] = $_POST['ad_p_id'];
            $data['ad_c_id'] = $_POST['ad_c_id'];
            $data['ad_branch'] = $_POST['ad_branch'];
            $data['ad_phone'] = $_POST['ad_phone'];
            $data['ad_email'] = $_POST['ad_email'];
            $data['ad_isable'] = $_POST['ad_isable'];
            $data['ad_role'] = $_POST['ad_role'];
            $data['ad_createtime'] = time();
            $data['ad_img'] =  '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg';
            $data['ad_password'] = md5('123456');
            $add=Db::table('qbl_admin')->insert($data);
            if($add){
                $this->success('添加管理员成功','admin');
            }else{
                $this->error('添加管理员失败','admin');
            }
        }else{
            //站点
            $brand=Db::table('qbl_branch')->field('b_id,b_name')->select();
            $this->assign('brand',$brand);
            $provInfo=Db::table('qbl_province')->select();
            //角色
            $roleInfo=Db::table('qbl_role')
                ->where('r_id','<>',1)
                ->field('r_id,r_name')
                ->select();
            $this->assign('role',$roleInfo);
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }

    //修改管理员
    public function edit(){
        $ad_id=intval($_GET['ad_id']);
        if($_POST){
            $data['ad_realname'] = $_POST['ad_realname'];
            $data['ad_sex'] = $_POST['ad_sex'];
            $data['ad_p_id'] = $_POST['ad_p_id'];
            $data['ad_c_id'] = $_POST['ad_c_id'];
            $data['ad_branch'] = $_POST['ad_branch'];
            $data['ad_phone'] = $_POST['ad_phone'];
            $data['ad_role'] = $_POST['ad_role'];
            $data['ad_email'] = $_POST['ad_email'];
            $data['ad_isable'] = $_POST['ad_isable'];
            $edit=Db::table('qbl_admin')->where(['ad_id' => $ad_id])->update($data);
            if($edit){
                $this->success('修改管理员成功！','admin');
            }else{
                $this->error('修改管理员失败！','admin');
            }
        }else{
            $adminInfo=Db::table('qbl_admin')->where(['ad_id' => $ad_id])->find();
            $provid=$adminInfo['ad_p_id'];
            $cityId=$adminInfo['ad_c_id'];
            $cusCity=Db::table('qbl_city')->where(['p_id' => $provid])->select();
            $bran=Db::table('qbl_branch')->where(['b_city' => $cityId])->field('b_id,b_name')->select();
            $this->assign('city',$cusCity);
            $this->assign('bran',$bran);
            //站点
            $brand=Db::table('qbl_branch')->field('b_id,b_name')->select();
            $this->assign('brand',$brand);
            $provInfo=Db::table('qbl_province')->select();
            //角色
            $roleInfo=Db::table('qbl_role')
                ->field('r_id,r_name')
                ->where('r_id','<>',1)
                ->select();
            $this->assign('role',$roleInfo);
            $this->assign('prov',$provInfo);
            $this->assign('admin',$adminInfo);
            return $this->fetch();
        }
    }


    //删除管理员
    public function del(){
        $ad_id=intval($_GET['ad_id']);
        $del=Db::table('qbl_admin')->where(['ad_id' => $ad_id])->delete();
        if($del){
            $this->success('删除管理员成功','admin');
        }else{
            $this->error('删除管理员失败','admin');
        }
    }

    //根据城市id获取
    public function getBranchName(){
        $c_id=intval($_GET['c_id']);
        $branch=Db::table('qbl_branch')
            ->where(['b_city' => $c_id])
            ->field('b_id,b_name')
            ->select();
        if($branch){
            return  json(['code' => '1','data' => $branch]);
        }else{
            return  json(['code' => '0','data' => ['']]);
        }
    }





    //角色配置
    public function role(){
        $count=Db::table('qbl_role')
            ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $role=Db::table('qbl_role')
            ->limit(($page-1)*$limit,$limit)
            ->order('r_id desc')
            ->select();
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('role',$role);
        return $this->fetch();
    }



    public  function  addRole(){
        if($_POST){
        }else{
            //顶级菜单
            $menuList=Db::table('qbl_menu')
                ->where(['m_fid' => '0', 'm_type' => '1'])
                ->order('m_id desc')
                ->select();
            foreach ($menuList as $k =>$v){
                //子菜单
                $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
                //操作方法；
                foreach($menuList[$k]['child'] as $key =>$val){
                    $menuList[$k]['child'][$key]['children']= Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '2'])->select();
                }
            }
            $this->assign('menuList',$menuList);
            return $this->fetch();
        }
    }



    //添加角色取到m_ids
    public function addmenuids(){
        $data['r_power']=trim($_GET['ids'],',');
        $data['r_name']=trim($_GET['r_name']);
        $addRole=Db::table('qbl_role')->insert($data);
        if($addRole){
            $this->success('添加角色成功','role');
        }else{
            $this->error('添加角色失败','role');
        }
    }


    //editRole
    public function editRole(){
        $r_id=intval($_GET['r_id']);
        if($_POST){

        }else{
            $roleInfo=Db::table('qbl_role')->where(['r_id' => $r_id])->find();
            $m_ids = "";
            if($roleInfo['r_power']){
                $m_ids = explode(',',trim($roleInfo['r_power'],','));
            }
            //顶级菜单
            $menuList=Db::table('qbl_menu')
                ->where(['m_fid' => '0', 'm_type' => '1'])
                ->order('m_id desc')
                ->select();
            foreach ($menuList as $k =>$v){
                //子菜单
                $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
                //操作方法；
                foreach($menuList[$k]['child'] as $key =>$val){
                    $menuList[$k]['child'][$key]['children']= Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '2'])->select();
                }
            }
            $this->assign('menuList',$menuList);
            $this->assign('m_ids',$m_ids);
            $this->assign('roleInfo',$roleInfo);
            return $this->fetch();
        }
    }


    //editmenuids
    public function editmenuids(){
        $r_id=intval($_GET['r_id']);
        $data['r_power']=$_GET['ids'];
        $data['r_name']=$_GET['r_name'];
        $edit=Db::table('qbl_role')->where(['r_id' => $r_id])->update($data);
        if($edit){
            $this->success('修改角色成功','role');
        }else{
            $this->error('修改角色失败','role');
        }
    }

    //delrole
    public function delrole(){
        $r_id=intval($_GET['r_id']);
        $del=Db::table('qbl_role')->where(['r_id' => $r_id])->delete();
        if($del){
            $this->success('删除角色成功','role');
        }else{
            $this->error('删除角色失败','role');
        }
    }




    //菜单列表
    public  function menu(){
        //父级id
        $m_fid = "0";
        if(isset($_GET['m_id'])){
            $m_fid=intval($_GET['m_id']);
        }
        $where=" m_fid = ".$m_fid." ";
        $count=Db::table('qbl_menu')
            ->where(['m_type' => '1'])
            ->where($where)
            ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $menuList=Db::table('qbl_menu')
            ->where(['m_type' => '1'])
            ->where($where)
            ->order('m_id desc')
            ->limit(($page-1)*$limit,$limit)
            ->select();
        foreach ($menuList as $k =>$v){
            $menuList[$k]['child'] = Db::table('qbl_menu')->where(['m_fid' => $v['m_id'], 'm_type' => '1'])->select();
            $menuList[$k]['m_type'] = $v['m_type'] == 1 ? "菜单" : "操作";
        }
        $this->assign('m_fid',$m_fid);
        $this->assign('menuList',$menuList);
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        return  $this->fetch();
    }


    //添加菜单
    public function addmenu(){
        if($_POST){
            $data['m_name']=$_POST['m_name'];
            $data['m_fid']=$_POST['m_fid'];
            $data['m_type']=$_POST['m_type'];
            $data['m_control']=$_POST['m_control'];
            $data['m_action']=$_POST['m_action'];
            $data['m_icon']=$_POST['m_icon'];
            $data['m_sort']=$_POST['m_sort'];
            $addMenu=Db::table('qbl_menu')->insert($data);
            if($addMenu){
                $this->success('添加菜单成功！','menu');
            }else{
                $this->error('添加菜单失败！','menu');
            }
        }else{
            if(isset($_GET)){
                $m_fid=intval($_GET['m_fid']);
                if($m_fid){//非顶级菜单
                    $finfo=Db::table("qbl_menu")->where("m_id=".$m_fid)->find();
                    $this->assign('finfo',$finfo);
                }else{//顶部菜单
                    $this->assign('finfo',array("m_id"=>0,"m_fid"=>0,"m_name"=>'顶级菜单'));
                }
                return $this->fetch();
            }
        }
    }




    //修改菜单
    public function editmenu(){
        if(isset($_GET['m_id'])){
            $m_id=$_GET['m_id'];
            if($_POST){
                $data['m_name']=$_POST['m_name'];
                $data['m_fid']=$_POST['m_fid'];
                $data['m_type']=$_POST['m_type'];
                $data['m_control']=$_POST['m_control'];
                $data['m_action']=$_POST['m_action'];
                $data['m_icon']=$_POST['m_icon'];
                $data['m_sort']=$_POST['m_sort'];
                $editMenu=Db::table('qbl_menu')->where(['m_id' => $m_id])->update($data);
                if($editMenu){
                    $this->success('修改菜单成功！','menu');
                }else{
                    $this->error('修改菜单失败！','menu');
                }
            }else{
                if(isset($_GET)){
                    $m_fid=intval($_GET['m_fid']);
                    if($m_fid){//非顶级菜单
                        $finfo=Db::table("qbl_menu")->where(['m_id' => $m_fid])->find();
                        $menuInfo=Db::table('qbl_menu')->where(['m_id' => $m_id])->find();
                        $this->assign('finfo',$finfo);
                        $this->assign('menu',$menuInfo);
                    }else{//顶部菜单
                        $menuInfo=Db::table('qbl_menu')->where(['m_id' => $m_id])->find();
                        $this->assign('finfo',array("m_id"=>0,"m_fid"=>0,"m_name"=>'顶级菜单'));
                        $this->assign('menu',$menuInfo);
                    }
                    return $this->fetch();
                }
            }
        }
    }


    //删除某个菜单
    public function delmenu(){
        $m_id=$_GET['m_id'];
        $isChild=Db::table('qbl_menu')->where(['m_fid' => $m_id])->find();
        if($isChild){
            $this->error('此菜单下有子菜单或操作，不能删除！','menu');
        }else{
            $del=Db::table('qbl_menu')->where(['m_id' => $m_id])->delete();
            if($del){
                $this->success('删除成功！','menu');
            }else{
                $this->error('删除失败！','menu');
            }
        }
    }

}