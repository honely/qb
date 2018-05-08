<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\qbl\public/../application/index\view\example\addimg.html";i:1525318763;}*/ ?>
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
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>添加效果图</legend>
    </fieldset>
    <div class="layui-form-item">
        <label class="layui-form-label">效果图标题</label>
        <div class="layui-input-block">
            <input type="text" name="case_title" lay-verify="required|title" placeholder="请输入效果图标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">效果图描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入效果图描述" name="art_seo_desc" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-filter="editCus">保存</button>
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
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });
    });
</script>