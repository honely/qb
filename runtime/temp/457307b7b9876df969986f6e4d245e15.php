<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\designer\add.html";i:1525516204;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525587846;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">千百炼网站后台管理系统</div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?=url('index/resetpwd')?>">修改密码</a></dd>
                    <dd><a href="<?=url('index/details')?>">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?=url('login/loginOut')?>">退了</a></li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <!--客户管理-->
                <li class="layui-nav-item ">
                    <a class="" href="javascript:;">客户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('user/userlist')?>">客户列表</a></dd>
                        <!--<dd><a href="<?=url('user/userlist1')?>">客户列表1</a></dd>-->
                        <dd><a href="<?=url('user/userback')?>">信息回收站</a></dd>
                    </dl>
                </li>
                <!--导航管理-->
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">导航管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('nav/navlist')?>">导航列表</a></dd>
                    </dl>
                </li>
                <!--内容管理-->
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">内容管理</a>
                    <dl class="layui-nav-child">
                        <a href="<?=url('article/article')?>">文章管理</a>
                    </dl>

                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('example/example')?>">案例列表</a></dd>
                        <!--楼盘表加定位。-->
                        <dd><a href="<?=url('building/builds')?>">楼盘列表</a></dd>
                        <dd><a href="<?=url('designer/team')?>">设计团队</a></dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <a href="<?=url('topic/topic')?>">专题模板1</a>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('topics/topics')?>">专题模板2</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a class="" href="javascript:;">系统管理</a>
                    <dl class="layui-nav-child">
                        <!--<dd><a href="<?=url('setinfo/addbranch')?>">报价器</a></dd>-->
                        <dd><a href="<?=url('setinfo/setlist')?>">基础配置</a></dd>
                        <dd><a href="<?=url('setinfo/branch')?>">分站管理</a></dd>
                        <dd><a href="<?=url('setinfo/typelist')?>">类型参数</a></dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('setinfo/setlist')?>">短信配置</a></dd>
                        <dd><a href="<?=url('setinfo/addset')?>">邮箱配置</a></dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('district/district')?>">区域管理</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">广告管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('banner/bannerlist')?>">banner列表</a></dd>
                        <!--<dd><a href="<?=url('banner/otherAdv')?>">其他广告</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">权限管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?=url('admin/admin')?>">管理员</a></dd>
                        <dd><a href="<?=url('admin/role')?>">角色配置</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
<div class="layui-body">
    <blockquote class="layui-elem-quote">添加设计师</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form layui-form-pane1" action="<?=url('designer/add')?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">设计师姓名</label>
                <div class="layui-input-block">
                    <input type="text" name="des_name" lay-verify="required|title" placeholder="请输入设计师姓名" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">省份</label>
                <div class="layui-input-inline">
                    <select name="des_p_id" lay-verify="required" lay-filter="des_p_id">
                        <option value="">请选择省份</option>
                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['p_id']; ?>"><?php echo $vo['p_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <select name="des_c_id" lay-verify="required" id="des_c_id" lay-filter="des_c_id">
                        <option value="">请选择城市</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">年龄</label>
                <div class="layui-input-inline">
                    <input type="text" name="des_age" lay-verify="required|des_age" placeholder="请输入年龄" autocomplete="off" class="layui-input">
                </div>
                <label class="layui-form-label">从业经验</label>
                <div class="layui-input-inline">
                    <input type="text" name="des_exp" lay-verify="required|des_exp" placeholder="请输入从业经验" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">头像</label>
                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                    <input type="hidden" name="des_img" id="des_img" value=""/>
                    <div class="layui-upload-list" style="margin-left: 100px;">
                        <img class="layui-upload-img" style="height: 100px;width:100px" id="logoPre">
                    </div>
                </div>
                <div class="layui-form-mid layui-word-aux" id="tips" style="margin-left: 100px; color:red !important;">备注：图片规格100*100px</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">图像alt</label>
                <div class="layui-input-block">
                    <input type="text" name="des_img_alt" lay-verify="required|des_img_alt" placeholder="请输入图像alt" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">毕业院校</label>
                <div class="layui-input-block">
                    <input type="text" name="des_guand" lay-verify="required|des_guand" placeholder="请输入毕业院校" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" pane="">
                <label class="layui-form-label">擅长风格</label>
                <div class="layui-input-block">
                    <?php if(is_array($designStyle) || $designStyle instanceof \think\Collection || $designStyle instanceof \think\Paginator): $i = 0; $__LIST__ = $designStyle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$style): $mod = ($i % 2 );++$i;?>
                    <input type="checkbox" name="des_tanlent[<?php echo $style['type_id']; ?>]" lay-skin="primary" title="<?php echo $style['type_name']; ?>">
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>

            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">设计师简介</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入设计师简介" name="des_remarks" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item" pane>
                <label class="layui-form-label">是否显示</label>
                <div class="layui-input-block">
                    <input type="radio" name="des_isable" value="1" title="是" checked>
                    <input type="radio" name="des_isable" value="2" title="否">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                    <a class="layui-btn layui-btn-primary" href="<?=url('designer/team')?>">返回</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form', 'laydate','upload','jquery'], function(){
        var form = layui.form
            ,laydate = layui.laydate
            ,upload = layui.upload
            ,$ = layui.jquery;
        //日期
        laydate.render({
            elem: '#date'
        });
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
        form.on('select(des_p_id)', function(data){
            var p_id=data.value;
            $.ajax({
                type: 'POST',
                url: "<?=url('user/getCityName')?>?p_id="+p_id,
                data: {p_id:p_id},
                dataType:  'json',
                success: function(data){
                    var code=data.data;
                    $("#des_c_id").html("<option value=''>请选择城市</option>");
                    $.each(code, function(i, val) {
                        var option1 = $("<option>").val(val.c_id).text(val.c_name);
                        $("#des_c_id").append(option1);
                        form.render('select');
                    });
                    $("#des_c_id").get(0).selectedIndex=0;
                }
            });
        });
        //图片上传
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
                $('#logoPre').removeAttr('src');
                $('#des_img').val('');
                console.log(res);
                layer.close(loading);
                $('#des_img').val(res.path);
                $('#logoPre').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });
    });
</script>
<div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
</div>
</div>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>