<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\xampp\htdocs\qbl\public/../application/home\view\index\demo.html";i:1526002749;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>交换空间_实景样板间</title>
    <meta name="keywords" content="贵阳交换空间装修公司 新房装修 装修效果图">
    <meta name="description" content="贵阳交换空间装饰CCTV合作中国装修设计第一品牌！咨询电话：0851-8683 9697">
    <link rel="icon" href="../favicon.ico">
    <!-- <link rel="stylesheet" href="css/animate.min.css"> -->
    <link rel="stylesheet" href="__PUBLIC__/home/css/swiper.css">
    <link rel="stylesheet" href="__PUBLIC__/home/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/home/css/common.css">
    <link rel="stylesheet" href="__PUBLIC__/home/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/home/css/case.css">
</head>

<body>
    <!-- 头部 begin -->
    <div class="header">
        <div class="head-group">
            <div class="logo">
                <a href="/index.html">
                    <img src="../img/logo.png" alt="logo">
                </a>
            </div>
            <ul class="navs">
                <li class="navlist">
                    <a href="<?=url('index/index')?>">首页</a>
                </li>
                <li class="navlist">
                    <a href="<?=url('index/product')?>">定制整装</a>
                </li>
                <li class="navlist">
                    <a href="<?=url('index/design')?>">量房设计</a>
                </li>
                <li class="navlist">
                    <a href="<?=url('index/quote')?>">智能报价</a>
                </li>
                <li class="navlist cur">
                    <a href="<?=url('index/demo')?>">实景样板间</a>
                </li>
                <li class="navlist">
                    <a href="<?=url('index/about')?>">装修资讯</a>
                </li>
            </ul>
            <div class="tel-group">
                <img src="../img/icon_tel.png" alt="">
                <span>0851-8683 9697</span>
            </div>
        </div>
    </div>
    <!-- 头部end -->

    <!-- banner区 begin -->
    <div class="case-ban">
        <img src="../img/caseban.png" alt="">
        <div class="caseban-con">
            <form class="form-show" name='feedback' method='post' enctype='multipart/form-data' action="<?=url('index/index')?>">
                <input type=hidden name=ecmsfrom value="/">
                <input name='enews' type='hidden' value='AddFeedback'>
                <input name='title' type='hidden' value='实景案例预约'>
                <input type=hidden name=bid value=2>
                <input type=hidden name=laiyuan id=laiyuan>
                <input type=hidden name=chuangyi id=chuangyi>
               <!-- 可见表单 -->
                <input type="number" name="mycall" class="phone" id="mycall" placeholder="请输入您的手机号码" />
                <input type="submit" class="subtn" value="立即预约" />
            </form>
        </div>
    </div>
    <!-- banner区 end -->
    <!-- 案例展示 -->
    <div class="case-group">
        <div class="tab-box">
                <ul class="tab-wrap">
                        <li class="tab_list">
                            <img src="../img/casetab01.png" alt="">
                            <div class="tab_list-title actived">
                                北欧宜家风<br/>给装修加满分
                            </div>
                            <!-- <div class="tab-active">
                            </div> -->
                        </li>
                        <li class="tab_list">
                            <img src="../img/casetab02.png" alt="">
                            <div class="tab_list-title">
                                恬静简美风<br/>给你一个明亮的家
                            </div>
                        </li>
                        <li class="tab_list">
                            <img src="../img/casetab03.png" alt="">
                            <div class="tab_list-title">
                                90后夫妇<br/>也爱的新中式设计
                            </div>
                        </li>
                        <li class="tab_list">
                            <img src="../img/casetab04.png" alt="">
                            <div class="tab_list-title">
                                现代两居<br/>实用又富有设计感
                            </div>
                        </li>
                        <li class="tab_list">
                            <img src="../img/casetab05.png" alt="">
                            <div class="tab_list-title">
                                后现代<br/>精致的感官体验
                            </div>
                        </li>
                </ul>
        </div>
        <div class="case-content">
            <ul class="tabs">
                <li class="tab-show">
                    <h3 class="case-title"><img src="../img/line-lefT.png" alt=""><span>精选案例，预见您未来的家</span><img src="../img/line-right.png" alt=""></h3>
                    <div class="tab-active1"></div>
                    <ul class="case-cons">
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="case-con-list">
                            <div class="case-pic">
                                <img src="../img/case01.png" alt="">
                                <a href="/case_list/index.html" class="floor-plan">
                                    <img src="../img/case-01.png" alt="">
                                </a>
                                <a href="#" class="vr">
                                    <span>720°全景</span>
                                    <i class="player"></i>
                                </a>
                            </div>
                            <div class="case-infos">
                                <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                <div class="btn-wraps">
                                    <div class="my-bnt">
                                        <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="tab-show">
                        <h3 class="case-title"><img src="../img/line-lefT.png" alt=""><span>精选案例，预见您未来的家</span><img src="../img/line-right.png" alt=""></h3>
                        <div class="tab-active2"></div>
                        <ul class="case-cons">
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-24</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-24</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-24</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-24</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-24</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </li>
                <li class="tab-show">
                        <h3 class="case-title"><img src="../img/line-lefT.png" alt=""><span>精选案例，预见您未来的家</span><img src="../img/line-right.png" alt=""></h3>
                        <div class="tab-active3"></div>
                        <ul class="case-cons">
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-26</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-26</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-26</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-26</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-26</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-04-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </li>
                <li class="tab-show">
                        <h3 class="case-title"><img src="../img/line-lefT.png" alt=""><span>精选案例，预见您未来的家</span><img src="../img/line-right.png" alt=""></h3>
                        <div class="tab-active4"></div>
                        <ul class="case-cons">
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-06-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </li>
                <li class="tab-show">
                        <h3 class="case-title"><img src="../img/line-lefT.png" alt=""><span>精选案例，预见您未来的家</span><img src="../img/line-right.png" alt=""></h3>
                        <div class="tab-active5"></div>
                        <ul class="case-cons">
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="case-con-list">
                                <div class="case-pic">
                                    <img src="../img/case01.png" alt="">
                                    <a href="/case_list/index.html" class="floor-plan">
                                        <img src="../img/case-01.png" alt="">
                                    </a>
                                    <a href="#" class="vr">
                                        <span>720°全景</span>
                                        <i class="player"></i>
                                    </a>
                                </div>
                                <div class="case-infos">
                                    <h4><img src="../img/address.png" alt=""><span>枫叶新都市</span><i>--美式乡村</i></h4>
                                    <p><span>2018-05-23</span><i>【168㎡】7-8万</i></p>
                                    <span class="designer-pic"><img src="../img/case-designer01.png" alt=""></span>
                                    <div class="btn-wraps">
                                        <div class="my-bnt">
                                            <span data-layer="9" class="de-btn show-btn"><i>预约服务</i><img src="../img/icon_rt01.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </li>
            </ul>
            <p class="page">
                <a href="javascript:;" class="prev-page pages">上一页</a>
                <a href="javascript:;" class="num-page page-active">1</a>
                <a href="javascript:;" class="num-page">2</a>
                <a href="javascript:;" class="num-page">3</a>
                <a href="javascript:;" class="next-page pages">下一页</a>
            </p>  
        </div>
    </div>
    <!-- 专题案例 begin -->
    <div class="special-topic">
        <div class="special-case">
            <h3>专题案例</h3>
            <ul>
                <li><img src="../img/case-show01.png" alt=""><a href="javascript:;">追求性价比？<br/>80㎡北欧设计推荐给他#</a></li>
                <li><img src="../img/case-show02.png" alt=""><a href="javascript:;">#如何装出别墅范？#</a></li>
                <li><img src="../img/case-show03.png" alt=""><a href="javascript:;">#简约不等于简单#</a></li>
            </ul>
        </div>
    </div>
     <!-- 底部展示begin -->
     <div class="foot-container">
            <div class="foot-info">
                <div class="bot-left">
                    <h3>
                        <a href="/index.html">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </h3>
                    <p>
                        <img src="../img/logo_bot.png" alt="">
                    </p>
                </div>
                <div class="hot-line">
                    <p>
                        <img src="../img/tel.png" alt="">
                        <span>
                            官方服务热线：
                            <br/>
                            <i>0851-86839697</i>
                        </span>
                    </p>
                    <p>
                        <img src="../img/service.png" alt="">
                        <span>
                            贵阳交换空间装饰工程有限公司
                            <br/>
                            <em>服务时间：9:00-22:00</em>
                        </span>
                    </p>
                </div>
                <div class="code-con">
                    <img src="../img/code.png" alt="">
                    <p>扫码关注微信公众号</p>
                </div>
            </div>
        </div>
        <div class="footer">
                <p class="bot-nav">
                    <a href="/about/index.html">装修资讯</a>|<a href="/quote/index.html">智能报价</a>|<a href="/design/index.html">量房设计</a>|<a href="/case/index.html">实景体验馆</a>|<a href="/product/index.html">定制整装</a>|<a href="javascript:;">商务合作</a>|<a href="javascript:;">投诉建议</a>
                </p>
                <p>Copyright All Rights Reserved.&nbsp&nbsp贵阳交换空间装饰工程有限公司&nbsp&nbsp版权所有&nbsp&nbsp
                    <script src="https://s13.cnzz.com/z_stat.php?id=1273005258&web_id=1273005258" language="JavaScript"></script>&nbsp&nbsp
                    <span>公司地址：贵州省贵阳市云岩区兴中元大厦3-4层</span><br/>
                    <a href="http://www.miitbeian.gov.cn/" target="_blank">黔ICP备18002532号</a>
                </p>
            </div>
    <!-- 表单 -->
    <div class="form-wrap">
        <div class="form-content">
            <div class="form-titles">
                <h3>预约参观</h3>
                <p>预约参观家装新风尚 品质生活触手可得</p>
            </div>
            <form class="form-view" name='feedback' method='post' enctype='multipart/form-data' action="<?=url('index/index')?>">
                <input type=hidden name=ecmsfrom value="/">
                <input name='enews' type='hidden' value='AddFeedback'>
                <input name='title' class="position-con" type='hidden' value=''>
                <input type=hidden name=bid value=2>
                <input type=hidden name=laiyuan id=laiyuan>
                <input type=hidden name=chuangyi id=chuangyi>
                <label class="inputbox">
                    <span class="input-info">您的称呼</span>
                    <input type="text" name="name" class="nickname input" id="name" placeholder="请输入您的称呼" />
                </label>
                <label class="inputbox">
                    <span class="input-info">您的电话</span>
                    <input type="number" name="mycall" class="phone input" id="mycall" placeholder="请输入您的手机号码，获取免费服务" />
                </label>
                <input type="submit" class="subtn1" value="立即预约" />
            </form>
            <div class="close closebtn"></div>
        </div>
    </div>
    <div class="float-box">
        <div class="form-fixed">
            <ul>
                <li class="f-lt">
                    <img src="../img/hand.png" alt="">
                </li>
                <li class="f-title">
                    <h3>现在预约</h3>
                    <p>免费获取全房装修设计效果图</p>
                </li>
                <li class="f-form">
                    <form class="form" name='feedback' method='post' enctype='multipart/form-data' action="<?=url('index/index')?>">
                        <input type=hidden name=ecmsfrom value="/">
                        <input name='enews' type='hidden' value='AddFeedback'>
                        <input name='title' type='hidden' value='底部固定预约'>
                        <input type=hidden name=bid value=2>
                        <input type=hidden name=laiyuan id=laiyuan>
                        <input type=hidden name=chuangyi id=chuangyi>
                        <input type="text" name="name" class="nickname" id="name" placeholder="请输入您的称呼" />
                        <input type="number" name="mycall" class="phone" id="mycall" placeholder="请输入您的手机号码" />
                        <input type="submit" class="subtn" value="立即预约" />
                    </form>
                </li>
                <li class="colsebtn">
                    <img src="../img/colse01.png" alt="">
                </li>
            </ul>
        </div>
    </div>
     <!-- 侧边栏导航 -->
     <div class="slidebar">
        <ul>
            <li class="slidebar-list">
                <a href="javascript:;">
                    <div><img src="../img/icon-tel.png" alt=""></div>
                    <p>在线咨询</p>
                </a>
            </li>
            <li class="slidebar-list bt show-btn" data-layer="10">
                <div><img src="../img/icon-order.png" alt=""></div>
                <p>预约参观</p>
            </li>
            <li class="slidebar-list bt">
                <a href="/quote/index.html">
                    <div><img src="../img/icon-quote.png" alt=""></div>
                    <p>免费报价</p>
                </a>
            </li>
            <li class="slidebar-list bt code-hover">
                <div><img src="../img/icon-code.png" alt=""></div>
                <p>关注微信</p>
            </li>
            <li class="slidebar-list bt to-top">
                <div><img src="../img/icon-top.png" alt=""></div>
                <p>返回顶部</p>
            </li>
        </ul>
        <div class="code">
            <img src="../img/code.png" alt="">
        </div>
    </div>
    <script src="__PUBLIC__/home/js/jquery.js"></script>
    <script src="__PUBLIC__/home/js/swiper.js"></script>
    <script src="__PUBLIC__/home/js/wow.min.js"></script>
    <script src="__PUBLIC__/home/js/fdx.js"></script>
    <script src="__PUBLIC__/home/js/index.js"></script>
    <script src="__PUBLIC__/home/js/form.js"></script>
    <script src="__PUBLIC__/home/js/urlparams.js"></script>
</body>

</html>