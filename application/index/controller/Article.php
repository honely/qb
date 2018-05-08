<?php
/**
 * Created by PhpStorm.
 * User: Dang Meng
 * Date: 2018/4/28
 * Time: 11:11
 * Name: 文章管理
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Article extends Controller{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $adminName=session('adminName');
        if(empty($adminName)){
            $this->error('请先登录！','login/login');
        }
    }

    //文章列表
    public function article(){
        $count=Db::table('qbl_article')->count();
        $page= $this->request->param('page',1,'intval');
        $limit=$this->request->param('limit',10,'intval');
        $article=Db::table('qbl_article')
            ->limit(($page-1)*$limit,$limit)
            ->order('art_id desc')
            ->select();
        foreach ($article as $k =>$v){
            $article[$k]['art_createtime'] = date('Y-m-d H:i:s',$v['art_createtime']);
            $article[$k]['art_isable'] = $v['art_isable']==1 ?  '是'  :  '否';
            $article[$k]['art_type'] = $v['art_type'] == 1 ?  '媒体资讯'  :  '装修知识';
        }
        $this->assign('count',$count);
        $this->assign('page',$page);
        $this->assign('limit',$limit);
        $this->assign('article',$article);
        return $this->fetch();
    }





    //发布文章
    public function addArticle(){

        if($_POST){
            $data['art_title']=$_POST['art_title'];
            $data['art_subtitle']=$_POST['art_subtitle'];
            $data['art_img']=$_POST['art_img'];
            $data['art_img_alt']=$_POST['art_img_alt'];
            $data['art_content']=$_POST['art_content'];
            $data['art_createtime']=time();
            $data['art_isable']=$_POST['art_isable'];
            $data['art_type']=$_POST['art_type'];
            $data['art_seo_title']=$_POST['art_seo_title'];
            $data['art_seo_keywords']=$_POST['art_seo_keywords'];
            $data['art_seo_desc']=$_POST['art_seo_desc'];
            $add=Db::table('qbl_article')->insert($data);
            if($add){
                $this->success('发布文章成功！','article');
            }else{
                $this->error('发布文章失败！','article');
            }
        }else{
            return $this->fetch();
        }
    }




    //修改文章内容
    public function editArticle(){
        $art_id=intval($_GET['art_id']);
        if($_POST){
            $data['art_title']=$_POST['art_title'];
            $data['art_subtitle']=$_POST['art_subtitle'];
            $data['art_img']=$_POST['art_img'];
            $data['art_content']=$_POST['art_content'];
            $data['art_createtime']=time();
            $data['art_isable']=$_POST['art_isable'];
            $data['art_type']=$_POST['art_type'];
            $data['art_seo_title']=$_POST['art_seo_title'];
            $data['art_seo_keywords']=$_POST['art_seo_keywords'];
            $data['art_seo_desc']=$_POST['art_seo_desc'];
            $edit=Db::table('qbl_article')->where(['art_id'=>$art_id])->update($data);
            if($edit){
                $this->success('修改文章成功','article');
            }else{
                $this->error('修改文章失败','article');
            }
        }else{
            $artInfo=Db::table('qbl_article')->where(['art_id'=>$art_id])->find();
            $this->assign('art',$artInfo);
            return $this->fetch();
        }
    }

    //删除某一文章
    public function delArticle(){
        $art_id=intval($_GET['art_id']);
        $delArt=Db::table('qbl_article')->where(['art_id' => $art_id])->delete();
        if($delArt){
            $this->success('删除文章成功','article');
        }else{
            $this->error('删除文章失败','article');
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