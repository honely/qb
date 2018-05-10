<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\typelist.html";i:1525943551;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <!--选项卡写法-->
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>类型参数</legend>
    </fieldset>
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">客户标记</li>
            <li>装修风格</li>
            <li>装修品质</li>
            <li>房屋类型</li>
            <li>房屋面积</li>
        </ul>
        <div class="layui-tab-content">
            <!--客户标记-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addType()">添加标记</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>类型名称</td>
                            <td>类型简介</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($typeInfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($typeInfo) || $typeInfo instanceof \think\Collection || $typeInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $typeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['type_id']; ?></td>
                            <td><?php echo $type['type_name']; ?></td>
                            <td><?php echo $type['type_remarks']; ?></td>
                            <td><?php if($type['type_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-xs" onclick="editType(<?php echo $type['type_id']; ?>)">编辑</button>
                                <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="delType(<?php echo $type['type_id']; ?>)" data-type="test2">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--装修风格-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addStyle()">装修风格</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>风格编号</td>
                            <td>风格名称</td>
                            <td>风格介绍</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($styleInfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($styleInfo) || $styleInfo instanceof \think\Collection || $styleInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $styleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['type_id']; ?></td>
                            <td><?php echo $type['type_name']; ?></td>
                            <td><?php echo $type['type_remarks']; ?></td>
                            <td><?php if($type['type_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-sm" onclick="editType(<?php echo $type['type_id']; ?>)"><i class="layui-icon">&#xe642;</i></button>
                                <button class="layui-btn layui-btn-sm" onclick="delType(<?php echo $type['type_id']; ?>)" data-type="test2"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--装修品质-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addLevel()">装修品质</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>品质名称</td>
                            <td>品质介绍</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($qualityInfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($qualityInfo) || $qualityInfo instanceof \think\Collection || $qualityInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $qualityInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['type_id']; ?></td>
                            <td><?php echo $type['type_name']; ?></td>
                            <td><?php echo $type['type_remarks']; ?></td>
                            <td><?php if($type['type_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-sm" onclick="editType(<?php echo $type['type_id']; ?>)"><i class="layui-icon">&#xe642;</i></button>
                                <button class="layui-btn layui-btn-sm" onclick="delType(<?php echo $type['type_id']; ?>)" data-type="test2"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--房屋类型-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addHouseType()">添加类型</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>品质名称</td>
                            <td>品质介绍</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($houseInfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($houseInfo) || $houseInfo instanceof \think\Collection || $houseInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $houseInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['type_id']; ?></td>
                            <td><?php echo $type['type_name']; ?></td>
                            <td><?php echo $type['type_remarks']; ?></td>
                            <td><?php if($type['type_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-sm" onclick="editType(<?php echo $type['type_id']; ?>)"><i class="layui-icon">&#xe642;</i></button>
                                <button class="layui-btn layui-btn-sm" onclick="delType(<?php echo $type['type_id']; ?>)" data-type="test2"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--房屋面积-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div class="layui-btn-group">
                        <button class="layui-btn" onclick="addArea()">添加面积</button>
                    </div>
                    <table class="layui-table" lay-filter="parse-table-demo" style="padding: 10px;text-align: center;border: 1px;solid-color: #28282c">
                        <thead>
                        <tr>
                            <td>编号</td>
                            <td>品质名称</td>
                            <td>品质介绍</td>
                            <td>是否可用</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($areaInfo == null): ?>
                        <tr><td colspan="5">暂无内容</td></tr>
                        <?php endif; if(is_array($areaInfo) || $areaInfo instanceof \think\Collection || $areaInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $areaInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $type['type_id']; ?></td>
                            <td><?php echo $type['type_name']; ?></td>
                            <td><?php echo $type['type_remarks']; ?></td>
                            <td><?php if($type['type_isable'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                            <td>
                                <button class="layui-btn layui-btn-sm" onclick="editType(<?php echo $type['type_id']; ?>)"><i class="layui-icon">&#xe642;</i></button>
                                <button class="layui-btn layui-btn-sm" onclick="delType(<?php echo $type['type_id']; ?>)" data-type="test2"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use('layer', function(){
        // var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
        $('.demo').on('click', function(){
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    });
    function delType(type_id) {
        layer.confirm('确定删除这个类型？删除后不可恢复！', {
            btn : [ '确定', '取消' ]//按钮
        }, function() {
            layer.msg('您已删除此类型', {icon: 1});
            window.location.href='<?=url("setinfo/delType")?>?type_id='+ type_id ;
        },function(){
            layer.msg('您已取消该操作！',{
                time: 2000
            });
        });
    }
</script>
<script type="text/javascript">
    function addType(){
        window.location.href='<?=url('setinfo/addtype')?>?type=1';
    }
    function addStyle(){
        window.location.href='<?=url('setinfo/addtype')?>?type=2';
    }
    function addLevel(){
        window.location.href='<?=url('setinfo/addtype')?>?type=3';
    }
    function addHouseType(){
        window.location.href='<?=url('setinfo/addtype')?>?type=4';
    }
    function addArea(){
        window.location.href='<?=url('setinfo/addtype')?>?type=5';
    }
    function editType(type_id){
        window.location.href='<?=url("setinfo/editType")?>?type_id='+ type_id ;
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