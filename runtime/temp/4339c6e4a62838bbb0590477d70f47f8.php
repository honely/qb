<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\branch.html";i:1525743746;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <div style="margin: 10px">
        <div class="layui-btn-group">
            <button class="layui-btn" onclick="addLevel()">开通分站</button>
        </div>
        <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
            <thead>
            <tr>
                <td>编号</td>
                <td>站点名称</td>
                <td>所属区域</td>
                <td>站点地址</td>
                <td>站点电话</td>
                <!--<td>站点备案号</td>-->
                <td>开站时间</td>
                <td>去首页</td>
                <td>是否开通</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php if($branch == null): ?>
            <tr>
                <td colspan="9">暂无内容</td>
            </tr>
            <?php endif; if(is_array($branch) || $branch instanceof \think\Collection || $branch instanceof \think\Paginator): $i = 0; $__LIST__ = $branch;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bran): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $bran['b_id']; ?></td>
                <td><?php echo $bran['b_name']; ?></td>
                <td><?php echo $bran['p_name']; ?>-<?php echo $bran['c_name']; ?></td>
                <td><?php echo $bran['b_address']; ?></td>
                <td><?php echo $bran['b_tel']; ?></td>
                <!--<td><?php echo $bran['b_record']; ?></td>-->
                <td><?php echo $bran['b_createtime']; ?></td>
                <td><?php echo $bran['b_toweb']; ?></td>
                <td><?php if($bran['b_isopen'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                <td>
                    <button class="layui-btn layui-btn-xs" onclick="editBranch(<?php echo $bran['b_id']; ?>)">编辑</button>
                    <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delBranch(<?php echo $bran['b_id']; ?>)">删除</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div id="demo1"></div>
</div>
<script>
    layui.use('layer', function(){
    });
    function delBranch(b_id) {
        layer.confirm('确定删除这个站点？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            window.location.href='<?=url("setinfo/delBranch")?>?b_id='+ b_id ;
            layer.msg('您已删除此站点', {icon: 1});
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addLevel(){
        window.location.href='<?=url('setinfo/addbranch')?>';
    }
    function editBranch(b_id){
        window.location.href='<?=url("setinfo/editBranch")?>?b_id='+ b_id ;
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