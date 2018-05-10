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
class Designer extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //设计师
    public function team(){

        $ad_role=intval(session('ad_role'));
        //分站id
        $ad_branch = intval(session('ad_branch'));
        if($ad_role == 1 ){// 超级管理员
            $where =' 1 = 1';
        }else{
            $where=' des_b_id = '.$ad_branch;
        }

        $count=Db::table('qbl_designer')
            ->join('qbl_province','qbl_province.p_id = qbl_designer.des_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_designer.des_c_id')
            ->join('qbl_branch','qbl_branch.b_id = qbl_designer.des_b_id')
            ->where($where)
            ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $design=Db::table('qbl_designer')
            ->join('qbl_province','qbl_province.p_id = qbl_designer.des_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_designer.des_c_id')
            ->join('qbl_branch','qbl_branch.b_id = qbl_designer.des_b_id')
            ->limit(($page-1)*$limit,$limit)
            ->order('des_id desc')
            ->where($where)
            ->select();
		if($design){
			foreach($design as $key => $val){
				$type_id = explode(',',trim($val['des_tanlent'],','));
				$type_val = "";
				for($i = 0; $i < count($type_id); $i++){
					$typeData = Db::table("qbl_type")
								->where(["type_id" => $type_id[$i]])
								->find();
					$type_val .= $typeData ? $typeData['type_name'].',' : "";			
				}
				$design[$key]['type_name'] = trim($type_val,',');
			}
		}
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('design',$design);
        return $this->fetch();
    }



    //添加设计师
    public function add(){
        if($_POST){
            $data['des_name'] = $_POST['des_name'];
            $data['des_img'] = $_POST['des_img'];
            $data['des_age'] = $_POST['des_age'];
            $data['des_exp'] = $_POST['des_exp'];
            $data['des_img_alt'] = $_POST['des_img_alt'];
            $data['des_tanlent'] = implode(',',array_keys($_POST['des_tanlent']));
            $data['des_guand'] = $_POST['des_guand'];
            $data['des_remarks'] = $_POST['des_remarks'];
            $data['des_isable'] = $_POST['des_isable'];
            $data['des_p_id'] = $_POST['des_p_id'];
            $data['des_c_id'] = $_POST['des_c_id'];
            $data['des_b_id'] = $_POST['des_b_id'];
            $add=Db::table('qbl_designer')->insert($data);
            if($add){
                $this->success('添加设计师成功','team');
            }else{
                $this->error('添加设计师失败','team');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            //设计风格
            $designStyle = Db::table('qbl_type')
                           ->where(['type_sort' => '2','type_isable' => '1'])
                           ->select();
            $this->assign('designStyle',$designStyle);
            return $this->fetch();
        }
    }

    //修改设计师
    public function edit(){
        $des_id=intval($_GET['des_id']);
        if($_POST){
            $data['des_name'] = $_POST['des_name'];
            $data['des_img'] = $_POST['des_img'];
            $data['des_age'] = $_POST['des_age'];
            $data['des_exp'] = $_POST['des_exp'];
            $data['des_img_alt'] = $_POST['des_img_alt'];
            $data['des_tanlent'] = implode(',',array_keys($_POST['des_tanlent']));
            $data['des_guand'] = $_POST['des_guand'];
            $data['des_remarks'] = $_POST['des_remarks'];
            $data['des_isable'] = $_POST['des_isable'];
            $data['des_p_id'] = $_POST['des_p_id'];
            $data['des_c_id'] = $_POST['des_c_id'];
            $data['des_b_id'] = $_POST['des_b_id'];
            $edit=Db::table('qbl_designer')->where(['des_id' => $des_id])->update($data);
            if($edit){
                $this->success('修改设计师成功！','team');
            }else{
                $this->error('修改设计师失败！','team');
            }
        }else{
            $designInfo=Db::table('qbl_designer')->where(['des_id' => $des_id])->find();
            $provInfo=Db::table('qbl_province')->select();
            $provid=$designInfo['des_p_id'];
            $type_list = "";
            if($designInfo['des_tanlent']){
                $type_list = explode(',',trim($designInfo['des_tanlent'],','));
            }

            $cusCity=Db::table('qbl_city')->where(['p_id' => $provid])->select();
            //设计风格
            $designStyle = Db::table('qbl_type')
                ->where(['type_sort' => '2','type_isable' => '1'])
                ->select();
            $c_id=$designInfo['des_c_id'];
            $branch=Db::table('qbl_branch')->where(['b_city' =>$c_id ])->field('b_id,b_name')->select();
            $this->assign('branchs',$branch);
            $this->assign('prov',$provInfo);
            $this->assign('city',$cusCity);
            $this->assign('design',$designInfo);
            $this->assign('designStyle',$designStyle);
            $this->assign('type_list',$type_list);
            return $this->fetch();
        }
    }


    //删除设计师
    public function del(){
        $des_id=intval($_GET['des_id']);
        $del=Db::table('qbl_designer')->where(['des_id' => $des_id])->delete();
        if($del){
            $this->success('删除设计师成功','team');
        }else{
            $this->error('删除设计师失败','team');
        }
    }
}