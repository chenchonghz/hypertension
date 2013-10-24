<?php session_start();
if($_SESSION["username"]){
//header('Location:my.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="js/tab.js"></script>
<style type="text/css">
<!--
#login { height: 500px; width: 1000px; float: none; background-color: #FFFFFF; margin-right: auto; margin-left: auto; }
#login .denglu { height: 250px; width: 500px; border: 1px solid #999999; position: relative; }
input { height: 32px; }
#login .denglu img { height: 32px; width: 80px; top: 163px; position: absolute; left: 230px; }
.btn27
{
	width:144px;
	height:39px;
	line-height:18px;
	font-size:18px;
	background:url("images/button/bg27.jpg") no-repeat left top;
	color:#FFF;
	padding-left:14px;
}
-->
</style>
</head>
<body>
<div class="header"></div>
<div class="nav"> 
  <ul>
    <li><a class="hide" href="index.php">首页</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="denglu.php">健康管理</a> 
      <ul>
        <li><a href="reg.html">注册</a></li>
        <li><a href="denglu.php">登陆</a></li>
        <li><a href="login.php">个人中心</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">疾病管理</a> 
      <ul>
        <li><a href="http://114.251.219.47/">慢性病管理平台</a></li>
        <li><a href="fengxian.php">疾病风险</a></li>
      </ul>
    </li>
    <li><a class="hide" href="#">解决方案</a> 
      <ul>
      <li><a href="#">个人解决方案</a></li>
      <li><a href="#">社区解决方案</a></li>
      <li><a href="#">高端人群解决方案</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">数据分析平台</a> 
      <ul>
      <li><a href="http://124.127.245.60:8080/">NGS数据在线分析</a></li>
        <li><a href="rpdf.html">高血压早期预警</a></li>
      
      
      </ul>
    </li>
    <li><a class="hide" href="http://192.168.87.92/authmain.php">高血压虚拟平台</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="map.php">联系我们</a> 
    </li>
    <li><a class="hide" href="http://124.127.245.60/bbs">讨论一下吧</a> </li>
    <li><a class="hide" href="https://app-v.biocloud.org.cn/">云主机申请</a> </li>
  </ul> 
</div>

<div id="login">
  <div class="denglu">
    <h1>用户登录</h1>
    <hr />
    <br />

    <form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)">
      <label for="username" class="label">用户名:&nbsp;</label>
      <input id="username" name="username" type="text" class="input" />
      <br />
      <br />
      <label for="password" class="label">密 码:&nbsp;&nbsp;</label>
      <input id="password" name="password" type="password" class="input" />
      <br />
      <br/>
      验证码：
      <input type="text" name="identifier"/>
      <img style="cursor:pointer" src="identifying.php"  onClick="this.src=this.src+'?'+Math.random();" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;单击刷新验证码
      <p>
        <input type="submit" class="btn27" name="submit" value="  确 定  " />
      </p>
      <a href="reg.html">新用户注册</a>
      </form>
  </div>
</div>
<div class="footer">
  <div id="end"></div>
  
  <div id="contact"><a href="http://cbioportal.org/">cBioPortal</a> |
<a href="http://www.mskcc.org/mskcc/html/44.cfm">MSKCC</a> |
<a href="http://cancergenome.nih.gov/">TCGA</a>
<br>
Questions and feedback:  <a href="mailto:guixk@bcc.ac.cn" title="Contact us">guixk@bcc.ac.cn</a>
</div> <img src="images/bcc.png" alt="北京市计算中心" longdesc="http://www.bcc.ac.cn" />
  <div id="di"></div>
</div>
</body>
</html>
