<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<title>用户登录</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/login.js"></script>
</head>
<body>
  <div class="outer-wrap">
     <!--公司LOGO-->
     <div class="header_logo"> 
	     <a href="index.php"><img src="images/index/LOGO-PNG.png"></a>
	   </div> 
     <!--登陆面板-->
     <div class="login-panel">
       <p class="_title">用户登录</p>
       <div class="panel">
	       <form action="#" method="post">
           <input type="text" name="name" size="45" placeholder="用户名/手机号" class="name"/>
           <input type="password" name="pwd" placeholder="密码" class="pwd"/>
           <div class="box">
             <div class="_vInput"><input type="text" name="verification" placeholder="验证码"/></div>
             <div class="_btn"><input type="button" value="获取/刷新验证码"></input></div>
           </div>
           <input type="button" value="登录" class="submit"/>
         </form>
         <a href="www.baidu.com"><span class="fpwd">忘记密码?</span></a>
         <a href="register.php"><span class="reg">新用户注册</span></a>
       </div>
     </div>
  </div>
</body>
</html>
