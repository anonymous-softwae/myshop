<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<title>新闻中心</title>
<link href="css/news.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/news.js"></script>
</head>
<body>
<!--Container-->
<div class="Container">

<!--顶部导航栏-->
<div class="top_nav">
     <nav>
       <!--顶部栏导航左侧内容-->
       <div class="topbar_left">
  	     <ul>
  	       <li><a href="index.php"><img src="images/index/topbar_icon/index.png" alt="home"><span>网站首页</span></a></li>
		       <li>|</li>
		       <li><a href="http://www.baidu.com"><img src="images/index/topbar_icon/guanyuwomen.png" alt="About us">关于我们</a></li>
	         <li>|</li>
	         <li class="nav_content"><a href="http://www.baidu.com"><img src="images/index/topbar_icon/chanpin.png" alt="Products">产品中心</a></li>
		       <li>|</li>
		       <li><a href="http://www.baidu.com"><img src="images/index/topbar_icon/yeji.png" alt="Achievement">项目业绩</a></li>
		       <li>|</li>
		       <li><a href="news.php"><img src="images/index/topbar_icon/xinwenzhongxin.png" alt="News">新闻中心</a></li>
		       <li>|</li>
		       <li><a href="contact.php"><img src="images/index/topbar_icon/lianxiwomen.png" alt="Contact Us">联系我们</a></li>
	       </ul>	
	     </div>
       <!--顶部栏导航右侧内容-->
       <div class="topbar_right">
         <div class="login"><a href="login.php"><img src="images/index/topbar_icon/denglu.png" alt="home">登录</a></div>
 	       <div class="search">
           <input class="search_content1" name="#" placeholder="搜索礼品" type="text"/>
           <div class="search_content2">
             <img src="images/index/topbar_icon/Search_Logo.png" align="absmiddle"/>
           </div>
         </div>
       </div> 	
     </nav>
   </div>    
  
<!--头部背景图-->
<div class="header_background">
     <img src="images/header_img.jpg">   
      <h2>新&nbsp;闻&nbsp;中&nbsp;心</h2> 
</div>
<div class="contents">
<div class="news_title">
	<div class="news_title_1">公司新闻</div>
	<div class="news_title_2">行业聚焦</div>
</div>
<div>
    <div class="company_news">
      <ul>
        <li class="companyNews">1</li>
	    <li class="companyNews">2</li>
	    <li class="companyNews">3</li>
	    <li class="companyNews">4</li>
	    <li class="companyNews">5</li>
	    <li class="companyNews">6</li>
	  </ul>
    </div>
    <div class="industry_focus">
	 
    </div>
</div>
	
</div>
<div id="Slider1"></div>
<div id="Progressbar1"></div>
<input type="text" id="Datepicker1">
<input type="text" id="Autocomplete1">
<div id="Accordion1">
 <div id="Tabs1">
   <ul>
     <li><a href="#tabs-1">Tab 1</a></li>
     <li><a href="#tabs-2">Tab 2</a></li>
     <li><a href="#tabs-3">Tab 3</a></li>
   </ul>
   <div id="tabs-1">
     <p>内容 1</p>
   </div>
   <div id="tabs-2">
     <p>内容 2</p>
   </div>
   <div id="tabs-3">
     <p>内容 3</p>
   </div>
 </div>
<h3><a href="#">部分 1</a></h3>
  <div>
    <p>内容 1</p>
  </div>
  <h3><a href="#">部分 2</a></h3>
  <div>
    <p>内容 2</p>
  </div>
  <h3><a href="#">部分 3</a></h3>
  <div>
    <p>内容 3</p>
  </div>
</div>
  <!--页脚部分-->
  <footer>
  <!--联系信息-->
    <div class="contactInfo">
       	<ul>
    	  <li>电话.:&nbsp;&nbsp;+86-13505406066&nbsp;&nbsp;&nbsp;&nbsp;邮箱:&nbsp;&nbsp;360582946@qq.com</li>
       	  <li>地址.:&nbsp;&nbsp;山东省济南市槐荫区腊山北路9号</li>
    	  <li>分享:&nbsp;&nbsp;    
    	    <div class="shareWith">
              <img src="images/share_icon/weixin.png" alt="wechat">
              <img src="images/share_icon/weibo.png" alt="weibo">
              <img src="images/share_icon/pengyouquan.png" alt="pengyouquan">   
              <img src="images/share_icon/qqkongjian.png" alt="QQkongjian"> 
              <img src="images/share_icon/tengxunweibo.png" alt="tengxunweibo">  
            </div>
        </li>
        </ul>
    </div> 
  </footer>
  
  <!--版权申明信息部分-->
  <div class="copyright">&copy;2019 - 青岛方丹科技技术支持 <span>鲁ICP备19055635号</span> &nbsp;&nbsp;访问统计：<?php require_once './visit_counter.php' ?></div>
</div>
<!-- Main Container Ends -->
<script type="text/javascript">
$(function() {
	$( "#Slider1" ).slider(); 
});
$(function() {
	$( "#Progressbar1" ).progressbar(); 
});
$(function() {
	$( "#Datepicker1" ).datepicker(); 
});
$(function() {
	$( "#Autocomplete1" ).autocomplete(); 
});
$(function() {
	$( "#Accordion1" ).accordion(); 
});
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>
