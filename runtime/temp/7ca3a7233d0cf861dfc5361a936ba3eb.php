<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\qbl\public/../application/index\view\topic\edit.html";i:1525255484;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525255042;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
                        <dd><a href="<?=url('example/caseList')?>">案例列表</a></dd>
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
<!-- 配置文件 -->
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
<script></script>
<div class="layui-body">
    <blockquote class="layui-elem-quote">发布专题</blockquote>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <form class="layui-form" action="<?=url('topic/edit')?>?tp_id=<?php echo $topic['tp_id']; ?>" method="post">
                            <div class="layui-form-item">
                                <label class="layui-form-label">专题名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="tp_title" value="<?php echo $topic['tp_title']; ?>" lay-verify="required|title" placeholder="请输入文章标题" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">文章内容</label>
                                <div class="layui-input-block">
                                    <script id="container" name="tp_content"  style="width:1024px;height:500px;" type="text/plain"><?php echo $topic['tp_content']; ?></script>
                                    </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">省份</label>
                                        <div class="layui-input-inline">
                                        <select name="tp_p_id" lay-filter="bu_p_id">
                                        <option value="">请选择省份</option>
                                    <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['p_id']; ?>" <?php if($vo['p_id'] == $topic['tp_p_id']): ?>selected<?php endif; ?>  ><?php echo $vo['p_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    </div>
                                    <div class="layui-input-inline">
                                        <select name="tp_c_id" id="bu_c_id" lay-filter="bu_c_id">
                                        <?php if(is_array($city) || $city instanceof \think\Collection || $city instanceof \think\Paginator): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['c_id']; ?>" <?php if($topic['tp_c_id'] == $vo['c_id']): ?>selected<?php endif; ?> ><?php echo $vo['c_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div>
                                        </div>
                                        <div class="layui-form-item" pane>
                                    <label class="layui-form-label">是否显示</label>
                                        <div class="layui-input-block">
                                        <input type="radio" name="tp_isable" value="1" title="是" <?php if($topic['tp_isable'] == '1'): ?>checked<?php endif; ?> >
                                    <input type="radio" name="tp_isable" value="2" title="否" <?php if($topic['tp_isable'] == '2'): ?>checked<?php endif; ?> >
                                        </div>
                                        </div>
                                        <div class="layui-form-item">
                                        <label class="layui-form-label">SEO标题</label>
                                        <div class="layui-input-block">
                                        <input type="text" name="tp_seo_title" value="<?php echo $topic['tp_seo_title']; ?>"  lay-verify="required|title" placeholder="请输入SEO标题" autocomplete="off" class="layui-input">
                                        </div>
                                        </div>
                                        <div class="layui-form-item">
                                        <label class="layui-form-label">SEO关键词</label>
                                        <div class="layui-input-block">
                                        <input type="text" name="tp_seo_keywords" lay-verify="required|title" placeholder="请输入SEO关键词,多个关键词之间用英文逗号隔开。" value="<?php echo $topic['tp_seo_keywords']; ?>"  autocomplete="off" class="layui-input">
                                        </div>
                                        </div>
                                        <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">SEO描述</label>
                                        <div class="layui-input-block">
                                        <textarea placeholder="请输入SEO描述" name="tp_seo_desc" class="layui-textarea"><?php echo $topic['tp_seo_desc']; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="layui-form-item">
                                        <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                                        <a class="layui-btn layui-btn-primary" href="<?=url('topic/topic')?>">返回</a>
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
                                        layui.use(['form', 'jquery','layedit'], function(){
                                            var form = layui.form
                                                ,layedit = layui.layedit
                                                ,$ = layui.jquery;
                                            //编辑器图片上传接口
                                            layedit.set({
                                                uploadImage: {
                                                    url: '/index/article/editUpload' //接口url
                                                    ,type: 'post', //默认post
                                                    success:function(res){
                                                        console.log(res);
                                                    },
                                                    error:function (res) {
                                                        console.log(res);
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
                                                        $.each(code, function(i, val) {
                                                            var option1 = $("<option>").val(val.c_id).text(val.c_name);
                                                            $("#bu_c_id").append(option1);
                                                            form.render('select');
                                                        });
                                                        $("#bu_c_id").get(0).selectedIndex=0;
                                                    }
                                                });
                                            });
                                            layedit.build('demo'); //建立编辑器
                                            //自定义验证规则
                                            form.verify({
                                                title: function(value){
                                                    if(value.length < 5){
                                                        return '标题至少得5个字符啊';
                                                    }
                                                }
                                                ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                                                ,content: function(value){
                                                    layedit.sync(editIndex);
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