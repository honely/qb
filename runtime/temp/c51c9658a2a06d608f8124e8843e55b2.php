<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\edittype.html";i:1525743746;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <blockquote class="layui-elem-quote">修改类型</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form layui-form-pane1" action="<?=url('setinfo/edittype')?>?type_id=<?php echo $typeInfo['type_id']; ?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">类型名称</label>
                <div class="layui-input-block">
                    <input type="text" name="type_name" lay-verify="required|type_name" required placeholder="请输入类型名称" autocomplete="off" value="<?php echo $typeInfo['type_name']; ?>" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">类型简介</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入类型简介" name="type_remarks" class="layui-textarea"><?php echo $typeInfo['type_remarks']; ?></textarea>
                </div>
            </div>
            <div class="layui-form-item" pane>
                <label class="layui-form-label">是否可用</label>
                <div class="layui-input-block">
                    <input type="radio" name="type_isable" value="1" title="是" <?php if($typeInfo['type_isable'] == '1'): ?>checked<?php endif; ?>>
                    <input type="radio" name="type_isable" value="2" title="否" <?php if($typeInfo['type_isable'] == '2'): ?>checked<?php endif; ?>>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" type="submit">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>

    </div>
</div>
<script>
    layui.use('form', function(){
        var form = layui.form;
        form.on('radio', function(data){
            console.log(data);
        });
        //监听提交
        form.on('submit(*)', function(data){
            console.log(data)
            return false;
        });
    });
</script>
<script>
    layui.use('upload',function(){
        var upload = layui.upload,
            jq = layui.jquery;
        var img='';
        upload.render({
            url: '<?php echo url("setinfo/upload"); ?>'
            ,elem:'#image'
            ,ext: 'jpg|png|gif'
            ,area: ['500', '500px']
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                console.log(res);
                layer.close(loading);
                jq('input[name=img]').val(res.path);
                img.src = res.path;
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
        });

    })
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