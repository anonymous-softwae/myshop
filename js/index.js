	
/**右侧栏内容随左侧导航栏变动**/
	$(function(){
	'use strict';
   //获取点击事件的对象
    $(".nav_list li").mouseenter(function(){
   //获取要显示或隐藏的对象
    var divShow = $(".products_content").children('.products');
   //判断当前对象是否被选中，如果没选中的话进入if循环
    if (!$(this).hasClass('selected')) {
   //获取当前对象的索引
    var index = $(this).index();
   //当前对象添加选中样式并且其同胞移除选中样式；
   $(this).addClass('selected').siblings('li').removeClass('selected');
   //索引对应的div块显示
	$(divShow[index]).removeClass('none_display').siblings().addClass('none_display');
	$(".products_slider").hide();
	}
	});
   //离开左侧导航，右侧索引内容消失，回到轮播图；	
	$(".products_container").mouseleave(function(){
	$(".products_content").children('.products').addClass('none_display');
	$(".products_slider").show();
	$(".nav_list li").removeClass("selected");
	});  
	
	//顶部轮播图自动播放	
	var t;
	var id=0;
	var bg;
	t=setInterval(play,4000);
	function play(){
		id++;
		if(id>5){
			id=0;
		}		
	//跟随轮播，切换小图标样式
		$('.products_slider ul li').eq(id).css({
			'background':'rgba(232,227,227,1.00)',
			"border":'1px solid rgba(59,59,59,1)'
		}).siblings().css({
			'background':'rgba(59,59,59,1)',
			'border':''
		});
		$('.slider_img a').eq(id).fadeIn(1500).siblings().fadeOut(1500);
		
	//左侧导航栏背景色与右侧背景色匹配
		 bg=$('.slider_img img').eq(id).attr('color');
	     $('.nav_list ul').attr('background',bg);
	    }
		
	//点击小图标，切换图片
	$('.products_slider ul li').click(function(){
		$(this).css({
			"background":"rgba(232,227,227,1.00)",
			"border":'1px solid rgba(59,59,59,1)'}).siblings().css({
			"background":'rgba(59,59,59,1)'
		});
		var index=$(this).index();
		$('.products_slider a').eq(index).fadeIn(1500).siblings().fadeOut(1500);
		});	
		
	//左箭头切换样式编变化
		$('.arrow_left').hover(function(){
			$(this).find('img').attr('src','images/index/slider/fangxiang-zuo-h.png');			
		},function(){
			$(this).find('img').attr('src','images/index/slider/fangxiang-zuo.png');
		});
		
	//右箭头切换样式编变化
		$('.arrow_right').hover(function(){
			$(this).find('img').attr('src','images/index/slider/fangxiang-you-h.png');
		},function(){		
			$(this).find('img').attr('src','images/index/slider/fangxiang-you.png');
		});
		
	//左方向切换图片
		$('.arrow_left').click(function(){
			id--;
			if(id<0){
				id=5;
			}
			$('.products_slider ul li').eq(id).css({
			   'background':'rgba(232,227,227,1.00)',
				"border":'1px solid rgba(59,59,59,1)'
			}).siblings().css({
			   'background':'rgba(59,59,59,1)',
			   'border':''
		    });
			$('.slider_img a').eq(id).fadeIn(1500).siblings().fadeOut(1500);
		});
		
	//右方向切换图片
		$('.arrow_right').click(function(){
			id++;
			if(id>5){
				id=0;
			}
			$('.products_slider ul li').eq(id).css({
			    'background':'rgba(232,227,227,1.00)',
				"border":'1px solid rgba(59,59,59,1)'
			}).siblings().css({
			    'background':'rgba(59,59,59,1)',
			    'border':''
		    });
			$('.slider_img a').eq(id).fadeIn(1500).siblings().fadeOut(1500);
		});

	//鼠标进出轮播区域
		$('.products_slider ul li,.slider_img a img,.arrow_left,.arrow_right').hover(
			function(){
			   clearInterval(t);
		},function(){
			t=setInterval(play,4000);
		});
	//设置顶部导航栏的内容居中对齐
		var off_left=$('.products_container').offset().left;
		$('nav').offset({left:off_left});	
		
	    var off_right=$('.products_container').offset().right;
		$('nav').offset({right:off_right});
		
		$(window).resize(function(){
		var off_left=$('.products_container').offset().left;
		$('nav').offset({left:off_left});	
			
	    var off_right=$('.products_container').offset().right;
		$('nav').offset({right:off_right});	
		});
	
	//秒杀轮播图自动播放	
	var h;
	var i=0;
	var j=$('.seckill_thumbnail').eq(0).outerWidth(true);
	$(window).resize(function(){
        j=$('.seckill_thumbnail').eq(0).outerWidth(true);
	});	
	var k;
		$('.seckill_thumbnail').hover(
			function(){
			clearInterval(h);},
			function(){
			h=setInterval(change,3000);}
		);
		h=setInterval(change,3000);
		function change(){
			i++;
			if(i>4){
				i=0;
			}
			k=i*j;
			$('.seckill_thumbnail').eq(0).animate({left:-k+0*j},'slow');
			$('.seckill_thumbnail').eq(1).animate({left:-k+1*j},'slow');
			$('.seckill_thumbnail').eq(2).animate({left:-k+2*j},'slow');
			$('.seckill_thumbnail').eq(3).animate({left:-k+3*j},'slow');
			$('.seckill_thumbnail').eq(4).animate({left:-k+4*j},'slow');
			$('.seckill_thumbnail').eq(5).animate({left:-k+5*j},'slow');
			$('.seckill_thumbnail').eq(6).animate({left:-k+6*j},'slow');
			$('.seckill_thumbnail').eq(7).animate({left:-k+7*j},'slow');
			}
				
	//抢购倒计时
		function checkTime(x){
			if(x<10){
				x="0"+x;
			}
			return x;
		} 
		/** 
		function formateTime(timeVal){
			var datePara=new Date(timeVal);
			var yyyy=datePara.getFullYear();
			var MM=datePara.getMonth();
			var dd=datePara.getDate();
			var hh=datePara.getHours();
			var mm=datePara.getMinutes();
			var ss=datePara.getSeconds();
			MM=checkTime(MM);			
			dd=checkTime(dd);
			hh=checkTime(hh);
			mm=checkTime(mm);
			ss=checkTime(ss);
			return yyyy+"-"+MM+"-"+dd+''+''+''+hh+':'+mm+':'+ss;	
		}
		**/
		var startTime='';
		var end='';
		var endTime='';
		var plus='';
		var a=setInterval(setTimer,1000);
		function setTimer(){
			if(!plus){
				startTime=new Date();
				/** 显示当前时间和结束时间 $('#start').val(formateTime(startTime)); **/
			    end=document.getElementById("end").value; 
				endTime=new Date(end);
				plus=endTime-startTime;
			}
			else{
				plus-=1000;
				startTime=new Date(startTime.getTime()+1000);
				/**显示当前更新时间$("#start").val(formateTime(startTime)); **/
			}
			var day=parseInt(plus/1000/60/60/24);
			var hour=parseInt(plus/1000/60/60)-day*24;
			var minute=parseInt(plus/1000/60)-parseInt(plus/1000/60/60)*60;
			var second=parseInt(plus/1000)-parseInt(plus/1000/60)*60;
			day=checkTime(day);
			hour=checkTime(hour);
			minute=checkTime(minute);
			second=checkTime(second);
			document.getElementById('rushTime').innerHTML=day+"天"+hour+"时"+minute+"分"+second+"秒";
			if(plus<=1){
				clearInterval(a);
				$("h6").replaceWith("<h5>本次活动已结束<h5>");
				document.getElementById('rushTime').innerHTML="00"+"天"+"00"+"时"+"00"+"分"+"00"+"秒";
				
			}				
			}
		

	});