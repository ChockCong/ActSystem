<?php /* Smarty version 2.6.30, created on 2017-03-01 01:53:01
         compiled from login.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社会实践管理系统</title>
		<meta name="viewport" content="width=divice-width,initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/login.css"/>
<script>
		function openNew(){
			//获取页面的高度和宽度
			var sWidth=document.documentElement.scrollWidth;
    		var sHeight=document.documentElement.scrollHeight;
	

			//创建一个遮罩层，设置ID为mask
    		var oMask=document.createElement("div");
    		oMask.id="mask";
        
    		//设置遮罩层的宽度和高度，使页面被完全遮罩。    
			oMask.style.height=sHeight+"px";
    		oMask.style.width=sWidth+"px";
	  
    		 //在页面里插入创建的遮罩层 
    		 document.body.appendChild(oMask);
          
   			 //获取页面的可视区域高度和宽度
			var wHeight = document.documentElement.clientHeight;
			var wWidth = document.documentElement.clientWidth;

			//获取登陆框的宽和高
			var oLogin = document.createElement("div");
			oLogin.id = "login"
			oLogin.innerHTML ="<div class= 'loginCon'><div id='close'><i class='glyphicon glyphicon-remove'></i></div><div id='login_center' ><div id='login-top' class='twoline'><div class='line-1'></div><div class='line-2'></div></div><span><h1>SIGN IN</h1></span><form action='Logincontroller.php' method='post'  class='from-group-sm'><i class='glyphicon glyphicon-user icon' id='user-icon'></i><input type='text'  name='username' id='username' class='form-control' placeholder='用户名'/><br /><br /><i class='glyphicon glyphicon-lock icon' id='lock'></i><input type='password' name='password' id='pass-word' class='form-control' placeholder='密码'/><div class='radio'><ul><li><label><input type='radio' name='status' id='student' value='0' />学生</label></li><li><label><input type='radio' name='status' id='admin' value='1' />管理员</label></li></ul></div><input name='login' type='submit' class='bottom' value='LOGIN' /></form><div class='twoline'><div class='line-1'></div><div class='line-2'></div></div></div></div>";
			document.body.appendChild(oLogin);
			var dHeight = oLogin.offsetHeight;
			var dWidth = oLogin.offsetWidth;
			oLogin.style.top = (wHeight - dHeight) / 2 + "px";
			oLogin.style.left = (wWidth - dWidth) / 2 + "px";
			//点击关闭按钮
			oClose = document.getElementById("close");
			oClose.onclick = oMask.onclick = function() {
				document.body.removeChild(mask);
				document.body.removeChild(oLogin);
			}//点击登陆框以外的区域也可以关闭登陆框
}		
					
	//加载后，点击登录按钮后，弹出遮罩和登录框
   window.onload=function (){
       var oBth=document.getElementById("btnLogin");
       oBth.onclick=function (){
           openNew();
           return false;
       }
   }
   
</script>
</head>
	<body>
		<div id="header">
			<div class="title">
				<h1>Social practice<br /> management system</h1>
				<div id="logo"></div>
				<div  id="intro"><span>社会实践，是一种生活方式。</span></div>
			</div>				
				
		</div>

			<div id="btnLogin"  class="login-btn">
				登录
			<div class="bubble">  
            	<p>快来实践吧！</p>  
      		</div>  
			</div>
			
	</body>
</html>