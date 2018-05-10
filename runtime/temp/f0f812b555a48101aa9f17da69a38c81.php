<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\xampp\htdocs\qbl\public/../application/index\view\user\spread.html";i:1525931845;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
        <form class="layui-form layui-form-pane1" action="<?=url('user/userlist')?>">
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
    <table class="layui-form layui-table layui-table-box layui-table-view" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
        <thead>
        <tr>
            <td>客户编号</td>
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
        <?php if(is_array($cusInfo) || $cusInfo instanceof \think\Collection || $cusInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $cusInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cus): $mod = ($i % 2 );++$i;?>
        <tr>
            <td>
                <?php echo $cus['cus_bid']; ?>
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
                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delUser(<?php echo $cus['cus_id']; ?>)" >删除</button>
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
                    window.location.href="<?=url('user/userlist')?>?page="+obj.curr+"&limit="+obj.limit;
                }
            }
        });
        //全选，全不选
        form.on("checkbox(checkAll)",function (data) {
            console.log(data.elem);
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
            child.each(function (index,item) {
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });
        //批量删除
        $('#delBatch').click(function () {
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
                    url: "<?=url('user/delBatch')?>?ids="+ids,
                    data: {ids:ids},
                    dataType:  'json',
                    success: function(data){
                        if(data.code == '1'){
                            layer.alert('批量删除成功！', {
                                icon: 1,
                                skin: 'layer-ext-moon',
                                time: 2000,
                                end: function(){
                                    window.location.href='<?=url("user/userlist")?>';
                                }
                            });
                        }
                    }
                });
            },function(){
                layer.msg('您已取消该操作！',{
                    time: 2000,
                    end: function(){
                        window.location.href='<?=url("user/userlist")?>';
                    }
                });
            });
        });
        //全部删除
        $('#delAll').click(function () {
            layer.confirm('确定全部删除客户？删除后不可恢复！', {
                btn : [ '确定', '取消' ]//按钮
            }, function() {
                layer.confirm('真的要全部删除客户？删除后不可恢复！', {
                    btn : [ '确定', '取消' ]//按钮
                }, function() {
                    $.ajax({
                        type: 'POST',
                        url: "<?=url('user/delAll')?>",
                        dataType:  'json',
                        success: function(data){
                            if(data.code == '1'){
                                layer.alert('全部删除成功！', {
                                    icon: 1,
                                    skin: 'layer-ext-moon',
                                    time: 2000,
                                    end: function(){
                                        window.location.href='<?=url("user/userlist")?>';
                                    }
                                });
                            }
                        }
                    });
                },function(){
                    layer.msg('您已取消该操作！',{
                        time: 2000
                    });
                });
            },function(){
                layer.msg('您已取消该操作！',{
                    time: 2000
                });
            });
        });

        //批量导出  该功能目前还有点问题
        // $('#exportExl').click(function () {
        //     layer.confirm('您将要批量导出所选数据！', {
        //         btn : [ '继续', '取消' ]//按钮
        //     }, function() {
        //         //1.获取选中的id；
        //         var ids = "";
        //         var icheck=document.getElementsByClassName('checks');
        //         for(var i=0;i<icheck.length;i++){
        //             if(icheck.item(i).checked){
        //                 ids+=icheck.item(i).value;
        //                 ids+=",";
        //             }
        //         }
        //         //2.获取到了选中的id；把选中的id传到后台进行删除或导出操作；
        //         $.ajax({
        //             type: 'POST',
        //             url: "<?=url('excel/outExcelRecharge')?>?ids="+ids,
        //             data: {ids:ids},
        //             dataType:  'json',
        //             // success: function(data){
        //             //     if(data.code == '1'){
        //             //         layer.alert('批量删除成功！', {
        //             //             icon: 1,
        //             //             skin: 'layer-ext-moon',
        //             //             time: 2000,
        //             //             end: function(){
        //             //                 window.location.href='<?=url("user/userlist")?>';
        //             //             }
        //             //         });
        //             //     }
        //             // }
        //         });
        //     },function(){
        //         layer.msg('您已取消该操作！',{
        //             time: 2000,
        //             end: function(){
        //                 window.location.href='<?=url("user/userlist")?>';
        //             }
        //         });
        //     });
        // });


        //发送短信
        $('.sendMsg').click(function () {
            var cus_id=this.name;
            layer.confirm('确定发送短信给客户？', {
                btn : [ '确定', '取消' ]//按钮
            }, function() {
                $.ajax({
                    type: 'POST',
                    url: "<?=url('user/sendMsg')?>?cus_id="+ cus_id ,
                    dataType:  'json',
                    success: function(data){
                        console.log(data);
                        if(data.code == '0'){
                            layer.alert('已发送短信给该客户！', {
                                icon: 1,
                                skin: 'layer-ext-moon',
                                time: 2000,
                                end: function(){
                                    window.location.href='<?=url("user/userlist")?>';
                                }
                            });
                        }
                    }
                });
            },function(){
                layer.msg('您已取消该操作！',{
                    time: 2000,
                    end: function(){
                        window.location.href='<?=url("user/userlist")?>';
                    }
                });
            });
        })
    });

    function delUser(cus_id) {
        layer.confirm('确定删除该客户？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            layer.msg('您已删除该客户', {icon: 1});
            window.location.href='<?=url("user/delUser")?>?cus_id='+ cus_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
    //编辑用户
    function editUser(user_id){
        layer.open({
            type: 2,
            title: '预约客户详细信息',
            shadeClose: true,
            shade: false,
            maxmin: true,
            area: ['893px', '600px'],
            content: "<?=url('user/details')?>?user_id="+user_id
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