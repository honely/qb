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

// ***************表单显示

$('.visit-btn').click(function() {
	$(this).parents('.btn-group').siblings('.form-wrap1').addClass('show');
});

$('.casebtn').click(function() {
	$(this).parents('.case').siblings('.form-wrap3').addClass('show');
});
$('.orderbtn').click(function() {
	$(this).parents('.valua-group').siblings('.form-wrap4').addClass('show');
});
$('.sub-btn1').click(function() {
	$(this).parents('.server-show').siblings('.form-wrap4').addClass('show');
});
$('.sub-btn2').click(function() {
	$(this).parents('.deploy').siblings('.form-wrap4').addClass('show');
});
$('.de-form-btn').click(function() {
	$(this).parents('.deploy').siblings('.form-wrap2').addClass('show');
});
$('.form-btn1').click(function() {
	$(this).parents('.finish-case').siblings('.form-wrap4').addClass('show');
});
$('.closebtn').click(function() {
	$(this).parents('.form-wrap').removeClass('show');
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
	// var $active = $(this).attr("data-img");
	// $(".acitve").css({background:"url("+$active+") no-repeat center !important;"});
	// $(this).addClass("active").siblings().removeClass("active");

	// console.log();

	$(this).css({ background: 'url(../img/pro-logo1' + ($index + 1) + '.png)' });
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
	mousewheelControl: true,
	loop: true,
	autoplay:2500,
});
