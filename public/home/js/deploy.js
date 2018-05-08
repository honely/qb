
var c_width = document.documentElement.clientWidth;
var user_width = (c_width - 1200) * 0.5;
$('.tab-btn').width(user_width);

// ********************************01
var example1 = new Mg({
	reference: 'example1',
	click: {
		activated: [ 0 ],
		cycle: true,
		multiMode: 'centered',
		interactive: true,
		multiLess: 2,
		multiPlus: 2,
		auto: 3000,
		autoSlow: 5000
	}
});
example1.click.onEvent = function() {
	$('#' + this.reference + '-item-' + this.deactivated).removeClass('active');
	$('#' + this.reference + '-item-' + this.activated).addClass('active');
	$('[id^="' + this.reference + '-item-"]').css('display', 'none');
	//
	var arr = this.multiActivated;
	for (var i = 0; i < arr.length; i++) {
		var depth = Math.abs(example1.mapDistanceReverse(this.multiPlus, i, arr.length, 0)); // Parameters: center, num, max, min
		var path = $('#' + this.reference + '-item-' + arr[i]);
		path.css('position', 'absolute').css('z-index', depth);
		path.css('display', 'block').css('position', 'absolute').animate(
			{
				left: (i - 2) * 1200 + user_width + 'px'
			},
			500
		);
	}
};
example1.init();
// **********************02
var example2 = new Mg({
	reference: 'example2',
	click: {
		activated: [ 0 ],
		cycle: true,
		multiMode: 'centered',
		interactive: true,
		multiLess: 2,
		multiPlus: 2,
		auto: 3000,
		autoSlow: 5000
	}
});
example2.click.onEvent = function() {
	$('#' + this.reference + '-item-' + this.deactivated).removeClass('active');
	$('#' + this.reference + '-item-' + this.activated).addClass('active');
	$('[id^="' + this.reference + '-item-"]').css('display', 'none');
	//
	var arr = this.multiActivated;
	for (var i = 0; i < arr.length; i++) {
		var depth = Math.abs(example2.mapDistanceReverse(this.multiPlus, i, arr.length, 0)); // Parameters: center, num, max, min
		var path = $('#' + this.reference + '-item-' + arr[i]);
		path.css('position', 'absolute').css('z-index', depth);
		path.css('display', 'block').css('position', 'absolute').animate(
			{
				left: (i - 2) * 1200 + user_width + 'px'
			},
			500
		);
	}
};
example2.init();
// ************************03
var example3 = new Mg({
	reference: 'example3',
	click: {
		activated: [ 0 ],
		cycle: true,
		multiMode: 'centered',
		interactive: true,
		multiLess: 2,
		multiPlus: 2,
		auto: 3000,
		autoSlow: 5000
	}
});
example3.click.onEvent = function() {
	$('#' + this.reference + '-item-' + this.deactivated).removeClass('active');
	$('#' + this.reference + '-item-' + this.activated).addClass('active');
	$('[id^="' + this.reference + '-item-"]').css('display', 'none');
	//
	var arr = this.multiActivated;
	for (var i = 0; i < arr.length; i++) {
		var depth = Math.abs(example3.mapDistanceReverse(this.multiPlus, i, arr.length, 0)); // Parameters: center, num, max, min
		var path = $('#' + this.reference + '-item-' + arr[i]);
		path.css('position', 'absolute').css('z-index', depth);
		path.css('display', 'block').css('position', 'absolute').animate(
			{
				left: (i - 2) * 1200 + user_width + 'px'
			},
			500
		);
	}
};
example3.init();
// *******************04
var example4 = new Mg({
	reference: 'example4',
	click: {
		activated: [ 0 ],
		cycle: true,
		multiMode: 'centered',
		interactive: true,
		multiLess: 2,
		multiPlus: 2,
		auto: 3000,
		autoSlow: 5000
	}
});
example4.click.onEvent = function() {
	$('#' + this.reference + '-item-' + this.deactivated).removeClass('active');
	$('#' + this.reference + '-item-' + this.activated).addClass('active');
	$('[id^="' + this.reference + '-item-"]').css('display', 'none');
	//
	var arr = this.multiActivated;
	for (var i = 0; i < arr.length; i++) {
		var depth = Math.abs(example4.mapDistanceReverse(this.multiPlus, i, arr.length, 0)); // Parameters: center, num, max, min
		var path = $('#' + this.reference + '-item-' + arr[i]);
		path.css('position', 'absolute').css('z-index', depth);
		path.css('display', 'block').css('position', 'absolute').animate(
			{
				left: (i - 2) * 1200 + user_width + 'px'
			},
			500
		);
	}
};
example4.init();
// ***************************05
var example5 = new Mg({
	reference: 'example5',
	click: {
		activated: [ 0 ],
		cycle: true,
		multiMode: 'centered',
		interactive: true,
		multiLess: 2,
		multiPlus: 2,
		auto: 3000,
		autoSlow: 5000
	}
});
example5.click.onEvent = function() {
	$('#' + this.reference + '-item-' + this.deactivated).removeClass('active');
	$('#' + this.reference + '-item-' + this.activated).addClass('active');
	$('[id^="' + this.reference + '-item-"]').css('display', 'none');
	//
	var arr = this.multiActivated;
	for (var i = 0; i < arr.length; i++) {
		var depth = Math.abs(example5.mapDistanceReverse(this.multiPlus, i, arr.length, 0)); // Parameters: center, num, max, min
		var path = $('#' + this.reference + '-item-' + arr[i]);
		path.css('position', 'absolute').css('z-index', depth);
		path.css('display', 'block').css('position', 'absolute').animate(
			{
				left: (i - 2) * 1200 + user_width + 'px'
			},
			500
		);
	}
};
example5.init();