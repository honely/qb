<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\qbl\public/../application/index\view\banner\editbanner.html";i:1525936840;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <blockquote class="layui-elem-quote">修改Banner图</blockquote>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <!--基本信息-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <form class="layui-form" action="<?=url('banner/editBanner')?>?ba_id=<?php echo $ban['ba_id']; ?>" method="post">
                            <div class="layui-form-item">
                                <label class="layui-form-label">banner主题</label>
                                <div class="layui-input-block">
                                    <input type="text" name="ba_title" lay-verify="required|title" placeholder="请输入banner主题" value="<?php echo $ban['ba_title']; ?>" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">显示端</label>
                                <div class="layui-input-inline">
                                    <select name="ba_via" lay-verify="required" lay-filter="ba_via">
                                        <option value="">请选择显示端</option>
                                        <option value="1" <?php if($ban['ba_via'] == 1): ?>selected<?php endif; ?> >PC端</option>
                                        <option value="2" <?php if($ban['ba_via'] == 2): ?>selected<?php endif; ?> >移动端</option>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">省份</label>
                                <div class="layui-input-inline">
                                    <select name="ba_p_id" lay-verify="required" lay-filter="bu_p_id">
                                        <option value="">请选择省份</option>
                                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['p_id']; ?>" <?php if($vo['p_id'] == $ban['ba_p_id']): ?>selected<?php endif; ?>><?php echo $vo['p_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="ba_c_id" lay-verify="required" id="bu_c_id" lay-filter="bu_c_id">
                                        <option value="">请选择城市</option>
                                        <?php if(is_array($citys) || $citys instanceof \think\Collection || $citys instanceof \think\Paginator): $i = 0; $__LIST__ = $citys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['c_id']; ?>" <?php if($vo['c_id'] == $ban['ba_c_id']): ?>selected<?php endif; ?>><?php echo $vo['c_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">所属站点（选择）</label>
                                <div class="layui-input-inline">
                                    <select name="ad_branch" id="branch" lay-verify="required">
                                        <option value="">请选择站点</option>
                                        <?php if(is_array($branchs) || $branchs instanceof \think\Collection || $branchs instanceof \think\Paginator): $i = 0; $__LIST__ = $branchs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vos['b_id']; ?>" <?php if($vos['b_id'] == $ban['ba_branch']): ?>selected<?php endif; ?>><?php echo $vos['b_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">Banner图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                                    <input type="hidden" name="ba_img" id="ba_img" value="<?php echo $ban['ba_img']; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $ban['ba_img']; ?>" style="height: 100px;width: 350px" id="logoPre">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips" style="margin-left: 100px; color:red !important;">
                                    <?php if($ban['ba_via'] == 1): ?>
                                    备注：PC端图片规格1200*600px
                                    <?php else: ?>
                                    备注：移动端图片规格600*368px
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">图片alt</label>
                                <div class="layui-input-block">
                                    <input type="text" name="ba_alt" value="<?php echo $ban['ba_alt']; ?>" lay-verify="required|title" placeholder="请输入banner图片alt" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item" pane>
                                <label class="layui-form-label">是否开张</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="ba_isable" value="1" title="是" <?php if($ban['ba_isable'] == 1): ?> checked<?php endif; ?>>
                                    <input type="radio" name="ba_isable" value="2" title="否" <?php if($ban['ba_isable'] == 2): ?> checked<?php endif; ?>>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                                    <a class="layui-btn layui-btn-primary" href="<?=url('banner/bannerlist')?>">返回</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['form', 'jquery','upload'], function(){
        var form = layui.form
            ,upload = layui.upload
            ,$ = layui.jquery;
        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 2){
                    return '至少得2个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
                layedit.sync(editIndex);
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
        //选择不同的显示端；对图片的规格要求；
        form.on('select(ba_via)', function(data){
            var ba_via=data.value;
            if(ba_via == 1){
                $('#tips').html("备注：PC端图片规格1200*600px");
                //PC端banner图片上传
                upload.render({
                    elem: '#uploadLogo'
                    ,url: '<?php echo url("setinfo/upload"); ?>'
                    ,size:120 //限制文件大小，单位 KB
                    ,ext: 'jpg|png|gif'
                    ,accept: 'images' //限制文件大小，单位 KB
                    ,before: function(input){
                        loading = layer.load(2, {
                            shade: [0.2,'#000']
                        });
                    }
                    ,done: function(res){
                        console.log(res);
                        layer.close(loading);
                        $('#ba_img').val(res.path);
                        $("#logoPre").removeAttr("src");
                        $('#logoPre').attr('src',"__PUBLIC__"+res.path);
                        layer.msg(res.msg, {icon: 1, time: 1000});
                    }
                    ,error: function(res){
                        layer.msg(res.msg, {icon: 2, time: 1000});
                    }
                });
            }else if(ba_via == 2){
                $('#tips').html("备注：移动端图片规格600*368px");
                //移动端banner图片上传
                upload.render({
                    elem: '#uploadLogo'
                    ,url: '<?php echo url("setinfo/upload"); ?>'
                    ,size: 60 //限制文件大小，单位 KB
                    ,ext: 'jpg|png|gif'
                    ,accept: 'images'
                    ,before: function(input){
                        loading = layer.load(2, {
                            shade: [0.2,'#000']
                        });
                    }
                    ,done: function(res){
                        console.log(res);
                        layer.close(loading);
                        $('#ba_img').val(res.path);
                        $('#logoPre').attr('src',"__PUBLIC__"+res.path);
                        layer.msg(res.msg, {icon: 1, time: 1000});
                    }
                    ,error: function(res){
                        layer.msg(res.msg, {icon: 2, time: 1000});
                    }
                });
            }
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