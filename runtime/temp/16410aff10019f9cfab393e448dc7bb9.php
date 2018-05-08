<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\regin\addcity.html";i:1525314163;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525344053;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?=url('index/loginOut')?>">退了</a></li>
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
    <blockquote class="layui-elem-quote">添加城市</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form layui-form-pane1">
            <div class="layui-form-item">
                <label class="layui-form-label">省份</label>
                <div class="layui-input-block">
                    <select name="p_id" lay-verify="required" id="p_id">
                        <option value="">请选择省份</option>
                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['p_id']; ?>"><?php echo $vo['p_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">城市</label>
                <div class="layui-input-block">
                    <input type="text" name="c_name" id="c_name" lay-verify="required|c_name" required placeholder="请输入城市名称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <?php if(is_array($quality) || $quality instanceof \think\Collection || $quality instanceof \think\Paginator): $i = 0; $__LIST__ = $quality;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qua): $mod = ($i % 2 );++$i;?>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo $qua['type_name']; ?></label>
                    <input type="hidden" class="c_q_id" name="c_q_id" value="<?php echo $qua['type_id']; ?>"/>
                    <div class="layui-input-inline">
                        <input type="text" style="width: 300px;" name="c_q_price" required placeholder="请输入平米单价,单位：（元）" autocomplete="off" class="layui-input c_q_price">
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <span class="layui-btn" id="saveInfo" >提交</span>
                    <a class="layui-btn" href="<?=url('district/district')?>">返回</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form','jquery'], function(){
        // var form = layui.form,
        var     $ = layui.jquery;
      /*  form.on('radio', function(data){
            console.log(data);
        });*/
        $('#saveInfo').click(function () {
            //品质id
            var ids = "";
            var q_id=document.getElementsByClassName('c_q_id');
            for(var i=0;i<q_id.length;i++){
                ids+=q_id.item(i).value;
                ids+=",";
            }
            //品质单价
            var prices = "";
            var price=document.getElementsByClassName('c_q_price');
            for(var i=0;i<price.length;i++){
                prices+=price.item(i).value;
                prices+=",";
            }
            var p_id=$('#p_id').val();
            var c_name=$('#c_name').val();
            $.ajax({
                type: 'POST',
                url: "<?=url('regin/addcity')?>",
                data: {ids:ids,prices:prices,p_id:p_id,c_name:c_name},
                dataType:  'json',
                success: function(data){
                    console.log(data);
                    console.log(data.code);
                    if(data.code == 1){
                        layer.alert('添加成功！', {
                            icon: 1,
                            skin: 'layer-ext-moon',
                            time: 2000,
                            end: function(){
                                window.location.href='<?=url("district/district")?>';
                            }
                        });
                    }
                }
            });
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