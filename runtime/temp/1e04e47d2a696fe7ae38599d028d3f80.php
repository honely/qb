<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\setlist.html";i:1525943591;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <!-- 内容主体区域 -->
    <!--选项卡写法-->
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>配置管理</legend>
    </fieldset>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <!--客户标记-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addSet()">添加配置</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>配置key</td>
                            <td>配置值</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($setinfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($setinfo) || $setinfo instanceof \think\Collection || $setinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $setinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['s_id']; ?></td>
                            <td><?php echo $type['s_key']; ?></td>
                            <td><?php echo $type['s_value']; ?></td>
                            <td><?php if($type['s_is_able'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editType(<?php echo $type['s_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delSet(<?php echo $type['s_id']; ?>)" data-type="test2">删除</button>
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
        var $ = layui.jquery,
            layer = layui.layer; //独立版的layer无需执行这一句
        $('.demo').on('click', function(){
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    });
    //删除配置
    function delSet(s_id) {
        layer.confirm('确定删除这个配置？删除后不可恢复！', {
            btn : [ '确定', '取消' ]
        }, function() {
            layer.msg('您已删除此配置', {icon: 1});
            window.location.href='<?=url("setinfo/delSet")?>?s_id='+ s_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addSet(){
        window.location.href='<?=url('setinfo/addSet')?>';
    }
    function editType(s_id){
        window.location.href='<?=url("setinfo/editSet")?>?s_id='+ s_id ;
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