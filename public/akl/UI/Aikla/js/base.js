$(function() {
	//menu效果
	var $eMenu, $oMenu;
	$('#hd .menu .fstMenu').on('mouseenter', function() {
		$(this).find('p:nth-child(1)').animateCss('bounce');
		$(this).find('p:nth-child(2)').animateCss('fadeInRight');
	});

	//划过效果
	$('#home .case-list .item').on('mouseenter', function() {
		$(this).find('.design').animateCss('bounce');
	});
	$('#note .note-list .item').on('mouseenter', function() {
		$(this).find('.img').animateCss('swing');
	});
	$('#team .team-show .star .item').on('mouseenter', function() {
		$(this).find('.btn').show().animateCss('rollIn');
	});
	$('#team .team-show .star .item').on('mouseleave', function() {
		$(this).find('.btn').fadeOut();
	});

	//全屏轮播
	$('.b-slide').slide({
		autoPlay: true,
		delayTime: 800,
		interTime: 5000,
		effect: 'fade',
	});

	//优惠展示
	$('.sale-roll').slide({
		autoPlay: true,
		delayTime: 400,
		interTime: 8000,
		effect: 'top',
	});

	//团队
	$('.team-roll').slide({
		autoPlay: true,
		delayTime: 600,
		interTime: 6000,
		effect: 'left',
	});
	//团队成员
	$('.member-roll').slide({
		autoPlay: true,
		effect: 'leftMarquee',
		vis: 4,
		interTime: 50,
		trigger: "click"
	});

});

$(function() {
	window.onload = function() {
		var img = $('#article .content img');
		for(n = 0; n < img.length; n++) {
			var that = $(img[n]);
			var src = that.prop('src');
			that.attr('layer-src', src);
			console.log(src);
		}
	}
	$('#article .content img').on('click', function() {
		if($(this).hasClass('face') == false) {
			layer.photos({
				photos: '#article .content'
			});
		}
	});
});