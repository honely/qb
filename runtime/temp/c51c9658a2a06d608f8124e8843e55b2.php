<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\edittype.html";i:1524731694;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525256581;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
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
                        <dd><a href="javascript:;">管理员</a></dd>
                        <dd><a href="javascript:;">角色配置</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
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