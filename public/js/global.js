/**初始化wow动画插件
    data-wow-duration（动画持续时间）
	data-wow-delay（动画延迟时间）
	data-wow-iteration(重复次数) infinite:无限重复
	data-wow-offset 距离开始动画(浏览器底部)
**/
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: true,
		live: true
	});
	wow.init();
}else{
    alert("您的IE浏览器版本低于10.0，请知晓无法正常浏览页面!");
}

// bootstrap响应式导航条(下拉点击改为经过即可出现下拉菜单,添加属性值 data-hover="dropdown")
;(function($, window, undefined) {
    var $allDropdowns = $();
    $.fn.dropdownHover = function(options) {
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function() {
            var $this = $(this).parent(),
                defaults = {
                    delay: 300,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                options = $.extend(true, {}, defaults, options, data),
                timeout;

            $this.hover(function() {
                if(options.instantlyCloseOthers === true)
                    $allDropdowns.removeClass('open');

                window.clearTimeout(timeout);
                $(this).addClass('open');
            }, function() {
                timeout = window.setTimeout(function() {
                    $this.removeClass('open');
                }, options.delay);
            });
        });
    };

    $('[data-hover="dropdown"]').dropdownHover();
})(jQuery, this);

var Ani = {
	aniNew : function(c,t){
		$(c).mouseover(function(){
			var GetWay = $(this).attr('animate-effect'),duration = $(this).attr('animate-duration'),delay = $(this).attr('animate-delay'),style='';
			duration && (style = style + 'animation-duration:'+duration+';-webkit-animation-duration:'+duration+';');
			delay && (style = style + 'animation-delay:'+delay+';-webkit-animation-delay:'+delay+';');
			if(t){
				$(this).addClass(GetWay + ' animated').attr('style',style).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
			}else{
				$(this).addClass(GetWay + ' animated').attr('style',style).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass(GetWay + ' animated').removeAttr('style');
				});
			}	

		});    
	},
	aniAuto : function(ClassName,iteration){
		var GetWay = $(ClassName).attr('animate-effect'),duration = $(ClassName).attr('animate-duration'),delay = $(ClassName).attr('animate-delay'),style='';
		duration && (style = style + 'animation-duration:'+duration+';-webkit-animation-duration:'+duration+';');
		delay && (style = style + 'animation-delay:'+delay+';-webkit-animation-delay:'+delay+';');
		if(iteration){
		    iteration && (style = style + 'animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;');
		}
		$(ClassName).addClass(GetWay + ' animated').attr('style',style);   	    
	}
}


