<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\qbl\public/../application/xian\view\xian\activity.html";i:1526091093;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>西安活动页</title>
<link rel="icon" href="__XIAN__/img/favicon.ico">
<link rel="stylesheet" href="__XIAN__/static/css/style.css">
 
<link rel="stylesheet" href="__XIAN__/static/css/acti.css">

<link rel="stylesheet" type="text/css" href="__XIAN__/css/all-style.css"/>
<link rel="stylesheet" href="__XIAN__/css/all-index.css"/>
<script src="__XIAN__/js/jquery.js"></script>
<script src="__XIAN__/js/all-b.js"></script>

<script src="__XIAN__/js/wow.min.js"></script>
<link rel="stylesheet" href="__XIAN__/static/css/animate.min.css">
</head>
<body>
<!--顶部-->
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
                        <span style="position:relative; display: block;width:45px;text-align:left;padding-left:15px;color:#333;cursor: pointer;">西安<i style="position: absolute;right:0;top:2px"><img src="__XIAN__/img/select_arrow.png" style="width:20px;"></i></span>
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
				<img src="__XIAN__/img/c1.png"/>
				</i>
				<h5>装修咨询电话</h5>
				<h6>400-029-1986</h6>
			</div>
			<a href="<?=url('xian/index')?>" class="logo fl"><img src="__XIAN__/img/46cfc98acb82a9af.jpg" alt="陕西千百炼装饰"/></a>
			<div class="Nav" id="HeaderNav">
				<ul class="inline">
					<li class="cur">
						<a href="<?=url('xian/index')?>" class="par" title="网站首页">
							<em>网站首页</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/product')?>" class="par" title="定制整装">
							<em>定制整装 </em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/design')?>" class="par" title="免费设计">
							<em>免费设计</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/quote')?>" class="par" title="智能报价">
							<em>智能报价</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/process')?>" class="par" title="德系工艺">
							<em>德系工艺</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/example')?>" class="par" title="实景样板间">
							<em>实景样板间</em>
						</a>
					</li>
					<li class="parLi">
						<a href="<?=url('xian/about')?>" class="par" title="关于我们">
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
<!--活动banner-->
<!--活动banner-->
<div class="acti-banner">
	 <div class="w1200">
		 	<img src="__XIAN__/static/images/at1.png" class="wow slideInDown mart30" data-wow-duration="2s" data-wow-delay="0.2s">
		 	<img src="__XIAN__/static/images/at4.png" class="wow slideInUp rockte" data-wow-duration="2s" data-wow-delay="0.2s"/>
		 	<span class="wow bounceInRight time-span" data-wow-duration="2s" data-wow-delay="1s">
		 		活动时间：4月9日-22日
		 	</span>
		 	<div style="clear:both"></div>
		 	<img src="__XIAN__/static/images/at3.png" class="wow bounceInUp mfjd-bt" data-wow-duration="1s" data-wow-delay="1.5s" />
	 </div>
</div>

<div class="acti-shih">
	<!--领券更实惠-->
	<div class="w1200 lq-yh">
		<span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
			<img src="__XIAN__/static/images/lq.png" />
		</span>
		<p>
			<span class="wow fadeInDown ac-yhq1" data-wow-duration="1.5s" data-wow-delay="1s">
				<img src="__XIAN__/static/images/lq1.jpg" />
				<font>按户型图免费接店</font>
			</span>
			<span class="wow fadeInDown ac-yhq2" data-wow-duration="1.5s" data-wow-delay="1s">
				<img src="__XIAN__/static/images/lq2.jpg" />
				<font>线上预约后可享</font>
			</span>
			<span class="wow fadeInDown ac-yhq3" data-wow-duration="1.5s" data-wow-delay="1s">
				<img src="__XIAN__/static/images/lq3.jpg" />
				<font>定金满5000元可用</font>
			</span>
		</p>
	</div>
	<!--感恩回馈礼-->
	<div class="ge-hkl w1200">
		<h5 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="10">
			<img src="__XIAN__/static/images/1.png"/>
		</h5>
		<p>
			<span  class="fl wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">
				<img src="__XIAN__/static/images/3.png" />
				<br/>
				<font class="ac-more">
						立即预约
				</font>
			</span>
			<span   class="fr wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">
				<img src="__XIAN__/static/images/4.png" />
			</span>
		</p>
	</div>
	<!--感恩家居礼-->
	<div class="ge-hkl w1200">
		<h5 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="10"> 
			<img src="__XIAN__/static/images/2.png"/>
		</h5>
		<p>
			<span  class="fl wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">
				<img src="__XIAN__/static/images/32.jpg" />
				<br/>
				<font class="ac-more">
						立即预约
				</font>
			</span>
			<span class="fr wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">
				<img src="__XIAN__/static/images/33.png" />
			</span>
		</p>
	</div>
