<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/28
 * Time: 11:11
 * Name: 案例管理
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use  think\Request;

class Example extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    //案例列表
    public function example(){
        $count=Db::table('qbl_case')->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $example=Db::table('qbl_case')
            ->join('qbl_city','qbl_city.c_id = qbl_case.case_c_id')
            ->join('qbl_province','qbl_province.p_id = qbl_case.case_p_id')
            ->join('qbl_designer','qbl_designer.des_id = qbl_case.case_designer')
            ->join('qbl_type','qbl_type.type_id = qbl_case.case_style')
//            ->field('qbl_case')
            ->limit(($page-1)*$limit,$limit)
            ->order('case_id desc')
            ->select();
        foreach($example as $k => $v ){
            $example[$k]['case_decotime'] = date('Y-m-d H:i:s',$v['case_decotime']);
            $example[$k]['case_isable'] = $v['case_isable'] == 1 ? "是" : "否" ;
        }
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('example',$example);
        return $this->fetch();
    }





    //发布案例
    public function add(){

        if($_POST){
            $data['case_img'] = implode(',',$_POST['case_img']);
            $data['case_img_title'] = implode(',',$_POST['case_img_title']);
            $data['case_img_desc'] = implode(',',$_POST['case_img_desc']);
            $data['case_title']=$_POST['case_title'];
            $data['case_style']=$_POST['case_style'];
            $data['case_p_id']=$_POST['case_p_id'];
            $data['case_c_id']=$_POST['case_c_id'];
            $data['case_price']=$_POST['case_price'];
            $data['case_type']=$_POST['dinner'].",".$_POST['room'].",".$_POST['wash'];
            $data['case_bulid']=$_POST['case_bulid'];
            $data['case_type_iamge']=$_POST['case_type_iamge'];
            $data['case_type_title']=$_POST['case_type_title'];
            $data['case_type_desc']=$_POST['case_type_desc'];
            $data['case_area']=$_POST['case_area'];
            $data['case_url']=$_POST['case_url'];
            $data['case_remarks']=$_POST['case_remarks'];
            $data['case_designer']=$_POST['case_designer'];
            $data['case_seo_tilte']=$_POST['case_seo_tilte'];
            $data['case_seo_keywords']=$_POST['case_seo_keywords'];
            $data['case_seo_desc']=$_POST['case_seo_desc'];
            $data['case_istop']=$_POST['case_istop'];
            $data['case_decotime']=time();
            $data['case_isable']=$_POST['case_isable'];
            $add=Db::table('qbl_case')->insert($data);
            if($add){
                $this->success('发布案例成功！','example');
            }else{
                $this->error('发布案例失败！','example');
            }
        }else{
            //设计师
            $design=Db::table('qbl_designer')->where(['des_isable' => '1'])->field('des_id,des_name')->select();
            $this->assign('design',$design);
            //风格
            $style=Db::table('qbl_type')->where(['type_isable' => '1','type_sort' => '2'])->field('type_id,type_name')->select();
            $this->assign('style',$style);
            //楼盘
            $build=Db::table('qbl_buildings')->where(['bu_isable' => '1'])->field('bu_id,bu_name')->select();
            $this->assign('build',$build);
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }




    //修改案例内容
    public function edit(){
        $case_id=intval($_GET['case_id']);
        if($_POST){
            $data['case_img'] = implode(',',$_POST['case_img']);
            $data['case_img_title'] = implode(',',$_POST['case_img_title']);
            $data['case_img_desc'] = implode(',',$_POST['case_img_desc']);
            $data['case_title']=$_POST['case_title'];
            $data['case_style']=$_POST['case_style'];
            $data['case_p_id']=$_POST['case_p_id'];
            $data['case_c_id']=$_POST['case_c_id'];
            $data['case_price']=$_POST['case_price'];
            $data['case_type']=$_POST['dinner'].",".$_POST['room'].",".$_POST['wash'];
            $data['case_bulid']=$_POST['case_bulid'];
            $data['case_type_iamge']=$_POST['case_type_iamge'];
            $data['case_type_title']=$_POST['case_type_title'];
            $data['case_type_desc']=$_POST['case_type_desc'];
            $data['case_area']=$_POST['case_area'];
            $data['case_url']=$_POST['case_url'];
            $data['case_remarks']=$_POST['case_remarks'];
            $data['case_designer']=$_POST['case_designer'];
            $data['case_seo_tilte']=$_POST['case_seo_tilte'];
            $data['case_seo_keywords']=$_POST['case_seo_keywords'];
            $data['case_seo_desc']=$_POST['case_seo_desc'];
            $data['case_istop']=$_POST['case_istop'];
            $data['case_decotime']=time();
            $data['case_isable']=$_POST['case_isable'];
            $edit=Db::table('qbl_case')->where(['case_id'=>$case_id])->update($data);
            if($edit){
                $this->success('修改案例成功','example');
            }else{
                $this->error('修改案例失败','example');
            }
        }else{
            //设计师
            $design=Db::table('qbl_designer')->where(['des_isable' => '1'])->field('des_id,des_name')->select();
            $this->assign('design',$design);
            //风格
            $style=Db::table('qbl_type')->where(['type_isable' => '1','type_sort' => '2'])->field('type_id,type_name')->select();
            $this->assign('style',$style);
            //楼盘
            $build=Db::table('qbl_buildings')->where(['bu_isable' => '1'])->field('bu_id,bu_name')->select();
            $this->assign('build',$build);
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            $artInfo=Db::table('qbl_case')->where(['case_id'=>$case_id])->find();
            //案例图片
            $artInfo['case_img']=explode(',',$artInfo['case_img']);
            $artInfo['case_img_title']=explode(',',$artInfo['case_img_title']);
            $artInfo['case_img_desc']=explode(',',$artInfo['case_img_desc']);
            $artInfo['case_type']=explode(',',$artInfo['case_type']);
            $provId=$artInfo['case_p_id'];
            $city=Db::table('qbl_city')->where(['p_id' => $provId])->select();
            $this->assign('city',$city);
            $this->assign('case',$artInfo);
            return $this->fetch();
        }
    }

    //删除某一案例
    public function del(){
        $case_id=intval($_GET['case_id']);
        $delArt=Db::table('qbl_case')->where(['case_id' => $case_id])->delete();
        if($delArt){
            $this->success('删除案例成功','example');
        }else{
            $this->error('删除案例失败','example');
        }
    }





    public function editUpload(Request $request)
    {
        $file 	= $request->file('file');
        $info 	= $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $name_path =str_replace('\\',"/",$info->getSaveName());
            $result['data']["src"] = "/uploads/layui/".$name_path;
            $url 	= $info->getSaveName();
            //图片上传成功后，组好json格式，返回给前端
            $arr   = array(
                'code' => 0,
                'message'=>'',
                'data' =>array(
                    'src' => "/uploads/".$name_path
                ),
            );
        }
        echo json_encode($arr);
    }


























    //多图上传测试；
    public function index(){
        return $this->fetch();
    }

    public function upload(){
        $pathName  =  $this->request->param('path');//图片存放的目录
        $file = request()->file('file');//获取文件信息
        $path =  'static/uploads/' . (!empty($pathName) ? $pathName : 'case_images');//文件目录
        //创建文件夹
        if(!is_dir($path)){
            mkdir($path, 0755, true);
        }
        $info = $file->move($path);//保存在目录文件下
        if ($info && $info->getPathname()) {
            $data = [
                'status' => 1,
                'data' =>  '/'.$info->getPathname(),
            ];
            echo exit(json_encode($data));
        } else {
            echo exit(json_encode($file->getError()));
        }
    }



    public function addimg(){
        return $this->fetch();
    }

    public function addqwe(){
        //设计师
        $design=Db::table('qbl_designer')->where(['des_isable' => '1'])->field('des_id,des_name')->select();
        $this->assign('design',$design);
        //风格
        $style=Db::table('qbl_type')->where(['type_isable' => '1','type_sort' => '2'])->field('type_id,type_name')->select();
        $this->assign('style',$style);
        //楼盘
        $build=Db::table('qbl_buildings')->where(['bu_isable' => '1'])->field('bu_id,bu_name')->select();
        $this->assign('build',$build);
        $provInfo=Db::table('qbl_province')->select();
        $this->assign('prov',$provInfo);
        return $this->fetch();
    }
}