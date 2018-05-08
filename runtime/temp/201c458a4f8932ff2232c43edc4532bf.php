<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\admin\addrole.html";i:1525764985;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <blockquote class="layui-elem-quote">添加角色</blockquote>
    <div style="padding: 15px;">
        <form class="layui-form" id="addRoles" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">角色名称</label>
                <div class="layui-input-block">
                    <input type="text" name="r_name" id="r_name" lay-verify="required|title" placeholder="请输入角色名称" autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-collapse">
                <?php if(is_array($menuList) || $menuList instanceof \think\Collection || $menuList instanceof \think\Paginator): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">
                        <input type="checkbox" class="checkParents checks" lay-filter="checkAll" value="<?php echo $menu['m_id']; ?>" lay-skin="primary" /><?php echo $menu['m_name']; ?></h2>
                    <div class="layui-colla-content layui-show">
                        <div class="layui-collapse">
                            <?php if(is_array($menu['child']) || $menu['child'] instanceof \think\Collection || $menu['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                            <div class="layui-colla-item">
                                <h2 class="layui-colla-title"><input class="checkChild checks" type="checkbox" lay-filter="checkFun" value="<?php echo $child['m_id']; ?>" lay-skin="primary" /><?php echo $child['m_name']; ?></h2>
                                <div class="layui-colla-content layui-show">
                                    <?php if(is_array($child['children']) || $child['children'] instanceof \think\Collection || $child['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $child['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
                                    <input type="checkbox" class="checkFun checks" value="<?php echo $children['m_id']; ?>" lay-skin="primary" /><?php echo $children['m_name']; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <span class="layui-btn" lay-submit="" lay-filter="saveInfo" id="saveInfo">保存</span>
                    <a class="layui-btn layui-btn-primary" href="<?=url('admin/admin')?>">返回</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form', 'jquery','element'], function(){
        var form = layui.form
            ,$ = layui.jquery;
        //选中某一模块，模块下面的菜单和方法都选中
        form.on("checkbox(checkAll)",function (data) {
            var child = $(data.elem).parent(".layui-colla-title").siblings(".layui-colla-content").children(".layui-collapse").children(".layui-colla-item").children(".layui-colla-title").children(".checkChild");
            var childs =$(data.elem).parent(".layui-colla-title").siblings(".layui-colla-content").children(".layui-collapse").children(".layui-colla-item").children(".layui-colla-content").children(".checkFun");
            child.each(function (index,item) {
                item.checked = data.elem.checked;
            });
            childs.each(function (index,item) {
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });
        //选中某一菜单，菜单下面的方法都选中；
        form.on("checkbox(checkFun)",function (data) {
            var child = $(data.elem).parent(".layui-colla-title").siblings(".layui-colla-content").children(".checkFun");
            child.each(function (index,item) {

                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });


        form.on('submit(saveInfo)', function(data){

            //1.获取选中的id；
            var ids = "";
            var icheck=document.getElementsByClassName('checks');
            for(var i=0;i<icheck.length;i++){
                if(icheck.item(i).checked){
                    ids+=icheck.item(i).value;
                    ids+=",";
                }
            }
            var r_name=$('#r_name').val();
            $.ajax({
                'type':"post",
                'url': "<?=url('admin/addmenuids')?>?ids=" +ids+ "&r_name="+r_name,
                // 'data':$("#addRoles").serialize(),
                'success':function (result) {
                    if(result.code == '1'){
                        layer.alert('添加角色成功！', {
                            icon: 1,
                            skin: 'layer-ext-moon',
                            time: 2000,
                            end: function(){
                                window.location.href='<?=url("admin/role")?>';
                            }
                        });
                    }else{
                        layer.alert('添加角色失败！', {
                            icon: 2,
                            skin: 'layer-ext-moon',
                            time: 2000,
                            end: function(){
                                window.location.href='<?=url("admin/addrole")?>';
                            }
                        });
                    }
                },
                'error':function (error) {
                    console.log(error);
                }
            })
        });

























        // //提交所选目录
        // $('#saveInfo').click(function () {
        //     //1.获取选中的id；
        //     var ids = "";
        //     var icheck=document.getElementsByClassName('checks');
        //     for(var i=0;i<icheck.length;i++){
        //         if(icheck.item(i).checked){
        //             ids+=icheck.item(i).value;
        //             ids+=",";
        //         }
        //     }
        //     alert(ids);
        //     //2.获取到了选中的id；把选中的id传到后台进行删除或导出操作；
        //     $.ajax({
        //         type: 'POST',
        //         url: "<?=url('admin/addmenuids')?>?ids=" +ids,
        //         data: {ids:ids},
        //         dataType:  'json',
        //         success: function(data){
        //             if(data.code == '1'){
        //                 layer.alert('添加角色成功！', {
        //                     icon: 1,
        //                     skin: 'layer-ext-moon',
        //                     time: 2000,
        //                     end: function(){
        //                         window.location.href='<?=url("admin/role")?>';
        //                     }
        //                 });
        //             }
        //         }
        //     });
        // });
    });
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