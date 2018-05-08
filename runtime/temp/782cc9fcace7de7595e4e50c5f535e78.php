<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\qbl\public/../application/index\view\banner\bannerlist.html";i:1525743844;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
        <legend>Banner管理</legend>
    </fieldset>
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">PC端</li>
            <li>手机端</li>
        </ul>
        <div class="layui-tab-content">
            <!--省份列表-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addBanner()">添加Banner图</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>主题</td>
                            <td>预览图</td>
                            <td>显示分站</td>
                            <td>添加时间</td>
                            <td>是否显示</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($pcBan) || $pcBan instanceof \think\Collection || $pcBan instanceof \think\Paginator): $i = 0; $__LIST__ = $pcBan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prov): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $prov['ba_id']; ?></td>
                            <td><?php echo $prov['ba_title']; ?></td>
                            <td>
                                <img src="__PUBLIC__<?php echo $prov['ba_img']; ?>" alt="<?php echo $prov['ba_alt']; ?>" style="width: 120px;height: 80px"/></td>
                            <td><?php echo $prov['p_name']; ?>-<?php echo $prov['c_name']; ?></td>
                            <td><?php echo $prov['ba_createtime']; ?></td>
                            <td><?php echo $prov['ba_isable']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editProv(<?php echo $prov['ba_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delProv(<?php echo $prov['ba_id']; ?>)" data-type="test2">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--城市列表-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn"  onclick="addBanner()">添加Banner图</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>主题</td>
                            <td>预览图</td>
                            <td>显示分站</td>
                            <td>添加时间</td>
                            <td>是否显示</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($mobBan) || $mobBan instanceof \think\Collection || $mobBan instanceof \think\Paginator): $i = 0; $__LIST__ = $mobBan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['ba_id']; ?></td>
                            <td><?php echo $vo['ba_title']; ?></td>
                            <td><img src="__PUBLIC__<?php echo $vo['ba_img']; ?>" alt="<?php echo $vo['ba_alt']; ?>" style="width: 120px;height: 80px"/></td>
                            <td><?php echo $vo['p_name']; ?>-<?php echo $vo['c_name']; ?></td>
                            <td><?php echo $vo['ba_createtime']; ?></td>
                            <td><?php echo $vo['ba_isable']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editProv(<?php echo $vo['ba_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delProv(<?php echo $vo['ba_id']; ?>)" data-type="test2">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['layer','jquery'], function(){
        var $ = layui.jquery;
    });
    function delProv(ba_id) {
        layer.confirm('确定删除这张图片？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            window.location.href="<?=url('banner/delBanner')?>?ba_id="+ba_id;
            layer.msg('您已删除该图片', {icon: 1});
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addBanner(){
        window.location.href='<?=url('banner/addBanner')?>';
    }
    function editProv(ba_id){
        window.location.href='<?=url("banner/editBanner")?>?ba_id='+ ba_id ;
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