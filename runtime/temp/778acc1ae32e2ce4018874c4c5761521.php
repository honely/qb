<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\user\userback.html";i:1525744259;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <section class="panel panel-padding" style="padding-top: 10px;padding-left: 10px;">
        <form class="layui-form layui-form-pane1" action="<?=url('user/userback')?>">
            <div class="layui-form-item">
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <input type="text" name="keywords" value="<?php if(isset($keywords)): ?><?php echo $keywords; endif; ?>"  placeholder="请输入客户姓名/手机" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <select name="cus_status">
                            <option value="">请选择标记状态</option>
                            <?php if(is_array($userTip) || $userTip instanceof \think\Collection || $userTip instanceof \think\Paginator): $i = 0; $__LIST__ = $userTip;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tip): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $tip['type_id']; ?>" <?php if(isset($cus_status)): if($cus_status == $tip['type_id']): ?>selected<?php endif; endif; ?>><?php echo $tip['type_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <select name="cus_sys">
                            <option value="">请选择用户终端</option>
                            <option value="1" <?php if(isset($cus_sys)): if($cus_sys == 1): ?>selected<?php endif; endif; ?>>手机端</option>
                            <option value="2" <?php if(isset($cus_sys)): if($cus_sys == 2): ?>selected<?php endif; endif; ?>>PC端</option>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <input type="text" name="cus_opptime" value="<?php if(isset($cus_opptime)): ?><?php echo $cus_opptime; endif; ?>" class="layui-input" id="test6" placeholder="请选择客户预约日期">
                    </div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <button class="layui-btn"  lay-submit lay-filter="*">查询</button>
                        <a href="<?=url('user/userlist')?>" class="layui-btn layui-btn-warm">刷新</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="panel panel-padding" style="padding-top: 10px;padding-left: 10px;">
        <div class="layui-inline">
            <div class="layui-input-inline">
                <button id="backBatch" class="layui-btn layui-btn">批量恢复</button>
            </div>
            <div class="layui-input-inline">
                <button id="absdelBatch" class="layui-btn layui-btn-danger">批量彻删</button>
            </div>
        </div>
    </section>
    <table class="layui-form layui-table layui-table-box layui-table-view" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
        <thead>
        <tr>
            <td>全选<input type="checkbox" lay-skin="primary" lay-filter="checkAll"  id="checkAll"/></td>
            <td>预约城市</td>
            <td>预约时间</td>
            <td>客户姓名</td>
            <td>联系方式</td>
            <td>建筑面积</td>
            <td>小区楼盘</td>
            <td>网址入口+位置</td>
            <!--<td>用户IP</td>-->
            <td>推广来源</td>
            <td>推广创意</td>
            <td>关键词</td>
            <td>标记状态</td>
            <td>操作人</td>
            <td>操作时间</td>
            <td>操作</td>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($userBack) || $userBack instanceof \think\Collection || $userBack instanceof \think\Paginator): $i = 0; $__LIST__ = $userBack;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cus): $mod = ($i % 2 );++$i;?>
        <tr>
            <td>
                <!--<?php echo $cus['cus_id']; ?>-->
                <input type="checkbox" lay-skin="primary" class="checks" value="<?php echo $cus['cus_id']; ?>"/>
            </td>
            <td><?php echo $cus['p_name']; ?>-<?php echo $cus['c_name']; ?></td>
            <td><?php echo $cus['cus_opptime']; ?></td>
            <td><?php echo $cus['cus_name']; ?></td>
            <td><?php echo $cus['cus_phone']; ?></td>
            <td><?php echo $cus['cus_area']; ?>m²</td>
            <td><?php echo $cus['cus_build']; ?></td>
            <td><?php echo $cus['cus_link']; ?><br/><?php echo $cus['cus_position']; ?></td>
            <!--<td><?php echo $cus['cus_ip']; ?></td>-->
            <td><?php echo $cus['cus_from']; ?></td>
            <td><?php echo $cus['cus_origin']; ?></td>
            <td><?php echo $cus['cus_keywords']; ?></td>
            <td><?php echo $cus['cus_status']; ?></td>
            <td><?php echo $cus['cus_opeater']; ?></td>
            <td><?php echo $cus['cus_backtime']; ?></td>
            <td>
                <button onclick="backUser(<?php echo $cus['cus_id']; ?>)" class="layui-btn layui-btn-xs layui-btn-normal">恢复</button>
                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delUser(<?php echo $cus['cus_id']; ?>)" >彻底删除</button>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div id="pages" style="text-align: center"></div>
