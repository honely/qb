<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\xampp\htdocs\qbl\public/../application/index\view\admin\add.html";i:1525771366;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <blockquote class="layui-elem-quote">添加管理员</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form layui-form-pane1" action="<?=url('admin/add')?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">管理员姓名</label>
                <div class="layui-input-block">
                    <input type="text" name="ad_realname" lay-verify="required|title" placeholder="请输入管理员姓名" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" pane>
                <label class="layui-form-label">性别</label>
                <div class="layui-input-block">
                    <input type="radio" name="ad_sex" value="1" title="男" checked>
                    <input type="radio" name="ad_sex" value="2" title="女">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">省份</label>
                <div class="layui-input-inline">
                    <select name="ad_p_id" lay-verify="required" lay-filter="bu_p_id">
                        <option value="">请选择省份</option>
                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['p_id']; ?>"><?php echo $vo['p_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <select name="ad_c_id" lay-verify="required" id="bu_c_id" lay-filter="bu_c_id">
                        <option value="">请选择城市</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">所属站点</label>
                <div class="layui-input-inline">
                    <select name="ad_branch" id="branch" lay-verify="required">
                        <option value="">请选择站点</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">手机号码</label>
                <div class="layui-input-block">
                    <input type="text" name="ad_phone" lay-verify="required|phone" placeholder="请输入手机号码" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">电子邮箱</label>
                <div class="layui-input-block">
                    <input type="text" name="ad_email" lay-verify="required|email" placeholder="请输入手机号码" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">选择角色</label>
                <div class="layui-input-inline">
                    <select name="ad_role" id="roleaa" lay-verify="required">
                        <option value="">请选择角色</option>
                        <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['r_id']; ?>"><?php echo $vo['r_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item" pane>
                <label class="layui-form-label">是否显示</label>
                <div class="layui-input-block">
                    <input type="radio" name="ad_isable" value="1" title="是" checked>
                    <input type="radio" name="ad_isable" value="2" title="否">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                    <a class="layui-btn layui-btn-primary" href="<?=url('admin/admin')?>">返回</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form','jquery'], function(){
        var form = layui.form
            ,$ = layui.jquery;
        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 2){
                    return '至少得2个字符啊';
                }
            }
        });
        form.on('select(bu_p_id)', function(data){
            var p_id=data.value;
            $.ajax({
                type: 'POST',
                url: "<?=url('user/getCityName')?>?p_id="+p_id,
                data: {p_id:p_id},
                dataType:  'json',
                success: function(data){
                    var code=data.data;
                    $("#bu_c_id").html("<option value=''>请选择城市</option>");
                    $("#branch").html("<option value=''>请选择站点</option>");
                    $.each(code, function(i, val) {
                        var option1 = $("<option>").val(val.c_id).text(val.c_name);
                        $("#bu_c_id").append(option1);
                        form.render('select');
                    });
                    $("#bu_c_id").get(0).selectedIndex=0;
                }
            });
        });

        //调用该城市下面的分站
        form.on('select(bu_c_id)', function(data){
            var c_id=data.value;
            $.ajax({
                type: 'POST',
                url: "<?=url('admin/getBranchName')?>?c_id="+c_id,
                data: {c_id:c_id},
                dataType:  'json',
                success: function(data){
                    var code=data.data;
                    $("#branch").html("<option value=''>请选择站点</option>");
                    $.each(code, function(i, val) {
                        var option1 = $("<option>").val(val.b_id).text(val.b_name);
                        $("#branch").append(option1);
                        form.render('select');
                    });
                    $("#branch").get(0).selectedIndex=0;
                }
            });
        });
    });
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