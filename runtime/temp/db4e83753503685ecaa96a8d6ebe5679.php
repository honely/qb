<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\qbl\public/../application/index\view\setinfo\addbranch.html";i:1525743673;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\header.html";i:1525742386;s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\indexs\footer.html";i:1525742360;}*/ ?>
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
    <blockquote class="layui-elem-quote">开通分站</blockquote>
    <form class="layui-form" id="baseInfo" action="<?=url('setinfo/addbranch')?>" method="post">
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">①开站信息</li>
            <li>②联系通讯</li>
            <li>③统计工具</li>
        </ul>
        <div class="layui-tab-content">
            <!--基本信息-->
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">站点名称</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_name" lay-verify="required|s_key" required placeholder="请输入站点名称" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">站点logo</label>
                            <div class="layui-upload">
                                <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                                <input type="hidden" name="b_logo" id="b_logo" value=""/>
                                <div class="layui-upload-list" style="margin-left: 60px;">
                                    <img class="layui-upload-img" id="logoPre">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">图片alt</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_logo_alt" lay-verify="required|b_logo_alt" required placeholder="请输入图片alt" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">标识前缀</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_prex" lay-verify="required|s_value" required placeholder="请输入站点标识前缀" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">站点电话</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_tel" lay-verify="required|phone"  required placeholder="请输入站点站点电话" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">微信二维码</label>
                            <div class="layui-upload">
                                <button type="button" class="layui-btn" id="uploadWechat">上传微信二维码</button>
                                <input type="hidden" name="b_weichat" id="b_weichat" value=""/>
                                <div class="layui-upload-list" style="margin-left: 60px;">
                                    <img class="layui-upload-img" id="WechatPre">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">微博二维码</label>
                            <div class="layui-upload">
                                <button type="button" class="layui-btn" id="uploadWeibo">上传微博二维码</button>
                                <input type="hidden" name="b_weibo" id="b_weibo" value=""/>
                                <div class="layui-upload-list" style="margin-left: 60px;">
                                    <img class="layui-upload-img" id="weiboPre">
                                    <p id="weiboText"></p>
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">城市</label>
                            <div class="layui-input-inline">
                                <select name="b_province" id="cus_provid" lay-verify="required" lay-filter="cus_provid">
                                    <option value="">请选择省份</option>
                                    <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['p_id']; ?>"><?php echo $vo['p_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="b_city" id="cityName" lay-verify="required" lay-filter="myselect2">
                                    <option value="">请选择市</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">详细地址</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_address" lay-verify="required|s_value" required placeholder="请输入详细地址" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">地理坐标</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_location" lay-verify="required|b_location" required placeholder="请输入地理坐标" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                        <label class="layui-form-label">开通时间</label>
                        <div class="layui-input-block">
                            <input type="text" name="b_createtime" id="date" lay-verify="required|s_value" required placeholder="请选择开通时间" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-item" pane>
                            <label class="layui-form-label">是否开启</label>
                            <div class="layui-input-block">
                                <input type="radio" name="b_isopen" value="1" title="是" checked>
                                <input type="radio" name="b_isopen" value="2" title="否">
                            </div>
                        </div>
                    </div>

                        <!--<div class="layui-form-item">-->
                            <!--<div class="layui-input-block">-->
                                <!--<button class="layui-btn" onclick="next1()">下一步</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <!--扩展信息-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">客服代码</label>
                            <div class="layui-input-block">
                                <textarea name="b_thridcode" class="layui-textarea" placeholder="请输入客服代码"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">客服链接</label>
                            <div class="layui-input-block">
                                <textarea name="b_serviceurl" lay-verify="url" class="layui-textarea" placeholder="请输入客服代码"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">接受预约短信手机号</label>
                            <div class="layui-input-block">
                                <input type="text" name="b_adminphone" lay-verify="required|phone"  placeholder="请输入手机号" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <!--<div class="layui-form-item">-->
                            <!--<div class="layui-input-block">-->
                                <!--<button class="layui-btn" >下一步</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <!--统计工具-->
            <div class="layui-tab-item">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">统计代码</label>
                            <div class="layui-input-block">
                                <textarea name="b_codecount" class="layui-textarea" placeholder="请输入客服代码"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">其他代码</label>
                            <div class="layui-input-block">
                                <textarea name="b_othercode" class="layui-textarea" placeholder="请输入其他代码"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="*">保存</button>
                                <a class="layui-btn layui-btn-primary" href="<?=url('setinfo/branch')?>">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    layui.use(['form', 'laydate', 'jquery','upload'], function(){
        var form = layui.form
            ,laydate = layui.laydate
            ,upload = layui.upload
            ,$ = layui.jquery;

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
        form.on('select(cus_provid)', function(data){
            var p_id=data.value;
            $.ajax({
                type: 'POST',
                url: "<?=url('user/getCityName')?>?p_id="+p_id,
                data: {p_id:p_id},
                dataType:  'json',
                success: function(data){
                    var code=data.data;
                    $("#cityName").html("<option value=''>请选择市</option>");
                    $.each(code, function(i, val) {
                        var option1 = $("<option>").val(val.c_id).text(val.c_name);
                        $("#cityName").append(option1);
                        form.render('select');
                    });
                    $("#cityName").get(0).selectedIndex=0;
                }
            });
        });
        //站点LOGO上传
        upload.render({
            elem: '#uploadLogo'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            ,size: 60 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                console.log(res);
                layer.close(loading);
                $('#b_logo').val(res.path);
                $('#logoPre').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });
        //站点微信二维码上传
        upload.render({
            elem: '#uploadWechat'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            ,size: 60 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                console.log(res);
                layer.close(loading);
                $('#b_weichat').val(res.path);
                $('#WechatPre').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });
        //站点LOGO上传
        upload.render({
            elem: '#uploadWeibo'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            ,size: 60 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                console.log(res);
                layer.close(loading);
                $('#b_weibo').val(res.path);
                $('#weiboPre').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });
        //基本信息提交
        // form.on('submit(subBase)', function(){
        //     $.ajax({
        //         type:"post",
        //         url:"<?=url('setinfo/addbranch')?>",
        //         data:$("#baseInfo").serialize(),
        //         success:function (result) {
        //             console.log(result);
        //             // if(result.code == '1'){
        //             //     window.location.reload();
        //             // }
        //         },
        //         'error':function (error) {
        //             console.log(error);
        //         }
        //     })
        // });
    });
    //基本信息也点击下一步
    function next1(){


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