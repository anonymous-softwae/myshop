$(function(){
	    'use strict';
    window.onload=function(){ 
        /*注册按钮开启规则*/
        $(".submit").attr("disabled", true);
        var cname,cpwd,verif;
        function chklogin(){
            if((cname=='yes')&&(cpwd=='yes')&&verif=='yes'){//全部满足要求即可开启注册按钮
                $(".submit").attr("disabled", false);
            }
            else{
                $(".submit").attr("disabled", true);
            }
        }
        /*用户名获得焦点并验证*/
        $(".name").focus();
        /*当用户名失去焦点时，系统调用函数检查用户名是否重复*/
        $(".name").blur(function(){ 
            var regname=$(".name").val();
            if(regname==""){
                if($(".phone").val()==''){
                     $("form").find("._tips").eq(1).html("电话号码不能为空"); 
                     cphone="";
                }
        });
        /*定义HTTP状态变化函数*/
        var stateChange_1=function (){
            if(xmlhttp.readyState==4){
                if(xmlhttp.status==200){
                    var msg=xmlhttp.responseText;
                    if(msg=="0"){
                        $("form").find("._tips").eq(0).html('<span style="color:#00FF00">恭喜你，该用户可以使用</span>');
                        cname2='yes';
                    }
                    else if(msg=="1"){
                        $("form").find("._tips").eq(0).html("该用户名已被占用，请更换");
                        cname2='';
                    }
                    else{
                        $("form").find("._tips").eq(0).html(msg);
                        cname2='';
                    }
                 }
                 else{
                     alert("Problem retrieving XML data");
                    }      
            }
            chkreg(); 
        } 
        /*验证Phone*/
        $(".phone").keyup(function(){                
            var regphone=$(".phone").val().match(/^1[3-9]\d{9}$/);       
            if(regphone==null){
                $("form").find("._tips").eq(1).html(""); 
                cphone="";
             }
            else{
                $("form").find("._tips").eq(1).html('<span style="color:#00FF00">电话号码输入正确</span>');
                cphone="yes";  
            }
                chkreg();
        });
        /*Phone失去焦点时检验*/
        $(".phone").blur(function(){
            var regphone=$(".phone").val().match(/^1[3-9]\d{9}$/);       
            if(regphone==null){
               if($(".phone").val()==''){
                    $("form").find("._tips").eq(1).html("电话号码不能为空"); 
                    cphone="";
               }
               else{
                $("form").find("._tips").eq(1).html("电话号码输入错误"); 
                cphone="";
               }  
             }
                chkreg();
        }); 
        /*验证密码*/
        $(".pwd_1").keyup(function(){
            var regpwd1=$(".pwd_1").val();
            var regpwd2=$(".pwd_2").val();
            if(regpwd1.length<6){
                $("form").find("._tips").eq(2).html("密码长度最少需要6位"); 
                cpwd1="";
            }
            else if(regpwd1>=6&&regpwd1<12){
                $("form").find("._tips").eq(2).html('<span style="color:#00FF00">密码符合要求，密码强度弱</span>');
                cpwd1="yes";  
            }
            else if((regpwd1.match(/^[0-9]*$/)!=null)||(regpwd1.match(/^[a-zA-Z]*$/)!=null)){
                $("form").find("._tips").eq(2).html('<span style="color:#00FF00">密码符合要求，密码强度中</span>');
                cpwd1="yes";  
            }
            else{
                $("form").find("._tips").eq(2).html('<span style="color:#00FF00">密码符合要求，密码强度高</span>');
                cpwd1="yes"; 
            }
            if(regpwd2!=""&&regpwd1!=regpwd2){
                $("form").find("._tips").eq(3).html('两次密码不一致');
                cpwd2="";     
            }
            else if(regpwd2!=""&&regpwd1==regpwd2){
                $("form").find("._tips").eq(3).html('<span style="color:#00FF00">密码输入正确</span>');
                cpwd2="yes";  
            }
            chkreg();
        });

        /*验证二次密码*/
        $(".pwd_2").keyup(function(){
            var regpwd1=$(".pwd_1").val();
            var regpwd2=$(".pwd_2").val();
            if(regpwd1!=regpwd2){
                $("form").find("._tips").eq(3).html("两次密码不一致"); 
                cpwd2="";
            }
            else{
                $("form").find("._tips").eq(3).html('<span style="color:#00FF00">密码输入正确</span>');
                cpwd2="yes";  
            }
            chkreg();
        });
        //定义获取HTTP的POST标准方法
        var xmlhttp;
        function loadXMLDoc(url,para,state_Change){
            xmlhttp=null;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }
            else if(window.ActiveXObject){
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            if(xmlhttp!=null){
                xmlhttp.onreadystatechange=state_Change;
                xmlhttp.open("POST",url,true);
                xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xmlhttp.send(para);
            }
            else{
                alert("Your browser does not support XMLHTTP.");
            }
        }     
        /*提交注册*/
        $('.submit').click(function(){
            var url='register_check.php';
            var para='name='+$(".name").val()+'&pwd_1='+$(".pwd_1").val()+'&phone='+$(".phone").val();
            var state_Change=stateChange_2;
            loadXMLDoc(url,para,state_Change);
        });
        /*定义HTTP状态变化函数*/
           var stateChange_2=function(){
                if(xmlhttp.readyState==4){
                    if(xmlhttp.status==200){
                       var msg=xmlhttp.responseText;
                        if(msg=='1'){
                            alert("恭喜你，注册成功，即将转入登陆页面！");
                            window.location.replace('login.php');  
                        }
                        else if(msg=='0'){
                            alert("注册未成功，请重试！");                                
                        }
                        else{
                            window.location.replace('index.php');
                        }
                    }
                }
            }     
  }  
    /*验证码倒计时*/
    function resetTime(e){
        var second = 60;
        var timer = null;
        timer = setInterval(function(){
            second -= 1;
            if(second >0){
                $(e).attr('disabled',true);
                $(e).val(second + "秒后获取验证码");
            }else{
                clearInterval(timer);
                $(e).attr('disabled',false);
                $(e).val("发送短信验证码");
            }
        },1000);
      }
      $('._btn').click(function(){
          resetTime(this);
      });    
})