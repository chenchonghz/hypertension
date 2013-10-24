<?php 
/* 
* 
* 
*/ 
session_start(); 
if($_POST[sub]){ 
	//if(!empty($_POST[gd_pic])){
//判断验证码是否相同 
if($_POST[gd_pic]==$_SESSION[randcode]){ 
echo "验证成功！"; 
}else{ 
echo "验证码错误"; 
} 
} 
?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>验证码测试</title>
		
	<script>  
         function formSubmit(){   
			 document.actionForm.action = "login.php";   
             document.actionForm.submit();   
         } 
		 </script>
</head>

<body>
<form name="actionForm" action="lg.php" method="POST"> 


验证码：<input type="text" name="gd_pic"/><img src="core.php" onClick="this.src=this.src+'?'+Math.random();"/><br> 

<input type="submit" name="sub" value="submit"/> 
<a href="javascript:formSubmit()" name="sub">发布</a>
</form> 
</body>
</html>