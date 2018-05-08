<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\qbl\public/../application/index\view\example\index.html";i:1525315215;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tp5 + layui 上传图片</title>
    <link rel="stylesheet" href="__LAY__/css/layui.css">
    <link rel="stylesheet" href="__PUBLIC__/static/jquery-1.10.2.min.js">
    <script src="__LAY__/layui.js"></script>
    <style type="text/css">
        .box{
            margin-top: 10%;
            margin-bottom: 10px;
            color: #FF5722;
            font-size: 18px;
            margin-left: 45%;
        }
        .box1{
            width: 900px;
            height: 500px;
            margin-left: auto;
            border:solid  1px;
            margin-right:auto;
        }
        .box1 .controls{

        }
        .upload-icon-img{
            width:120px;
        }
        .upload-pre-item{
            position: relative;
        }
        .upload-pre-item .img{
            margin-top: 5px;
            width: 116px;
            height: 76px;
        }
        .upload-pre-item i {
            position: absolute;
            cursor: pointer;
            top: 5px;
            background: #2F4056;
            padding: 2px;
            line-height: 15px;
            text-align: center;
            color: #fff;
            margin-left: 1px;
            /* float: left; */
            filter: alpha(opacity=80);
            -moz-opacity: .8;
            -khtml-opacity: .8;
            opacity: .8;
            transition: 1s;
        }
        .upload-pre-item i:hover{transform:rotate(360deg);}
        .upload-pre-item,.upload-icon-img{
            width:120px;
            float: left;
            margin-left: 8px;
        }
    </style>
</head>
<body>
<div class="box"><span style="">tp5 + layui 上传图片</span></div>
<div class="box1">
    <div class="controls need-img">
        <button type="button" class="layui-btn layui-btn-primary" id="upload_img_icon">上传图片</button>
        <div class="upload-img-box">
        </div>
    </div>
</div>
<script>
    var upurl = "<?php echo url('example/upload'); ?>"; //上传图片地址
    layui.use(['layer','upload','jquery'], function(){
        var layer = layui.layer,
            $ = layui.jquery,
            upload = layui.upload;
        upload.render({ //上传图片
            elem: '#upload_img_icon',
            url: upurl,
            multiple: true, //是否允许多文件上传。设置 true即可开启。不支持ie8/9
            auto:true,//自动上传
            before: function(obj) {
                layer.msg('图片上传中...', {
                    icon: 16,
                    shade: 0.01,
                    time: 0
                })
            },
            done: function(res) {
                layer.close(layer.msg('上传成功！'));
                $('.upload-img-box').append('<dd class="upload-icon-img" ><div class="upload-pre-item"><i onclick="deleteImg(this)"   class="layui-icon"></i><img src="' + res.data + '" class="img" ><input type="hidden" name="case_images[]" value="' + res.data + '" /></div></dd>');
            }
            ,error: function(){
                layer.msg('上传错误！');
            }
        });

    });
    function deleteImg(obj){
        //删除页面信息
        obj.parent().parent('.upload-icon-img').remove();
        //删除本地图片（ajax)
        //删除数据库图片
    }
</script>
</body>
</html>