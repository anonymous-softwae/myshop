	
/**右侧栏内容随左侧导航栏变动**/
	$(function(){
	'use strict';
   	//设置顶部导航栏的内容居中对齐
		var off_left=$('.header_background').offset().left;
		$('nav').offset({left:off_left});	
		
	    var off_right=$('.header_background').offset().right;
		$('nav').offset({right:off_right});
		
		$(window).resize(function(){
		var off_left=$('.header_background').offset().left;
		$('nav').offset({left:off_left});	
			
	    var off_right=$('.header_background').offset().right;
		$('nav').offset({right:off_right});	
		});		
  	//设置内容显示切换
		if(!$(".news_title_1").hasClass('title_bg'))
			{
			  $('.news_title_1').addClass("title_bg");
			  $('.company_news').siblings().addClass("none_display");
			}
		$('.news_title_2').hover(function(){
		    $('.news_title_2').addClass("title_bg").siblings().removeClass("title_bg");
			$('.industry_focus').removeClass("none_display").siblings().addClass('none_display');
			});
		$('.news_title_1').hover(function(){
			$('.news_title_1').addClass("title_bg").siblings().removeClass("title_bg");
			$('.company_news').removeClass("none_display").siblings().addClass('none_display');
			});

	});
