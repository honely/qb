// 轮播
var swiper = new Swiper('#banner', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	paginationClickable: true,
	autoplay: 2500,
	autoplayDisableOnInteraction: false,
	loop: true
});

// ********************
var wow = new WOW({
	boxClass: 'wow',
	animateClass: 'animated',
	offset: 0,
	mobile: false,
	live: true
});
wow.init();

// 视频播放

var myVideo = document.getElementById('video');
var player = document.getElementById('player');
function playVid() {
	myVideo.play();
}
function pauseVid() {
	myVideo.pause();
}
$('#player').click(function() {
	playVid();
	$(this).hide();
});
$('#video').click(function() {
	pauseVid();
	$('#player').show();
});


// ******************************

var c_width = document.documentElement.clientWidth;
var user_width = (c_width - 1200) * 0.5;
$('.tab-btn').width(user_width);


// ****************
var p_widht = (user_width - 52) * 0.5;
$('.game_pic_icon_r').css({
	right: p_widht
});
$('.game_pic_icon_l').css({ left: p_widht });
$('.ban-group:not(:first)').hide();
// 行业资讯
var swiper = new Swiper('#news', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	paginationClickable: true,
	autoplay: 5000,
	autoplayDisableOnInteraction: false,
	loop: true
});
// ***********固定表单

$('.colsebtn').click(function() {
	$(this).parents('.float-box').animate(
		{
			left: '-100%'
		},
		500
	);
});
$(document).scroll(function() {
	var mytop = $(document).scrollTop();
	if (mytop > 4300) {
		$('.float-box').animate(
			{
				left: '-100%'
			},
			500
		);
	}
});

// ***********************定制整装*******************
$('.deploy-con-list:not(:first)').hide();
$('.tab-lists').click(function() {
	var $index = $(this).index();
	$(this).addClass('cur').siblings().removeClass('cur');
	$(this).parents('.deploy-tab-box').siblings('.deploy-con-show').children().eq($index).show().siblings().hide();
});
$('.tab-list').click(function() {
  var $index = $(this).index();
  $(this).addClass("tab-list-active").siblings().removeClass("tab-list-active");
	$(this).parents('.deploy-tab').siblings('.carousel-group').children('.ban-group').eq($index).show().siblings().hide();
});
// 全球集采
$('.c-img-box:not(:first)').hide();
$('.product-depict-list:not(:first)').hide();

$('.pro-logo-show li').click(function() {
	var $index = $(this).index();
	$(this).children(".logo-show").hide().siblings(".logo-hide").show();
	$(this).siblings().children(".logo-show").show().siblings(".logo-hide").hide();
	$(this)
		.parents('.collect-show-rt')
		.children('.product-depict')
		.children('.product-depict-list')
		.eq($index)
		.show()
		.siblings()
		.hide();
	$(this)
		.parents('.collect-show-rt')
		.siblings('.collect-product')
		.children('.c-img-box')
		.eq($index)
		.show()
		.siblings()
		.hide();
});

//****************免费设计页面*************************** 

$(".design-con-list").mouseover(function(){
	$(this).addClass("show-big").siblings().removeClass("show-big");
})



// 案例列表页


$(".tab-show:not(:first)").hide();
$(".tab_list").click(function(){
	var $index=$(this).index();
	$(this).children("div").addClass("actived");
	$(this).siblings().children("div").removeClass("actived");
	$(this).parents(".tab-box").siblings(".case-content").children(".tabs").children(".tab-show").eq($index).show();
	$(this).parents(".tab-box").siblings(".case-content").children(".tabs").children(".tab-show").eq($index).siblings().hide();
})

$('.de-form-btn1').click(function() {
	$(this).parents('.case-group').siblings('.form-wrap-case').addClass('show');
});




// *****************************案例详情
var swiper = new Swiper('#swiper-container', {
	pagination: '.swiper-pagination',
	direction: 'vertical',
	slidesPerView: 3,
	paginationClickable: true,
	spaceBetween: 10,
	simulateTouch : false,
	loop: true,
	autoplay:2500,
});


// *********装修资讯**************

var swiper = new Swiper('#swiper-container3', {
	pagination: '.swiper-pagination',
	direction: 'vertical',
	slidesPerView: 3,
	paginationClickable: true,
	spaceBetween: 10,
	simulateTouch : false,
	loop: true,
	autoplay:2500,
});

$(".tab-list-con:not(:first)").hide();
$(".tabs").click(function(){
	var $index=$(this).index();
	$(this).addClass("actives").siblings().removeClass("actives");
	$(this).parents(".tab-control").siblings(".tab-boxs").children(".tab-list-con").eq($index).show().siblings().hide();
})

$(".msgimg:not(:first)").hide();
$(".info-case").mouseover(function(){
	$(this).siblings(".msgimg").show();
	$(this).parents(".info-case-show").siblings(".info-case-show").children(".msgimg").hide();
})


// ***************************************
var m=true;
var num=0
$(".like").click(function(){
	
	if(m == true){
		$(".click_like").attr("src","../img/zan02.png");
		$(".click_like").parents(".like").css({"border":"1px solid #FF934D"});
		$(".click_like").siblings(".likenum").css({"color":"#FF934D"})
		num++;
		$(".likenum").text(num);
		m=false;
	}else{
		$(".click_like").attr("src","../img/zan01.png");
		$(".click_like").parents(".like").css({"border":"1px solid #ddd"});
		$(".click_like").siblings(".likenum").css({"color":"#ddd"})
		num--;
		$(".likenum").text(num);
		m=true;
	}
})

$(".like").hover(function(){
	$(".click_like").attr("src","../img/zan02.png");
		$(".click_like").parents(".like").css({"border":"1px solid #FF934D"});
		$(".click_like").siblings(".likenum").css({"color":"#FF934D"})
},function(){

	$(".click_like").attr("src","../img/zan01.png");
	$(".click_like").parents(".like").css({"border":"1px solid #ddd"});
	$(".click_like").siblings(".likenum").css({"color":"#ddd"})

}
)

// ***************************

// 随机数................
var t = 200; //在这里设置刷新时间，单位是毫秒，比如1秒钟就是1000
var min = 100; //生成的最小的数字，比如200
var max = 500000; //生成的最大的数字，比如500
var maxx = 5000;


window.onload = function() {
	Refreshs();
	setInterval('Refreshs();', t);
};
function Refreshs() {
	document.getElementById('prices').innerHTML = parseInt(Math.random() * (max - min + 1) + min);
	document.getElementById('prices1').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('prices2').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('prices3').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('prices4').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
}



// *************************

window._bd_share_config = {
	common: {
		bdSnsKey: {},
		bdText: '',
		bdMini: '1',
		bdMiniList: false,
		bdPic: '',
		bdStyle: '1',
		bdSize: '16'
	},
	share: {}
};
with (document)
	(0)[
		((getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
			'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5))
	];



	// **************

	$(".code-hover").hover(function(){
		$(".code img").animate(
			{
				left:"0"
			},500
		)
	},function(){
		$(".code img").animate(
			{
				left:"130px"
			}
		)
	}
)

$(".to-top").click(function(){
	var top=0;
	$("html,body").animate({scrollTop:top},500);
})
$(".slidebar").hide();
$(document).scroll(function() {
	var mytop = $(document).scrollTop();
	if (mytop < 300) {
		$(".slidebar").fadeOut();
	}else{
		$(".slidebar").fadeIn();
	}
});


$(".to-down").click(function(){
	var top=1000;
	$("html,body").animate({scrollTop:top},500);
})