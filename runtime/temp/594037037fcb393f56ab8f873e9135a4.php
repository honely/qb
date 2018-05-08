<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\xampp\htdocs\qbl\public/../application/index\view\nav\navlist.html";i:1525744078;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
        <legend>导航管理</legend>
    </fieldset>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addNav()">添加导航</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>导航名称</td>
                            <td>是否显示</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($nav == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $na['nav_id']; ?></td>
                            <td><?php echo $na['nav_title']; ?></td>
                            <td><?php if($na['nav_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-sm" onclick="editNav(<?php echo $na['nav_id']; ?>)"><i class="layui-icon">&#xe642;</i></button>
                                <button class="layui-btn layui-btn-sm" onclick="delNav(<?php echo $na['nav_id']; ?>)" data-type="test2"><i class="layui-icon">&#xe640;</i></button>
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
    layui.use('form','layer','jquery', function(){
        var $ = layui.jquery,
            form = layui.form,
            layer = layui.layer; //独立版的layer无需执行这一句
        //监听指定开关
        form.on('switch(switchTest)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });
    });
    //删除配置
    function delNav(nav_id) {
        layer.confirm('确定删除这个导航？删除后不可恢复！', {
            btn : [ '确定', '取消' ]
        }, function() {
            layer.msg('您已删除此导航', {icon: 1});
            window.location.href='<?=url("nav/del")?>?nav_id='+ nav_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addNav(){
        window.location.href='<?=url('nav/add')?>';
    }
    function editNav(nav_id){
        window.location.href='<?=url("nav/edit")?>?nav_id='+ nav_id ;
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