</div>

<!--底部6块-->
<div class="acti-six">
	<div class="w1200">
		<p>
		<span class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/6.png" />
			<font class="ac-more">
				立即预约
			</font>
		</span>
		<span class=" wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/7.png" />
			<font class="ac-more">
				立即预约
			</font>
		</span>
		<b style="clear: both;"></b>
		<font class="fr wow bounceInUp bot-dz" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="10">
			<img src="__XIAN__/static/images/8.png" />
			 
		</font>
	</p>
	<p>
		<span class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/9.png" />
			<font class="ac-more" style="top:440px">
				立即预约
			</font>
		</span>
		<span class=" wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/10.png" />
			<font class="ac-more" style="top:440px">
				立即预约
			</font>
		</span>
		<b style="clear: both;"></b>
		<font class="fr wow bounceInUp bot-dz" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="10" style="bottom:15px">
			<img src="__XIAN__/static/images/8.png" />
			
		</font>
	</p>
	<p>
		<span class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/11.png" />
			<font class="ac-more" style="top:410px"> 
				立即预约
			</font>
		</span>
		<span class=" wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
			<img src="__XIAN__/static/images/12.png" />
			<font class="ac-more">
				立即预约
			</font>
		</span>
		<b style="clear: both;"></b>
		<font class="fr wow bounceInUp bot-dz" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="10" style="bottom: 20px;">
			<img src="__XIAN__/static/images/8.png" />
		</font>
	</p>
	</div>
	
</div>
<!--公共底部-->
<div class="Wrap FooterWrap">
	<div class="Column Footer f55">
		<div class="lBase fl">
			<a href="<?php echo '<?'; ?>
url=('xian/index')?>" class="logo fl"><img src="__XIAN__/img/78d04a034e3324c8.png" alt="陕西千百炼装饰"/></a>
			<div class="banner fl">
				<img src="__XIAN__/img/5e6587fea19c9274.png" alt="陕西千百炼装饰"/>
			</div>
			<div class="base ove">
				<p>
					千百炼装饰集团 COPYRIGHT (C) 2018 ALL RIGHTS RESERVED&nbsp;
					<a style="color:#000;" href="http://www.miitbeian.gov.cn/" target="_blank">陕ICP备17003733号</a>&nbsp;
				</p>
				<p>
					公司地址：陕西省西安市未央区辛家庙地铁C口千百炼&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="http://xian.qblzs.com.cn/mobile/" target="_blank">手机版</a>&nbsp;|&nbsp;<a href="<?=url('xian/contact')?>">联系我们</a><!--&nbsp;|&nbsp;<a href="sitemap.html">网站地图</a>&nbsp;|&nbsp;-->
					<script src="https://s13.cnzz.com/z_stat.php?id=1273005258&web_id=1273005258" language="JavaScript"></script>
				</p>
			</div>
		</div>
		<div class="rContact fr">
			<div class="qcode fr">
				<img src="__XIAN__/img/382464d5af5e9d0f.png" alt="千百炼装饰"/>
			</div>
			<div class="tel tr">
				<img src="__XIAN__/img/fc21f14357f2e303.png"/>
			</div>
		</div>
	</div>
</div>

<!-- 底部浮动表单 -->
<div class="float-box">
        <div class="form-fixed">
            <ul>
                <li class="f-lt"><img src="__XIAN__/img/hand.png" alt=""></li>
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
                <li class="colsebtn"><img src="__XIAN__/img/colse01.png" alt=""></li>
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


<!-- 表单验证开始 -->
<script>
    // **************************************
    var wow = new WOW({
		    boxClass: 'wow',
		    animateClass: 'animated',
		    offset: 0,
		    mobile: false,
		    live: true
		});
		wow.init();
    </script>
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
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10151974/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
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