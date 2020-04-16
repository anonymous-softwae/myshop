<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<title>用户登录</title>
<link href="css/register.css" rel="stylesheet" type="text/css">
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/register.js"></script>
</head>
<body>
  <div class="outer-wrap">
     <!--公司LOGO-->
     <div class="header_logo"> 
	     <a href="index.php"><img src="images/index/LOGO-PNG.png"></a>
	   </div> 
     <!--登陆面板-->
     <div class="register-panel">
       <p class="_title">用户注册</p>
       <div class="panel">
	       <form>
           <input type="text" name="name" size="45" placeholder="用户名" class="name"/><label class="_tips"></label>
           <div class="box"><input type="text" name="phone" placeholder="手机号码" class="phone"></input><input type="button" value="发送短信验证码" class="_btn"></input></div><label class="_tips"></label>  
           <input type="password" name="pwd_1" size="45" placeholder="输入密码" class="pwd_1"/><label class="_tips"></label>
           <input type="password" name="pwd_2" size="45" placeholder="确认密码" class="pwd_2"/><label class="_tips"></label>
           <input type="button" value="注册" class="submit"/>
         </form>
         <a href="login.php"><span class="account">已有帐户？请登录</span></a>
       </div>
     </div>
  </div>
</body>
</html>