</div>
<script>
    layui.use(['laypage', 'layer','laydate','form','jquery'], function(){
        var laypage = layui.laypage,
            laydate = layui.laydate,
            form = layui.form,
            $ = layui.jquery;
        laydate.render({
            elem: '#test6'
            ,range: true
        });
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
                    window.location.href="<?=url('user/userback')?>?page="+obj.curr+"&limit="+obj.limit;
                }
            }
        });
        //全选，全不选；
        form.on("checkbox(checkAll)",function (data) {
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
            child.each(function (index,item) {
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });
        //批量删除
        $('#absdelBatch').click(function () {
            layer.confirm('确定批量删除客户？删除后不可恢复！', {
                btn : [ '确定', '取消' ]//按钮
            }, function() {
                //1.获取选中的id；
                var ids = "";
                var icheck=document.getElementsByClassName('checks');
                for(var i=0;i<icheck.length;i++){
                    if(icheck.item(i).checked){
                        ids+=icheck.item(i).value;
                        ids+=",";
                    }
                }
                //2.获取到了选中的id；把选中的id传到后台进行删除或导出操作；
                $.ajax({
                    type: 'POST',
                    url: "<?=url('user/absdelBatch')?>?ids="+ids,
                    data: {ids:ids},
                    dataType:  'json',
                    success: function(data){
                        if(data.code == '1'){
                            layer.alert('批量删除成功！', {
                                icon: 1,
                                skin: 'layer-ext-moon',
                                time: 2000,
                                end: function(){
                                    window.location.href='<?=url("user/userback")?>';
                                }
                            });
                        }
                    }
                });
            },function(){
                layer.msg('您已取消该操作！',{
                    time: 2000,
                    end: function(){
                        window.location.href='<?=url("user/userback")?>';
                    }
                });
            });
        });
        //批量恢复
        $('#backBatch').click(function () {
            layer.confirm('确定批量恢复这些客户？', {
                btn : [ '确定', '取消' ]//按钮
            }, function() {
                //1.获取选中的id；
                var ids = "";
                var icheck=document.getElementsByClassName('checks');
                for(var i=0;i<icheck.length;i++){
                    if(icheck.item(i).checked){
                        ids+=icheck.item(i).value;
                        ids+=",";
                    }
                }
                //2.获取到了选中的id；把选中的id传到后台进行删除或导出操作；
                $.ajax({
                    type: 'POST',
                    url: "<?=url('user/backBatch')?>?ids="+ids,
                    data: {ids:ids},
                    dataType:  'json',
                    success: function(data){
                        if(data.code == '1'){
                            layer.alert('批量恢复成功！', {
                                icon: 1,
                                skin: 'layer-ext-moon',
                                time: 2000,
                                end: function(){
                                    window.location.href='<?=url("user/userback")?>';
                                }
                            });
                        }
                    }
                });
            },function(){
                layer.msg('您已取消该操作！',{
                    time: 2000,
                    end: function(){
                        window.location.href='<?=url("user/userback")?>';
                    }
                });
            });
        });
    });

    //从回收站恢复某一用户
    function backUser(cus_id) {
        layer.confirm('确定恢复该客户？', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            window.location.href='<?=url("user/backNormal")?>?cus_id='+ cus_id ;
            layer.msg('您已恢复该客户', {icon: 1});
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
    //彻底删除
    function delUser(cus_id) {
        layer.confirm('确定删除该客户？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            layer.msg('您已删除该客户', {icon: 1});
            window.location.href='<?=url("user/absdelete")?>?cus_id='+ cus_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
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