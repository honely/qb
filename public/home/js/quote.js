// 随机数................
var t = 200; //在这里设置刷新时间，单位是毫秒，比如1秒钟就是1000
var min = 100; //生成的最小的数字，比如200
var max = 500000; //生成的最大的数字，比如500
var maxx = 5000;
window.onload = function() {
	Refresh();
	setInterval('Refresh();', t);
};
function Refresh() {
	document.getElementById('price').innerHTML = parseInt(Math.random() * (max - min + 1) + min);
	document.getElementById('price1').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('price2').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('price3').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('price4').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('price5').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
	document.getElementById('price6').innerHTML = parseInt(Math.random() * (maxx - min + 1) + min);
}

//  ******************
var swiper = new Swiper('#swiper-container1', {
	pagination: '.swiper-pagination',
	direction: 'vertical',
	slidesPerView: 2,
	paginationClickable: false,
	spaceBetween: 10,
	mousewheelControl: false,
	simulateTouch : false,
	loop: true,
	autoplay: 2500
});


