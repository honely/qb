<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\qbl\public/../application/index\view\banner\editbanner.html";i:1525516116;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525587846;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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