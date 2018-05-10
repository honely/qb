<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/5/2
 * Time: 16:02
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Topic extends Controller{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }
    public function topic(){

        $ad_role=intval(session('ad_role'));
        //分站id
        $ad_branch = intval(session('ad_branch'));
        if($ad_role == 1 ){// 超级管理员
            $where =' 1 = 1';
        }else{
            $where=' tp_b_id = '.$ad_branch;
        }


        $count=Db::table('qbl_topic')
            ->join('qbl_province','qbl_province.p_id = qbl_topic.tp_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_topic.tp_c_id')
            ->join('qbl_branch','qbl_branch.b_id = qbl_topic.tp_b_id')
            ->where($where)
            ->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $topic=Db::table('qbl_topic')
            ->join('qbl_province','qbl_province.p_id = qbl_topic.tp_p_id')
            ->join('qbl_city','qbl_city.c_id = qbl_topic.tp_c_id')
            ->join('qbl_branch','qbl_branch.b_id = qbl_topic.tp_b_id')
            ->limit(($page-1)*$limit,$limit)
            ->order('tp_id desc')
            ->where($where)
            ->select();
        foreach ($topic as $k =>$v){
            $topic[$k]['tp_createtime'] = date('Y-m-d H:i:s',$v['tp_createtime']);
            $topic[$k]['tp_isable'] =  $topic[$k]['tp_isable']==1 ? "是" : "否";
        }
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('topic',$topic);
        return $this->fetch();
    }

    public function add(){
        if($_POST){
            $data['tp_title']=$_POST['tp_title'];
            $data['tp_p_id']=$_POST['tp_p_id'];
            $data['tp_c_id']=$_POST['tp_c_id'];
            $data['tp_b_id']=$_POST['tp_b_id'];
            $data['tp_content']=$_POST['tp_content'];
            $data['tp_createtime']=time();
            $data['tp_seo_title']=$_POST['tp_seo_title'];
            $data['tp_seo_keywords']=$_POST['tp_seo_keywords'];
            $data['tp_seo_desc']=$_POST['tp_seo_desc'];
            $data['tp_isable']=$_POST['tp_isable'];
            $add=Db::table('qbl_topic')->insert($data);
            if($add){
                $this->success('发布专题成功！','topic');
            }else{
                $this->error('发布专题失败！','topic');
            }
        }else{
            $provInfo=Db::table('qbl_province')->select();
            $this->assign('prov',$provInfo);
            return $this->fetch();
        }
    }

    public function edit(){
        $tp_id=intval($_GET['tp_id']);
        if($_POST){
            $data['tp_title']=$_POST['tp_title'];
            $data['tp_p_id']=$_POST['tp_p_id'];
            $data['tp_c_id']=$_POST['tp_c_id'];
            $data['tp_b_id']=$_POST['tp_b_id'];
            $data['tp_content']=$_POST['tp_content'];
            $data['tp_createtime']=time();
            $data['tp_seo_title']=$_POST['tp_seo_title'];
            $data['tp_seo_keywords']=$_POST['tp_seo_keywords'];
            $data['tp_seo_desc']=$_POST['tp_seo_desc'];
            $data['tp_isable']=$_POST['tp_isable'];
            $edit=Db::table('qbl_topic')->where(['tp_id'=>$tp_id])->update($data);
            if($edit){
                $this->success('修改专题成功','topic');
            }else{
                $this->error('修改专题失败','topic');
            }
        }else{
            $topicInfo=Db::table('qbl_topic')->where(['tp_id'=>$tp_id])->find();
            $provInfo=Db::table('qbl_province')->select();
            $provid=$topicInfo['tp_p_id'];
            $cusCity=Db::table('qbl_city')->where(['p_id' => $provid])->select();
            $c_id=$topicInfo['tp_c_id'];
            $branch=Db::table('qbl_branch')->where(['b_city' =>$c_id ])->field('b_id,b_name')->select();
            $this->assign('branchs',$branch);
            $this->assign('city',$cusCity);
            $this->assign('prov',$provInfo);
            $this->assign('topic',$topicInfo);
            return $this->fetch();
        }
    }

    public function del(){
        $tp_id=intval($_GET['tp_id']);
        $delArt=Db::table('qbl_topic')->where(['tp_id'=>$tp_id])->delete();
        if($delArt){
            $this->success('删除专题成功','topic');
        }else{
            $this->error('删除专题失败','topic');
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
}