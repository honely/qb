<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\qbl\public/../application/index\view\district\district.html";i:1525743930;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
        <legend>区域管理</legend>
    </fieldset>
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">省份</li>
            <li>城市</li>
        </ul>
        <div class="layui-tab-content">
            <!--省份列表-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addProv()">添加省份</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>省份名称</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($provInfo) || $provInfo instanceof \think\Collection || $provInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $provInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prov): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $prov['p_id']; ?></td>
                            <td><?php echo $prov['p_name']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editProv(<?php echo $prov['p_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delProv(<?php echo $prov['p_id']; ?>)" data-type="test2">删除</button>
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
                        <button class="layui-btn" onclick="addCity()">添加城市</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>省份名称</td>
                            <td>城市名称</td>
                            <td>装修价钱</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($city) || $city instanceof \think\Collection || $city instanceof \think\Paginator): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['c_id']; ?></td>
                            <td><?php echo $vo['p_name']; ?></td>
                            <td><?php echo $vo['c_name']; ?></td>
                            <td><?php echo $vo['id_price_val']; ?>
                            </td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editCity(<?php echo $vo['c_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delCity(<?php echo $vo['c_id']; ?>)" data-type="test2">删除</button>
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
    layui.use('layer', function(){
        // $('.demo').on('click', function(){
        //     var type = $(this).data('type');
        //     active[type] ? active[type].call(this) : '';
        // });
    });
    function delProv(p_id) {
        layer.confirm('确定删除这个省份？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            layer.msg('您已删除该省份', {icon: 1});
            window.location.href='<?=url("regin/delProv")?>?p_id='+ p_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
    function delCity(c_id) {
        layer.confirm('确定删除这个城市？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            layer.msg('您已删除此城市', {icon: 1});
            window.location.href='<?=url("regin/delCity")?>?c_id='+ c_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addProv(){
        window.location.href='<?=url('regin/addProv')?>';
    }
    function editProv(p_id){
        window.location.href='<?=url("regin/editProv")?>?p_id='+ p_id ;
    }
    function addCity(){
        window.location.href='<?=url('regin/addCity')?>';
    }
    function editCity(c_id){
        window.location.href='<?=url("regin/editCity")?>?c_id='+ c_id ;
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