$(function(){
	/* Swiper Animate自定义方法 */
    Ani.aniNew('.aniOne',true);
	Ani.aniNew('.ani');	
	Ani.aniAuto('.aniIter',true);

    /*头部尾巴菜单 */
	$('ul.nav').hoverifyBootnav({
		'duration_effect_on' : 200,
		'duration_effect_off' : 100
	});
	
	$('ul.nav li.dropdown').hover(
	    function(){
	        $(this).find('.dropdown-menu').stop(true, true).delay(100).animate({ 
                height:$(this).find('li').height()*($(this).find('li').length+2)
            }); 
	    },
		function(){
	        $(this).find('.dropdown-menu').stop(true, true).delay(100).animate({ 
                height:0
            });		
		}
	);
	
	/* 头部导航
	$('div.HeadBox li.project').hover(function(){
		var menubox = $(this).find(".xm_menu");
		menubox.show();
		menubox.animate({"width":$(window).width()+'px',"left":'-'+menubox.offset().left+'px'});
	    menubox.stop(true, true).animate({"height":$(window).height()+'px'});
	},function(){
		var menubox = $(this).find(".xm_menu");
	    menubox.stop(true, true).delay(500).animate({"height":0},function(){
		    menubox.css({"width":0,"left":0});
			menubox.hide();
		})
	}); 
	jQuery(".HeadConbox > div.DhTab .nav-pills > li .xm_menu .cbox").slide({effect:"fold"});
	*/


	/* 快商通点击链接 */
    $("a.TalkUrl,a.TalkUrlT,a.TalkUrlR,a.TalkUrlM,div#LxzBg,div.LxzImg").click(function(){
		if(typeof onKST === 'function' ){
			var ClassName = $(this).attr('class');
			//$(this).attr('target','_blank');
			if(ClassName.indexOf("TalkUrlR")>=0){
			    onKST('竞价PC右侧挂窗');
			}else if(ClassName.indexOf("TalkUrlT")>=0){
			    onKST('竞价PC顶部活动');
			}else if(ClassName.indexOf("TalkUrlM")>=0){
			    onKST('竞价PC中间弹框');
			}else if(ClassName.indexOf("Lphone")>=0 || ClassName.indexOf("LxzImg")>=0){
			    onKST('竞价PC左侧旋转按钮');
			}else{
			    onKST('竞价PC通用');
			}           
        }else{
		    //console.log('打开对话窗口失败!');
			alert('打开对话窗口失败,可尝试刷新页面重试');
			return false;
		}
	});
	
	/* 中间挂件*/
	var KstFirstTime = 5000,KstTcTime = 20000,WinShow = '';
	 setTimeout(function () {
            $(".TalkWin").show();
     }, KstFirstTime);
	 $(".CloseWin").click(function(){
        $('.TalkWin').hide();
        WinShow = setTimeout(function () {
            $(".TalkWin").show();
        },KstTcTime)
    }); 
	/* 点击回拨电话 */
	var BdPhone = $("a.callbF_sub").click(function(){
		//alert($(this).parent().find("input.callbF_text").val());
	    lxb.call($(this).parent().find("input.callbF_text").val());
	});
	$(".PhoneBox,.Lphone").keydown(function(event){
		 if (event.which == "13") {//keyCode=13是回车键
			 lxb.call($(this).find("input.callbF_text").val());
		 }
     });
	/* 右侧挂件 */
	$(".TalkRight .Link").hover(function(){
		$(".TalkRight .PhoneBox").addClass("Open").show().stop(true,true).animate({right:'114px','opacity':1},500);
		$(".TalkRight .PhoneBox").mouseover(function(){
	        $('.TalkWin').hide();
			clearTimeout(WinShow);
			return false;
		});
	},function(){
	    $(".TalkRight .PhoneBox").removeClass("Open").hide().stop(true,true).animate({right:'-103px','opacity':0},500);
		$(".TalkRight .PhoneBox").mouseout(function(){			
            WinShow = setTimeout(function () {
				$(".TalkWin").show();
			},KstTcTime)		
		});			
	});
	

	
	$("a.GOToTop").click(function(){  
		$('body,html').animate({scrollTop:0},1000);  
		return false;  
	});
	$(".TalkRight .t4 span.num").text(Math.floor(Math.random()*99+1));
	
	/* 商务通Tip */
	$('.TalkWin .LinkBox a.phnum').poshytip({
		content: '028-65088888<br/>',
		showOn: 'hover',
		alignTo: 'target',
		alignX: 'center',
		offsetX: 0,
		offsetY: 5,
		showTimeout: 100
    });
	$('.TalkWin .LinkBox a.weixin').poshytip({
		content: '<img src="/jjzt/Common/img/ewm.jpg" /><br/>',
		showOn: 'hover',
		alignTo: 'target',
		alignX: 'center',
		offsetX: 0,
		offsetY: 5,
		showTimeout: 100
    });

	
	
	
})

var GLB_ZjFlash = new Swiper('.GLB_ZjFlash .FootZj', {
	nextButton: '.GLB_ZjFlash .swiper-button-next',
	prevButton: '.GLB_ZjFlash .swiper-button-prev',
	slidesPerView: 1,
	spaceBetween: 30,
	effect : 'flip',
	loop : true,
	autoplay : 5000,
	autoplayDisableOnInteraction : false
});
