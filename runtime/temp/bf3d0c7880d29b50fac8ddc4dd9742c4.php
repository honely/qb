<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\qbl\public/../application/xian\view\index\design.html";i:1526034886;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<link rel="stylesheet" href="../css/pc-style.css"/>
<link rel="stylesheet" href="../css/all-style.css"/>
<script src="../js/jquery.js"></script>
<script src="../js/all-swiper.js"></script>
<script type="text/javascript" src="../js/slide.min.js"></script>
<title>0元设计_0元设计 - 陕西千百炼装饰</title>
<meta name="keywords" content="西安装修公司,西安整体家装,西安装饰公司,西安家装公司,西安家装,西安装修,西安装饰">
<meta name="description" content="陕西千百炼装饰专业从事高品质整体家装,集家装设计、施工、基材、主材、软饰设计为一体,拥有西安唯一整体豪装工厂店,是业内领先的一站式家装服务平台!热线:400-029-1986">
<!--此页面所需js、css-->
<link rel="icon" href="../img/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/all-style.css"/>
<link rel="stylesheet" href="../css/all-index.css"/>
<link rel="stylesheet" href="../css/addHover.css"/>
<script type="text/javascript" src="../js/all-b.js"></script>
<script type="text/javascript" src="../layer/layer.js"></script>
</head>
<body>
<div class="Wrap Header">
	<div class="Column" style="width:100%">
		<div style="width:1190px;margin:0 auto;">
			<div style="width:1190px;position: relative; ">
				<style>
				.select-hover:hover{
					border:1px solid #e6e3e3 !important
				}
				</style>
  <div class="select-hover" style="position: absolute;background: #fff;top:35px;left:120px;border:1px solid #fff;">
                        <span style="position:relative; display: block;width:45px;text-align:left;padding-left:15px;color:#333;cursor: pointer;">西安<i style="position: absolute;right:0;top:2px"><img src="../img/select_arrow.png" style="width:20px;"></i></span>
                        <ul style="display: none;overflow: hidden; width:60px;text-align:center">
                            <li><a style="color:#666" href="http://baoji.qblzs.com.cn">宝鸡</a></li>
                            <li><a style="color:#666" href="http://guiyang.qblzs.com.cn">贵阳</a></li>
                            <li><a style="color:#666" href="http://wuhan.qblzs.com.cn">武汉</a></li>
                            
                        </ul>
                    </div>
				<script>
				$('.select-hover').hover(function(){
					$(this).find('ul').stop().slideDown()
				},function(){
					$(this).find('ul').stop().slideUp()
				})
			</script>
			</div>
			<div class="tel fr">
				<i>
				<img src="../img/c1.png"/>
				</i>
				<h5>装修咨询电话</h5>
				<h6>400-029-1986</h6>
				<h6>design</h6>
			</div>
			<a href="/" class="logo fl"><img src="../img/46cfc98acb82a9af.jpg" alt="陕西千百炼装饰"/></a>
			<div class="Nav" id="HeaderNav">
				<ul class="inline">
					<li class="parLi">
						<a href="<?=url('index/index')?>" class="par" title="网站首页">
							<em>网站首页</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('index/product')?>" class="par" title="定制整装">
							<em>定制整装 </em>
						</a>
					</li>
					<li class="parLi cur">
						<a href="<?=url('index/design')?>" class="par" title="免费设计">
							<em>免费设计</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('index/quote')?>" class="par" title="智能报价">
							<em>智能报价</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('index/process')?>" class="par" title="德系工艺">
							<em>德系工艺</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('index/example')?>" class="par" title="实景样板间">
							<em>实景样板间</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('index/about')?>" class="par" title="关于我们">
							<em>关于我们</em>
						</a>
						<div class="sons">
							<div class="Column">
								<ol class="inline" style="margin-right:-460px">
									<li class="current">
										<a href="<?=url('index/about')?>" class="son" title="公司简介">
											<div class="img" 1 9>
												<div class="imgIco" style="background-position: -0px -320px;">
												</div>
											</div>
											<p>
												公司简介
											</p>
										</a>
									</li>
									<li>
										<a href="<?=url('index/contact')?>" class="son" title="联系我们">
											<div class="img">
												<div class="imgIco" style="background-position: -120px -320px;">
												</div>
											</div>
											<p>
												联系我们
											</p>
										</a>
									</li>
								</ol>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="l-yuan">
	<div class="l-banner">
		<div class="w1200">
			<div class="l-from">
				<h3>抢领免费设计名额</h3>
					<form name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
						<input type="hidden" name="ecmsfrom" value="/">
						<input name='enews' type='hidden' value='AddFeedback'>
						<input name='title' type='hidden' value='免费设计头部'>
						<input type="hidden" name="bid" value="2">
						<input type="hidden" name="laiyuan" id="laiyuan">
						<input type="hidden" name="chuangyi" id="chuangyi">
						<label><input type="text" placeholder="请输入您的称呼" name="name" class="name-ch"/></label>
						<label><input type="number" placeholder="请输入您的房屋面积" name="mianji" class="name-mj"/></label>
						<label><input type="number" placeholder="请输入您的手机号码" name="mycall" class="name-dh"/></label>
						<button class="l-btn" type="submit">免费获取全屋设计方案</button>
					</form>
					<style>.l-btn:hover{background:#ad1010;}</style>
                        
				</div>
				<div style="clear:both">
				</div>
			</div>
		</div>
	</div>
	<div class="l-y-con">
		<!--服务流程-->
		<div class="l-fwlc w1200">
			<h4>服务流程</h4>
			<h5>SERVICEFLOW</h5>
			<ul>
				<li>
				<span>01</span>
				<i class="fr"><img src="../img/icon1.png"/></i>
				<font class="fl">电话安排<br/>量房时间</font>
				</li>
				<li>
				<span>02</span>
				<i class="fr"><img src="../img/icon2.png"/></i>
				<font class="fl">专业设计<br/>上门量房</font>
				</li>
				<li>
				<span>03</span>
				<i class="fr"><img src="../img/icon3.png"/></i>
				<font class="fl">三个工作日<br/>出设计图</font>
				</li>
				<li>
				<span>04</span>
				<i class="fr"><img src="../img/icon4.png"/></i>
				<font class="fl">帮您制定<br/>预算计划</font>
				</li>
			</ul>
		</div>
		<!--0元享平面布局设计-->
		<div class="l-lysj">
			<h4>0元享价值3000元平面布局设计</h4>
			<h5>FREE SERVICE</h5>
			<div class="l-lycon">
				<div class="w1200">
					<ul>
						<li>
						<span>
						<img src="../img/free1.png"/>
						</span>
						<p>
								第一步 户型图
						</p>
						</li>
						<li class="odd">
						<span>
						<img src="../img/free2.png"/>
						</span>
						<p>
								第二步 效果图
						</p>
						</li>
						<li class="ldd">
						<span>
						<img src="../img/free3.png"/>
						</span>
						<p>
								第三步 实景图
						</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="l-db-the">
			<!--定制设计图-->
			<div class="l-dzsjt">
				<h4>定制设计图</h4>
				<h5>FREE SERVICE</h5>
				<div class="l-dbtow w1200">
					<ul>
						<li class="fl">
						<span></span>
						<img src="../img/free4.png"/>
						<p>
						根据您的户型+风格+预算定制设计图
						</p>
						</li>
						<li class="fr">
						<span></span>
						<img src="../img/free5.png"/>
						<p>
						效果不满意？免费修改不用愁
						</p>
						</li>
						<div style="clear: both;">
						</div>
					</ul>
				</div>
			</div>
			<div class="l-zyshjydy">
				<h4>专业设计师一对一服务</h4>
				<h5>FREE SERVICE</h5>
				<div class="banner-lyuan ">
					<div id="slide3d" class="slide-carousel slide-3d">
						<ul class="item-list clearfix">
							<li class="item0">
							<div class="item-content">
								<a href="javascript:void(0);" class="shjs-tc">
			                        	预约TA设计
								</a>
								<img class="cover-img" src="../img/wn.jpg" alt="">
							</div>
							</li>
							<li class="item1">
							<div class="item-content">
								<a href="javascript:void(0);" class="shjs-tc">
			                        	预约TA设计
								</a>
								<img class="cover-img" src="../img/wjt.jpg" alt="">
							</div>
							</li>
							<li class="item2">
							<div class="item-content">
								<a href="javascript:void(0);" class="shjs-tc">
			                        	预约TA设计
								</a>
								<img class="cover-img" src="../img/ytq.jpg" alt="">
							</div>
							</li>
							<li class="item3">
							<div class="item-content">
								<a href="javascript:void(0);" class="shjs-tc">
			                        	预约TA设计
								</a>
								<img class="cover-img" src="../img/fl.jpg" alt="">
							</div>
							</li>
						</ul>
						<!--indicators-->
						<div class="indicator-list">
							<a href="javascript:void(0);" data-slide-index="0" class="selected"></a>
							<a href="javascript:void(0);" data-slide-index="1"></a>
							<a href="javascript:void(0);" data-slide-index="2"></a>
							<a href="javascript:void(0);" data-slide-index="3"></a>
						</div>
						<!--controls-->
						<div class="controls">
							<a class="item-prev glyphicon glyphicon-menu-left" href="javascript:void(0);" style="padding-left:10px;width: 30px;"><</a>
							<a class="item-next glyphicon glyphicon-menu-right" href="javascript:void(0);" style="padding-left:10px;width: 30px;">></a>
						</div>
					</div>
				</div>
			</div>
			<!--申请送两项服务-->
			<div class="l-lx-fw">
				<h4>现在申请送两项增值服务</h4>
				<h5>FREE SERVICE</h5>
				<div class="l-lxcon w1200">
					<div class="fl">
						<h6>服务1：免费量房</h6>
						<div class="fl">
							<p>
								<img src="../img/r1.png"/>
								<font>
									免费量房
								</font>
							</p>
						</div>
						<div class="fr">
							<p>
								<img src="../img/r2.png"/>
								<font>
									1cm以下误差
								</font>
							</p>
							<p>
								<img src="../img/r3.png"/>
								<font>
									70项指标
								</font>
							</p>
						</div>
					</div>
					<div class="fr">
						<h6>服务2：免费规划</h6>
						<p class="l-dz-p">
							<img src="../img/r4.png"/>
							<font>
							<b>省30%装修费</b>
							<i>设计师为您量身定制</i>
							<b style="margin-top:10px">涵盖200多项预算指标</b>
							<i>数据综合行业报价，祝您了解装修行情</i>
							</font>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Wrap FooterWrap">
		<div class="Column Footer f55">
			<div class="lBase fl">
				<a href="/" class="logo fl"><img src="../img//78d04a034e3324c8.png" alt="陕西千百炼装饰"/></a>
				<div class="banner fl">
					<img src="../img//5e6587fea19c9274.png" alt="陕西千百炼装饰"/>
				</div>
				<div class="base ove">
					<p>
					千百炼装饰集团 COPYRIGHT (C) 2018 ALL RIGHTS RESERVED&nbsp;
						<a style="color:#000;" href="http://www.miitbeian.gov.cn/" target="_blank">陕ICP备17003733号</a>&nbsp;
					</p>
					<p>
					公司地址：陕西省西安市未央区辛家庙地铁C口千百炼&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="http://xian.qblzs.com.cn/mobile/" target="_blank">手机版</a>&nbsp;|&nbsp;<a href="<?=url('index/contact')?>">联系我们</a><!--&nbsp;|&nbsp;<a href="sitemap.html">网站地图</a>&nbsp;|&nbsp;-->
						<script src="https://s13.cnzz.com/z_stat.php?id=1273005258&web_id=1273005258" language="JavaScript"></script>
					</p>
				</div>
			</div>
			<div class="rContact fr">
				<div class="qcode fr">
					<img src="../img/382464d5af5e9d0f.png" alt="千百炼装饰"/>
				</div>
				<div class="tel tr">
					<img src="../img/fc21f14357f2e303.png"/>
				</div>
			</div>
		</div>
	</div>
	<div class="layer-tc" style="display: none;">
		<form name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
			<input type="hidden" name="ecmsfrom" value="/">
			<input name='enews' type='hidden' value='AddFeedback'>
			<input name='title' type='hidden' value='一对一设计'>
			<input type="hidden" name="bid" value="2">
			<input type="hidden" name="laiyuan" id="laiyuan">
			<input type="hidden" name="chuangyi" id="chuangyi">
			<label><input class="name-ch" name="name" type="text" placeholder="请输入您的姓名"/></label>
			<label><input class="name-dh" name="mycall" type="number" placeholder="请输入您的手机"/></label>
			<button class="lay-btn">点击预约</button>
		</form>
	</div>
	<!-- 底部浮动表单 -->
<div class="float-box">
        <div class="form-fixed">
            <ul>
                <li class="f-lt"><img src="../img/hand.png" alt=""></li>
                <li class="f-title">
                    <h3>现在预约</h3>
                    <p>免费获取全房装修设计效果图</p>
                </li>
                <li class="f-form">
                    <form class="form" name='feedback' method='post' enctype='multipart/form-data' action='/e/enews/index.php'>
                        <input type=hidden name=ecmsfrom value="/"> 
                        <input name='enews' type='hidden' value='AddFeedback'>
                        <input name='title' type='hidden' value='底部固定预约'> 
                        <input type=hidden name=bid value=2> 
                        <input type=hidden name=laiyuan id=laiyuan>                   
                        <input type=hidden name=chuangyi id=chuangyi>
                        <input type="text" name="name" class="nickname" id="name" placeholder="请输入您的称呼"/>
                        <input type="number" name="mycall" class="phone" id="mycall" placeholder="请输入您的手机号码"/>
                        <input type="submit" class="subtn" value="立即预约"/>
                    </form>   
                </li>
                <li class="colsebtn"><img src="../img/colse01.png" alt=""></li>
            </ul>
        </div>
		<style>
		
		:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #808080;
    opacity: 1;
  }
  ::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #808080;
    opacity: 1;
  }
  input:-ms-input-placeholder {
    color: #808080;
    opacity: 1;
  }
  input::-webkit-input-placeholder {
    color: #808080;
    opacity: 1;
  }
  input,
  select,
  button {
    outline: none;
    background: none;
  }
  a {
    text-decoration: none;
  }
  em,
  i {
    font-style: normal;
  }
  ul li,
  ul ol {
    list-style: none;
  }
  input,
  select,
  button {
    -webkit-appearance: none;
  }
  input[type=number] {
    -moz-appearance: textfield;
  }
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
.float-box {
    box-sizing: border-box;
    width: 100%;
    height: 90px;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.5);
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: 66;
	
  }
  .float-box .form-fixed {
    width: 1200px;
    height: 100;
    margin: 0 auto;
    padding: 0 30px;
  }
  .float-box .f-lt {
    width: 100px;
    height: 36px;
    float: left;
    margin-top: 24px;
  }
  .float-box .f-lt img {
    animation: movebl3 1s linear infinite;
  }
  .float-box .f-title {
    width: 260px;
    float: left;
    color: #fff;
  }
  .float-box .f-title h3 {
    font-size: 26px;
    font-weight: normal;
    line-height: 40px;
    margin-top: 15px;
  }
  .float-box .f-title p {
    font-size: 14px;
  }
  .float-box .f-form {
    width: 700px;
    float: left;
    margin-left: 30px;
    margin-top: 24px;
  }
  .float-box .colsebtn {
    width: 19px;
    height: 18px;
    float: right;
    cursor: pointer;
    margin-top: 24px;
  }
  .float-box .nickname {
    width: 182px;
    height: 50px;
    background: #fff;
    border: none;
    outline: none;
    padding-left: 15px;
    border-radius: 5px;
  }
  .float-box .phone {
    width: 292px;
    height: 50px;
    background: #fff;
    border: none;
    outline: none;
    padding-left: 15px;
    margin-left: 5px;
    margin-right: 5px;
    border-radius: 5px;
  }
  .float-box .subtn {
    width: 162px;
    height: 50px;
    color: #fff;
    background: #c70000;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
  }
  .float-box .subtn:hover {
    background: #b70000;
  }
  @keyframes movebl3 {
    0% {
      transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      /* Internet Explorer */
      -moz-transform: translate(0, 0);
      /* Firefox */
      -webkit-transform: translate(0, 0);
      /* Safari 和 Chrome */
      -o-transform: translate(0, 0);
      /* Opera */
    }
    50% {
      transform: translate(10px, 0);
      -ms-transform: translate(10px, 0);
      /* Internet Explorer */
      -moz-transform: translate(10px, 0);
      /* Firefox */
      -webkit-transform: translate(10px, 0);
      /* Safari 和 Chrome */
      -o-transform: translate(10px, 0);
      /* Opera */
    }
    0% {
      transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      /* Internet Explorer */
      -moz-transform: translate(0, 0);
      /* Firefox */
      -webkit-transform: translate(0, 0);
      /* Safari 和 Chrome */
      -o-transform: translate(0, 0);
      /* Opera */
    }
  }
  
		
		</style>
		<script type="text/javascript">
		$('.colsebtn').click(function() {
			$(this).parents('.float-box').animate(
				{
				left: '-100%'
				},
				1000
			);
		});
		
		$('.subtn').click(function(){
	var dh = $(this).parent().find(".phone").val();
	var ch = $(this).parent().find(".nickname").val();
		if (ch =="") {
			alert("请输入您的称呼!");
			return false;
		}
		if (dh =="") {
			alert("请输入您的电话!");
			return false;
		}
		if(dh.length !=11 || dh.substring(0,1)!=1  ){
			alert("输入的手机号码格式错误！");
			$(".name-dh").focus();
			return false;
		}
	})
		
		</script>
    </div>     

	<script>
	 $('.shjs-tc').click(function(){
		layer.open({
		  type: 1,
		  title:'预约设计',
		  area: ['420px'], //宽高
		  content: $('.layer-tc')
		});
	})
	$(function(){
 	$('#slide3d').slideCarsousel({slideType:'3d',indicatorEvent:'click'});
		$('.l-btn').click(function(){
			var ch = $(this).parent().find(".name-ch").val();
			var mj = $(this).parent().find(".name-mj").val();
			var dh = $(this).parent().find(".name-dh").val();
			 if (ch =="") {
		        alert("请输入您的姓名!");
		        return false;
		    }
			 if (dh =="") {
		        alert("请输入您的电话!");
		        return false;
		    }
			if (mj == "") {
		        alert("请输入面积！");
		        return false;
		    }
		    if(dh.length !=11 || dh.substring(0,1)!=1  ){
				alert("输入的手机号码错误！");
				$(".name-dh").focus();
				return false;
		    }
		})
		$('.lay-btn').click(function(){
			var ch = $(this).parent().find(".name-ch").val();
			var mj = $(this).parent().find(".name-xq").val();
			var dh = $(this).parent().find(".name-dh").val();
			 if (ch =="") {
		        alert("请输入您的姓名!");
		        return false;
		    }
			 if (dh =="") {
		        alert("请输入您的电话!");
		        return false;
		    }
			if (mj == "") {
		        alert("请输入您的房屋面积！");
		        return false;
		    }
		    if(dh.length !=11 || dh.substring(0,1)!=1  ){
				alert("输入的手机号码错误！");
				$(".name-dh").focus();
				return false;
		    }
		})
    });
	</script>
	<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10151974/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
	    <script>  
        function getUrlParms(name){  
            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");  
            var r = window.location.search.substr(1).match(reg);  
            if(r!=null)  
                return unescape(r[2]);  
                return null;  
        }  
        document.getElementById("laiyuan").value=getUrlParms("laiyuan");  
        document.getElementById("chuangyi").value=getUrlParms("chuangyi");  
    </script>  
	<script>
  	var _mtac = {};
  	(function() {
  		var mta = document.createElement("script");
  		mta.src = "http://pingjs.qq.com/h5/stats.js?v2.0.4";
  		mta.setAttribute("name", "MTAH5");
  		mta.setAttribute("sid", "500512924");

  		var s = document.getElementsByTagName("script")[0];
  		s.parentNode.insertBefore(mta, s);
  	})();
</script>
	</body>
	</html>