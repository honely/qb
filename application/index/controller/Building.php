<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/2
 * Time: 10:15
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class Building extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }

    //小区楼盘
    public function builds(){
        $city_id=intval(session('ad_c_id'));
        $where=" bu_c_id = ".$city_id;
        $count=Db::table('qbl_buildings')
                ->where($where)
                ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $builds=Db::table('qbl_buildings')
            ->join('qbl_province','qbl_province.p_id = qbl_buildings.bu_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_buildings.bu_c_id')
            ->limit(($page-1)*$limit,$limit)
            ->where($where)
            ->order('bu_id desc')
            ->select();
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('builds',$builds);
        return $this->fetch();
    }



    //添加楼盘
    public function add(){
        if($_POST){
            $data['bu_name'] = $_POST['bu_name'];
            $data['bu_desc'] = $_POST['bu_desc'];
            $data['bu_location'] = $_POST['bu_location'];
            $data['bu_address'] = $_POST['bu_address'];
            $data['bu_p_id'] = $_POST['bu_p_id'];
            $data['bu_img_alt'] = $_POST['bu_img_alt'];
            $data['bu_c_id'] = $_POST['bu_c_id'];
            $data['bu_img'] = $_POST['bu_img'];
            $data['bu_seo_title'] = $_POST['bu_seo_title'];
            $data['bu_seo_keywords'] = $_POST['bu_seo_keywords'];
            $data['bu_seo_desc'] = $_POST['bu_seo_desc'];
            $data['bu_activity'] = $_POST['bu_activity'];
            $data['bu_seo_keywords'] = $_POST['bu_seo_keywords'];
            $data['bu_url'] = $_POST['bu_url'];
            $data['bu_isable'] = $_POST['bu_isable'];
            $add=Db::table('qbl_buildings')->insert($data);
            if($add){
                $this->success('添加楼盘成功','builds');
            }else{
                $this->error('添加楼盘失败','builds');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }

    //修改楼盘
    public function edit(){
        $bu_id=intval($_GET['bu_id']);
        if($_POST){
            $data['bu_name'] = $_POST['bu_name'];
            $data['bu_desc'] = $_POST['bu_desc'];
            $data['bu_location'] = $_POST['bu_location'];
            $data['bu_address'] = $_POST['bu_address'];
            $data['bu_p_id'] = $_POST['bu_p_id'];
            $data['bu_c_id'] = $_POST['bu_c_id'];
            $data['bu_img'] = $_POST['bu_img'];
            $data['bu_img_alt'] = $_POST['bu_img_alt'];
            $data['bu_seo_title'] = $_POST['bu_seo_title'];
            $data['bu_seo_keywords'] = $_POST['bu_seo_keywords'];
            $data['bu_seo_desc'] = $_POST['bu_seo_desc'];
            $data['bu_activity'] = $_POST['bu_activity'];
            $data['bu_seo_keywords'] = $_POST['bu_seo_keywords'];
            $data['bu_url'] = $_POST['bu_url'];
            $data['bu_isable'] = $_POST['bu_isable'];
            $edit=Db::table('qbl_buildings')->where(['bu_id' => $bu_id])->update($data);
            if($edit){
                $this->success('修改楼盘成功！','builds');
            }else{
                $this->error('修改楼盘失败！','builds');
            }
        }else{
            $buildsInfo=Db::table('qbl_buildings')->where(['bu_id' => $bu_id])->find();
            $provInfo=Db::table('qbl_province')->select();
            $provid=$buildsInfo['bu_p_id'];
            $cusCity=Db::table('qbl_city')->where(['p_id' => $provid])->select();
            $this->assign('prov',$provInfo);
            $this->assign('city',$cusCity);
            $this->assign('builds',$buildsInfo);
            return $this->fetch();
        }
    }


    //删除楼盘
    public function del(){
        $bu_id=intval($_GET['bu_id']);
        $del=Db::table('qbl_buildings')->where(['bu_id' => $bu_id])->delete();
        if($del){
            $this->success('删除楼盘成功','builds');
        }else{
            $this->error('删除楼盘失败','builds');
        }
    }
}