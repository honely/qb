<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\building\edit.html";i:1525516192;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525663540;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
    <blockquote class="layui-elem-quote">添加楼盘</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form layui-form-pane1" action="<?=url('building/edit')?>?bu_id=<?php echo $builds['bu_id']; ?>" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">楼盘名称</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_name" value="<?php echo $builds['bu_name']; ?>" lay-verify="required|title" placeholder="请输入楼盘名称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">楼盘描述</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入楼盘描述" name="bu_desc" class="layui-textarea"><?php echo $builds['bu_desc']; ?></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">省份</label>
                <div class="layui-input-inline">
                    <select name="bu_p_id" lay-verify="required" lay-filter="bu_p_id">
                        <option value="">请选择省份</option>
                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['p_id']; ?>" <?php if($builds['bu_p_id'] == $vo['p_id']): ?>selected<?php endif; ?> ><?php echo $vo['p_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <select name="bu_c_id" id="bu_c_id" lay-verify="required" lay-filter="bu_c_id">
                        <option value="">请选择城市</option>
                        <?php if(is_array($city) || $city instanceof \think\Collection || $city instanceof \think\Paginator): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['c_id']; ?>" <?php if($builds['bu_c_id'] == $vo['c_id']): ?>selected<?php endif; ?> ><?php echo $vo['c_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">详细地址</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_address" value="<?php echo $builds['bu_address']; ?>" lay-verify="required|bu_address" placeholder="请输入详细地址" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">地理位置</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_location" value="<?php echo $builds['bu_location']; ?>" lay-verify="required|bu_location" placeholder="请输入地理位置" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">封面图</label>
                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                    <input type="hidden" name="bu_img" id="bu_img" value="<?php echo $builds['bu_img']; ?>"/>
                    <div class="layui-upload-list" style="margin-left: 60px;">
                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $builds['bu_img']; ?>" style="height: 210px;width: 350px" id="logoPre">
                    </div>
                </div>
                <div class="layui-form-mid layui-word-aux" id="tips" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">图片alt</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_img_alt" value="<?php echo $builds['bu_img_alt']; ?>" lay-verify="required" placeholder="请输入图片alt" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">优惠活动</label>
                <div class="layui-input-block">
                    <textarea id="demo" placeholder="请输入优惠活动" class="layui-textarea" name="bu_activity"><?php echo $builds['bu_activity']; ?></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">活动链接</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_url" value="<?php echo $builds['bu_url']; ?>" lay-verify="required|title" placeholder="请输入活动链接" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">SEO标题</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_seo_title" value="<?php echo $builds['bu_seo_title']; ?>" lay-verify="required|title" placeholder="请输入SEO标题" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">SEO关键词</label>
                <div class="layui-input-block">
                    <input type="text" name="bu_seo_keywords" value="<?php echo $builds['bu_seo_keywords']; ?>" lay-verify="required|title" placeholder="请输入SEO关键词,多个关键词之间用英文逗号隔开。" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">SEO描述</label>
                <div class="layui-input-block">
                    <textarea placeholder="请输入SEO描述" name="bu_seo_desc" class="layui-textarea"><?php echo $builds['bu_seo_desc']; ?></textarea>
                </div>
            </div>
            <div class="layui-form-item" pane>
                <label class="layui-form-label">是否显示</label>
                <div class="layui-input-block">
                    <input type="radio" name="bu_isable" value="1" title="是" <?php if($builds['bu_isable'] == '1'): ?>checked<?php endif; ?> >
                    <input type="radio" name="bu_isable" value="2" title="否" <?php if($builds['bu_isable'] ==  '2'): ?>checked<?php endif; ?>>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                    <a class="layui-btn layui-btn-primary" href="<?=url('building/builds')?>">返回</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form', 'laydate','upload','jquery','layedit'], function(){
        var form = layui.form
            ,laydate = layui.laydate
            ,upload = layui.upload
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
        layedit.build('demo'); //建立编辑器
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
                $('#bu_img').val('');
                console.log(res);
                layer.close(loading);
                $('#bu_img').val(res.path);
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