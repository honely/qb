<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\example\edit.html";i:1525516294;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\header.html";i:1525663540;s:70:"D:\xampp\htdocs\qbl\public/../application/index\view\index\footer.html";i:1524022637;}*/ ?>
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
    <blockquote class="layui-elem-quote">修改案例</blockquote>
    <div class="layui-tab">
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div style="margin: 10px">
                    <div style="padding: 15px;">
                        <form class="layui-form" action="<?=url('example/edit')?>?case_id=<?php echo $case['case_id']; ?>" method="post">
                            <div class="layui-form-item">
                                <label class="layui-form-label">案例标题</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_title" value="<?php echo $case['case_title']; ?>" lay-verify="required|title" placeholder="请输入案例标题" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">省份</label>
                                <div class="layui-input-inline">
                                    <select name="case_p_id" lay-verify="required" lay-filter="bu_p_id">
                                        <option value="">请选择省份</option>
                                        <?php if(is_array($prov) || $prov instanceof \think\Collection || $prov instanceof \think\Paginator): $i = 0; $__LIST__ = $prov;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['p_id']; ?>" <?php if($vo['p_id'] == $case['case_p_id']): ?>selected<?php endif; ?> ><?php echo $vo['p_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="case_c_id" lay-verify="required" id="bu_c_id" lay-filter="bu_c_id">
                                        <option value="">请选择城市</option>
                                        <?php if(is_array($city) || $city instanceof \think\Collection || $city instanceof \think\Paginator): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$citys): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $citys['c_id']; ?>" <?php if($citys['c_id'] == $case['case_c_id']): ?>selected<?php endif; ?>><?php echo $citys['c_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <!--户型图-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传户型图片</legend>
                                </fieldset>
                                <label class="layui-form-label">户型图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadLogo">上传图片</button>
                                    <input type="hidden" name="case_type_iamge" id="case_type_iamge" value="<?php echo $case['case_type_iamge']; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_type_iamge']; ?>" style="height: 210px;width: 350px" id="logoPre">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_type_title" value="<?php echo $case['case_type_title']; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_type_desc" class="layui-textarea"><?php echo $case['case_type_desc']; ?></textarea>
                                </div>
                            </div>
                            <!--案例效果图-->
                            <!--案例图1-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图1</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase1">上传图片</button>
                                    <input type="hidden" name="case_img[1]" id="case_img1" value="<?php echo $case['case_img'][0]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][0]; ?>" style="height: 210px;width: 350px" id="casePre1">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips1" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[1]" value="<?php echo $case['case_img_title'][0]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[1]" class="layui-textarea"><?php echo $case['case_img_desc'][0]; ?></textarea>
                                </div>
                            </div>


                            <!--案例图2-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图2</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase2">上传图片</button>
                                    <input type="hidden" name="case_img[2]" id="case_img2"value="<?php echo $case['case_img'][1]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][1]; ?>" style="height: 210px;width: 350px" id="casePre2">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips2" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[2]" value="<?php echo $case['case_img_title'][1]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[2]" class="layui-textarea"><?php echo $case['case_img_desc'][1]; ?></textarea>
                                </div>
                            </div>


                            <!--案例图3-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图3</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase3">上传图片</button>
                                    <input type="hidden" name="case_img[3]" id="case_img3" value="<?php echo $case['case_img'][2]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][2]; ?>" style="height: 210px;width: 350px" id="casePre3">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips3" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[3]" value="<?php echo $case['case_img_title'][2]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[3]" class="layui-textarea"><?php echo $case['case_img_desc'][2]; ?></textarea>
                                </div>
                            </div>
                            <!--案例图4-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图4</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase4">上传图片</button>
                                    <input type="hidden" name="case_img[4]" id="case_img4" value="<?php echo $case['case_img'][3]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][3]; ?>" style="height: 210px;width: 350px" id="casePre4">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips4" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[4]" value="<?php echo $case['case_img_title'][3]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[4]" class="layui-textarea"><?php echo $case['case_img_desc'][3]; ?></textarea>
                                </div>
                            </div>
                            <!--案例图5-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图5</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase5">上传图片</button>
                                    <input type="hidden" name="case_img[5]" id="case_img5" value="<?php echo $case['case_img'][4]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][4]; ?>" style="height: 210px;width: 350px" id="casePre5">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips5" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[5]" value="<?php echo $case['case_img_title'][4]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[5]" class="layui-textarea"><?php echo $case['case_img_desc'][4]; ?></textarea>
                                </div>
                            </div>
                            <!--案例图6-->
                            <div class="layui-form-item">
                                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                                    <legend>上传案例图6</legend>
                                </fieldset>
                                <label class="layui-form-label">案例图</label>
                                <div class="layui-upload">
                                    <button type="button" class="layui-btn" id="uploadCase6">上传图片</button>
                                    <input type="hidden" name="case_img[6]" id="case_img6" value="<?php echo $case['case_img'][5]; ?>"/>
                                    <div class="layui-upload-list" style="margin-left: 60px;">
                                        <img class="layui-upload-img" src="__PUBLIC__<?php echo $case['case_img'][5]; ?>" style="height: 210px;width: 350px" id="casePre6">
                                    </div>
                                </div>
                                <div class="layui-form-mid layui-word-aux" id="tips6" style="margin-left: 100px; color:red !important;">备注：图片规格1200*600px</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">区域名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_img_title[6]" value="<?php echo $case['case_img_title'][5]; ?>" lay-verify="required|title" placeholder="请输入区域名称" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">区域介绍</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入区域介绍" name="case_img_desc[6]" class="layui-textarea"><?php echo $case['case_img_desc'][5]; ?></textarea>
                                </div>
                            </div>
                            <!--案例效果图-->
                            <div class="layui-form-item">
                                <label class="layui-form-label">设计师</label>
                                <div class="layui-input-inline">
                                    <select name="case_designer" lay-verify="required" lay-filter="case_designer">
                                        <option value="">请选择设计师</option>
                                        <?php if(is_array($design) || $design instanceof \think\Collection || $design instanceof \think\Paginator): $i = 0; $__LIST__ = $design;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['des_id']; ?>" <?php if($vo['des_id'] == $case['case_designer']): ?>selected<?php endif; ?>><?php echo $vo['des_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">装修风格</label>
                                <div class="layui-input-inline">
                                    <select name="case_style" lay-verify="required" lay-filter="case_style">
                                        <option value="">请选择风格</option>
                                        <?php if(is_array($style) || $style instanceof \think\Collection || $style instanceof \think\Paginator): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['type_id']; ?>" <?php if($vo['type_id'] == $case['case_style']): ?>selected<?php endif; ?> ><?php echo $vo['type_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">楼盘</label>
                                <div class="layui-input-inline">
                                    <select name="case_bulid" lay-verify="required" lay-filter="case_bulid">
                                        <option value="">请选择楼盘</option>
                                        <?php if(is_array($build) || $build instanceof \think\Collection || $build instanceof \think\Paginator): $i = 0; $__LIST__ = $build;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['bu_id']; ?>" <?php if($vo['bu_id'] == $case['case_bulid']): ?>selected<?php endif; ?> ><?php echo $vo['bu_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">户型</label>
                                <div class="layui-input-inline">
                                    <select name="dinner" lay-verify="required">
                                        <option value="">请选择厅</option>
                                        <option value="一厅" <?php if($case['case_type'][0] == '一厅'): ?>selected<?php endif; ?> >一厅</option>
                                        <option value="二厅" <?php if($case['case_type'][0] == '二厅'): ?>selected<?php endif; ?> >二厅</option>
                                        <option value="三厅" <?php if($case['case_type'][0] == '三厅'): ?>selected<?php endif; ?> >三厅</option>
                                        <option value="四厅" <?php if($case['case_type'][0] == '四厅'): ?>selected<?php endif; ?> >四厅</option>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="room" lay-verify="required" >
                                        <option value="">请选择室</option>
                                        <option value="一室" <?php if($case['case_type'][1] == '一室'): ?>selected<?php endif; ?> >一室</option>
                                        <option value="二室" <?php if($case['case_type'][1] == '二室'): ?>selected<?php endif; ?> >二室</option>
                                        <option value="三室" <?php if($case['case_type'][1] == '三室'): ?>selected<?php endif; ?> >三室</option>
                                        <option value="四室" <?php if($case['case_type'][1] == '四室'): ?>selected<?php endif; ?> >四室</option>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="wash" lay-verify="required">
                                        <option value="">请选择卫</option>
                                        <option value="一卫" <?php if($case['case_type'][2] == '一卫'): ?>selected<?php endif; ?> >一卫</option>
                                        <option value="二卫" <?php if($case['case_type'][2] == '二卫'): ?>selected<?php endif; ?> >二卫</option>
                                        <option value="三卫" <?php if($case['case_type'][2] == '三卫'): ?>selected<?php endif; ?> >三卫</option>
                                        <option value="四卫" <?php if($case['case_type'][2] == '四卫'): ?>selected<?php endif; ?> >四卫</option>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item" pane>
                                <label class="layui-form-label">是否显示</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="case_isable" value="1" title="是" <?php if($case['case_isable'] == 1): ?>checked<?php endif; ?> >
                                    <input type="radio" name="case_isable" value="2" title="否" <?php if($case['case_isable'] == 2): ?>checked<?php endif; ?> >
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">案例造价</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_price" value="<?php echo $case['case_price']; ?>" lay-verify="required" placeholder="请输入案例造价" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">案例全景</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_url" value="<?php echo $case['case_url']; ?>" lay-verify="required" placeholder="请输入案例全景链接" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">房屋面积</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_area" value="<?php echo $case['case_area']; ?>" lay-verify="required" placeholder="请输入房屋面积" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">案例简介</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入案例简介" name="case_remarks" class="layui-textarea"><?php echo $case['case_remarks']; ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">SEO标题</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_seo_tilte" value="<?php echo $case['case_seo_tilte']; ?>" lay-verify="required" placeholder="请输入SEO标题" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">SEO关键词</label>
                                <div class="layui-input-block">
                                    <input type="text" name="case_seo_keywords"  value="<?php echo $case['case_seo_keywords']; ?>"  lay-verify="required" placeholder="请输入SEO关键词,多个关键词之间用英文逗号隔开。" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">SEO描述</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="请输入SEO描述" name="case_seo_desc" class="layui-textarea"><?php echo $case['case_seo_desc']; ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item" pane>
                                <label class="layui-form-label">是否置顶</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="case_istop" value="1" title="是" <?php if($case['case_istop'] == 1): ?>checked<?php endif; ?>>
                                    <input type="radio" name="case_istop" value="2" title="否" <?php if($case['case_istop'] == 2): ?>checked<?php endif; ?>>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="saveInfo">保存</button>
                                    <a class="layui-btn layui-btn-primary" href="<?=url('example/example')?>">返回</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['form', 'jquery','upload','layedit'], function(){
        var form = layui.form
            ,upload = layui.upload
            ,layedit = layui.layedit
            ,$ = layui.jquery;
        //编辑器图片上传接口
        layedit.set({
            uploadImage: {
                url: '/index/example/editUpload' //接口url
                ,type: 'post', //默认post
                success:function(res){
                    console.log(res);
                },
                error:function (res) {
                    console.log(res);
                }
            }
        });
        $("#addCaseIma").click(function () {
            layer.open({
                type: 2,
                title: '添加案例全景图',
                shadeClose: true,
                shade: false,
                maxmin: true,
                area: ['893px', '600px'],
                content: "<?=url('example/addimg')?>",
            });

        });
        layedit.build('demo'); //建立编辑器
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
        //户型图片上传
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
                $('#case_type_iamge').val('');
                console.log(res);
                layer.close(loading);
                $('#case_type_iamge').val(res.path);
                $('#logoPre').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });




        //1.案例效果图片上传
        upload.render({
            elem: '#uploadCase1'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre1').removeAttr('src');
                $('#case_img1').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img1').val(res.path);
                $('#casePre1').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });


        //2.案例效果图片上传
        upload.render({
            elem: '#uploadCase2'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre2').removeAttr('src');
                $('#case_img2').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img2').val(res.path);
                $('#casePre2').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });


        //3.案例效果图片上传
        upload.render({
            elem: '#uploadCase3'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre3').removeAttr('src');
                $('#case_img3').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img3').val(res.path);
                $('#casePre3').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });


        //4.案例效果图片上传
        upload.render({
            elem: '#uploadCase4'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre4').removeAttr('src');
                $('#case_img4').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img4').val(res.path);
                $('#casePre4').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });


        //5.案例效果图片上传
        upload.render({
            elem: '#uploadCase5'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre5').removeAttr('src');
                $('#case_img5').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img5').val(res.path);
                $('#casePre5').attr('src',"__PUBLIC__"+res.path);
                layer.msg(res.msg, {icon: 1, time: 1000});
            }
            ,error: function(res){
                layer.msg(res.msg, {icon: 2, time: 1000});
            }
        });


        //6.案例效果图片上传
        upload.render({
            elem: '#uploadCase6'
            ,url: '<?php echo url("setinfo/upload"); ?>'
            // ,size:120 //限制文件大小，单位 KB
            ,ext: 'jpg|png|gif'
            ,accept: 'images' //限制文件大小，单位 KB
            ,before: function(input){
                loading = layer.load(2, {
                    shade: [0.2,'#000']
                });
            }
            ,done: function(res){
                $('#casePre6').removeAttr('src');
                $('#case_img6').val('');
                console.log(res);
                layer.close(loading);
                $('#case_img6').val(res.path);
                $('#casePre6').attr('src',"__PUBLIC__"+res.path);
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