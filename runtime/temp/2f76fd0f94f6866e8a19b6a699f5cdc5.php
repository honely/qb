<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\index.html";i:1525916105;}*/ ?>
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
                    <img src="__PUBLIC__<?php echo $admin['ad_img']; ?>" class="layui-nav-img">
                    <?php echo $admin['ad_realname']; ?>
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
                <?php if($menuList != null): if(is_array($menuList) || $menuList instanceof \think\Collection || $menuList instanceof \think\Paginator): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;if(isset($menu['child']) && $menu['child']): ?>
                <li class="layui-nav-item">
                    <a href="javascript:;"><?php echo $menu['m_name']; ?></a>
                    <?php if(isset($menu['child']) && $menu['child'] != null): if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                    <dl class="layui-nav-child">
                        <dd><a href='javascript:' data-url="/index/<?php echo $child['m_control']; ?>/<?php echo $child['m_action']; ?>.html"><?php echo $child['m_name']; ?></a></dd>
                    </dl>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </li>
                <?php else: ?>
                <li  class="layui-nav-item">
                    <a href="<?php echo $menu['m_name']; ?>"><?php echo $menu['m_name']; ?></a>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
    </div>
	<div class='layui-body'>
		<iframe id='option' src="" frameborder='no' width='100%' height='99%'></iframe>
	</div>
	<div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
</div>
</div>	
<script>
    //JavaScript代码区域
    layui.use(['element','jquery'], function(){
        var element = layui.element,
		$ = layui.jquery;
		element.on('nav(test)',function(elem){
			var $url = $(elem).eq(0).attr('data-url');
			$("#option").attr('src',$url)
		})
    });
</script>
</body>
</html>