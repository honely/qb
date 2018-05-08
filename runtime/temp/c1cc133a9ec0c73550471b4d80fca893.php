<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\xampp\htdocs\qbl\public/../application/index\view\article\article.html";i:1525743844;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <title>千百炼网站后台管理系统</title>
    <link rel="stylesheet" href="__LAY__/css/layui.css">
    <link rel="stylesheet" href="__PUBLIC__/static/jquery-1.10.2.min.js">
    <script src="__LAY__/layui.js"></script>
	<style>
		.layui-body{
			left:0!important
		}
	</style>
</head>
<body class="layui-layout-body">

<div class="layui-body">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>文章管理</legend>
    </fieldset>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <!--省份列表-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addArt()">发布文章</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>文章标题</td>
                            <td>文章类型</td>
                            <td>发布时间</td>
                            <td>浏览量</td>
                            <td>是否显示</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $art['art_id']; ?></td>
                            <td><?php echo $art['art_title']; ?></td>
                            <td><?php echo $art['art_type']; ?></td>
                            <td><?php echo $art['art_createtime']; ?></td>
                            <td><?php echo $art['art_view']; ?></td>
                            <td><?php echo $art['art_isable']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editProv(<?php echo $art['art_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delProv(<?php echo $art['art_id']; ?>)" data-type="test2">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="pages" style="text-align: center"></div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['laypage','layer','jquery'], function(){
        var $ = layui.jquery,
            laypage = layui.laypage;
        laypage.render({
            //自定义每页条数的选择项
            elem: 'pages'
            ,count: <?php echo $count; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,limits: [10, 15, 20]
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,frist){
                if(!frist){
                    window.location.href="<?=url('article/article')?>?page="+obj.curr+"&limit="+obj.limit;
                }
            }
        });
    });
    function delProv(art_id) {
        layer.confirm('确定删除这张图片？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            window.location.href="<?=url('article/delArticle')?>?art_id="+art_id;
            layer.msg('您已删除该图片', {icon: 1});
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addArt(){
        window.location.href='<?=url('article/addArticle')?>';
    }
    function editProv(art_id){
        window.location.href='<?=url("article/editArticle")?>?art_id='+ art_id ;
    }
</script>
</div>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>