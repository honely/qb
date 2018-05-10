<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\qbl\public/../application/index\view\admin\menu.html";i:1525922537;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>菜单列表</legend>
    </fieldset>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <a class="layui-btn" href="<?=url('admin/addmenu')?>?m_fid=<?php echo $m_fid; ?>">新增菜单</a>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>菜单名称</td>
                            <td>菜单类型</td>
                            <td>控制器</td>
                            <td>方法</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($menuList == null): ?>
                        <tr><td colspan="6">暂无内容</td></tr>
                        <?php endif; if(is_array($menuList) || $menuList instanceof \think\Collection || $menuList instanceof \think\Paginator): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $na['m_id']; ?></td>
                            <td><?php echo $na['m_name']; ?></td>
                            <td><?php echo $na['m_type']; ?></td>
                            <td><?php echo $na['m_control']; ?></td>
                            <td><?php echo $na['m_action']; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editMenu(<?php echo $na['m_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-xs" onclick="showSub(<?php echo $na['m_id']; ?>)">下级菜单</button>
                                <!--<button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delMenu(<?php echo $na['m_id']; ?>)" data-type="test2">删除</button>-->
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div id="pages" style="text-align: center"></div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['form','laypage','layer'], function(){
        var form = layui.form,
            laypage = layui.laypage,
            layer = layui.layer; //独立版的layer无需执行这一句
        laypage.render({
            //自定义每页条数的选择项
            elem: 'pages'
            ,count: <?php echo $count; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,limits: [10, 15, 20]
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,frist){
                if(!frist){
                    window.location.href="<?=url('admin/admin')?>?page="+obj.curr+"&limit="+obj.limit;
                }
            }
        });
        //监听指定开关
        form.on('switch(switchTest)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });
    });
    //删除管理员
    function delMenu(m_id) {
        layer.confirm('确定删除这个菜单？删除后不可恢复！', {
            btn : [ '确定', '取消' ]
        }, function() {
            layer.msg('您已删除此菜单', {icon: 1});
            window.location.href='<?=url("admin/delmenu")?>?m_id='+ m_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function editMenu(m_id){
        window.location.href='<?=url("admin/editmenu")?>?m_id='+ m_id +"&m_fid="+<?php echo $m_fid; ?> ;
    }
    
    function showSub(m_id) {
        window.location.href='<?=url("admin/menu")?>?m_id='+m_id+ "&m_fid=" +<?php echo $m_fid; ?>;
    }
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