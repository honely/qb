<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\user\details.html";i:1525761219;}*/ ?>
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
    <link rel="stylesheet" href="__LAY__/css/layui.css">
    <link rel="stylesheet" href="__PUBLIC__/static/jquery-1.10.2.min.js">
    <script src="__LAY__/layui.js"></script>
</head>
<form class="layui-form" action="" id="cusInfo" method="post">
    <!--`cus_opeater` int(10) DEFAULT NULL COMMENT '操作人id 对应登陆管理员id',-->
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>预约客户详细信息</legend>
    </fieldset>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">客户姓名</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_name" value="<?php echo $cus['cus_name']; ?>" lay-verify="title" autocomplete="off" placeholder="请输入客户姓名" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">联系方式</label>
            <div class="layui-input-inline">
                <input type="tel" name="cus_phone" value="<?php echo $cus['cus_phone']; ?>"  lay-verify="required|phone" autocomplete="off" class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">备用电话</label>
            <div class="layui-input-inline">
                <input type="tel" name="cus_phone2" value="<?php echo $cus['cus_phone2']; ?>"  lay-verify="required|phone" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">预约时间</label>
            <div class="layui-input-inline">
                <input type="text" value="<?php echo $cus['cus_opptime']; ?>" readonly class="layui-input">
            </div>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">称呼</label>
            <div class="layui-input-block">
                <input type="radio" name="cus_sex" value="1" title="先生"  <?php if(1 == $cus['cus_sex']): ?>checked<?php endif; ?>>
                <input type="radio" name="cus_sex" value="2" title="女士"  <?php if(2 == $cus['cus_sex']): ?>checked<?php endif; ?>>
                <input type="radio" name="cus_sex" value="3" title="未知"  <?php if(3 == $cus['cus_sex']): ?>checked<?php endif; ?>>
            </div>
        </div>
    </div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>装修信息</legend>
    </fieldset>

    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">预计单值</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_promoney" value="<?php echo $cus['cus_promoney']; ?>" placeholder="￥" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid">单位：（万元）</div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">房屋面积</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_area" value="<?php echo $cus['cus_area']; ?>" placeholder="m²" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid">单位：（m²）</div>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">装修风格</label>
            <div class="layui-input-inline">
                <select name="cus_style" lay-filter="aihao">
                    <option value=""></option>
                    <?php if(is_array($style) || $style instanceof \think\Collection || $style instanceof \think\Paginator): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sty): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $sty['type_id']; ?>" <?php if($sty['type_id'] == $cus['cus_style']): ?>selected<?php endif; ?>><?php echo $sty['type_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">装修品质</label>
            <div class="layui-input-inline">
                <select name="cus_quality" lay-filter="aihao">
                    <option value=""></option>
                    <?php if(is_array($level) || $level instanceof \think\Collection || $level instanceof \think\Paginator): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lev): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $lev['type_id']; ?>" <?php if($lev['type_id'] == $cus['cus_quality']): ?>selected<?php endif; ?>><?php echo $lev['type_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">房屋类型</label>
            <div class="layui-input-inline">
                <input type="radio" name="cus_type" value="1" title="新房"  <?php if(1 == $cus['cus_type']): ?>checked<?php endif; ?>>
                <input type="radio" name="cus_type" value="2" title="二手房"  <?php if(2 == $cus['cus_type']): ?>checked<?php endif; ?>>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">房屋户型</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_house_type" value="<?php echo $cus['cus_house_type']; ?>" placeholder="如：两室一厅"  class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">小区名称</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_build" value="<?php echo $cus['cus_build']; ?>" class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">城市</label>
        <div class="layui-input-inline">
            <select name="cus_provid" id="cus_provid" lay-filter="cus_provid">
                <option value="">请选择省份</option>
                <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['p_id']; ?>" <?php if($vo['p_id'] == $cus['cus_provid']): ?>selected<?php endif; ?>><?php echo $vo['p_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="layui-input-inline">
            <select name="cus_cityid" id="cityName" lay-filter="myselect2">
                <option value="">请选择市</option>
                <?php if(is_array($cusCity) || $cusCity instanceof \think\Collection || $cusCity instanceof \think\Paginator): $i = 0; $__LIST__ = $cusCity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$city): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $city['c_id']; ?>" <?php if($city['c_id'] == $cus['cus_cityid']): ?>selected<?php endif; ?> ><?php echo $city['c_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>推广信息</legend>
    </fieldset>
    <div class="layui-form-item">
        <label class="layui-form-label">系统来源</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_sys']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">网址入口</label>
            <div class="layui-input-block">
                <input type="text"  value="<?php echo $cus['cus_link']; ?>" readonly class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">推广来源</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_from']; ?>"  class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">用户IP</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_ip']; ?>"  class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">预约位置</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_position']; ?>"  class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">推广创意</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_origin']; ?>" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">关键词</label>
        <div class="layui-input-block">
            <input type="text" readonly value="<?php echo $cus['cus_keywords']; ?>" class="layui-input">
        </div>
    </div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>回访信息</legend>
    </fieldset>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">预估见面</label>
            <div class="layui-input-inline">
                <input type="text" name="cus_seetime" value="<?php echo $cus['cus_seetime']; ?>"  id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">标记状态</label>
        <div class="layui-input-inline">
            <select name="cus_status" lay-filter="aihao">
                <option value="">请选择标记状态</option>
                <?php if(is_array($userTip) || $userTip instanceof \think\Collection || $userTip instanceof \think\Paginator): $i = 0; $__LIST__ = $userTip;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tip): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $tip['type_id']; ?>" <?php if($tip['type_id'] == $cus['cus_status']): ?>selected<?php endif; ?>><?php echo $tip['type_name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">回访备注</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入回访备注" name="cus_remarks" class="layui-textarea"><?php echo $cus['cus_remarks']; ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <span class="layui-btn" lay-submit="" lay-filter="editCus">保存</span>
        </div>
    </div>
</form>
</html>
<script>
    layui.use(['form', 'laydate', 'jquery'], function(){
        var form = layui.form
            ,laydate = layui.laydate
            ,$ = layui.jquery;

        //日期
        laydate.render({
            elem: '#date'
        });
        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 2){
                    return '标题至少得2个字符啊';
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

        form.on('submit(editCus)', function(data){
            $.ajax({
                'type':"post",
                'url':"<?=url('user/editUser')?>?cus_id=<?php echo $cus['cus_id']; ?>",
                'data':$("#cusInfo").serialize(),
                'success':function (result) {
                   if(result.code == '1'){
                       //关闭当前弹出窗
                       var index=parent.layer.getFrameIndex(window.name);
                       parent.layer.close(index);
                       //刷新父级页面；
                       window.parent.location.reload();
                   }
                },
                'error':function (error) {
                    console.log(error);
                }
            })
        });
    });
</script>