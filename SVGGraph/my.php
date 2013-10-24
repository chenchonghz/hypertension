<?php
session_start();
require('libs/Smarty.class.php');//包含Smarty类库文件
    $smarty = new Smarty();//创建一个Smarty对象
    $smarty->display("header.tpl");//显示模板
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
}
//包含数据库连接文件
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$xueya = mysql_query("select * from $username");
$row = mysql_fetch_array($user_query);

echo '用户信息：<br />';
//echo '用户ID：',$userid,'<br />';
echo '用户名：',$username,'<br />';
echo '邮箱：',$row['email'],'<br />';
echo '注册日期：',date("Y-m-d", $row['regdate']),'<br />';
echo '自我介绍：',$row['selfintro'],'<br />';
echo '您共输入了',mysql_num_rows($xueya),'次数据','<br />';
echo '<a href="login.php?action=logout">注销</a> 登录<br />';
$i=1;
while($xue = mysql_fetch_array($xueya)){
    echo '第',$i++,'次:',$xue['xueya'],'<br/>';
}
?>
<iframe src="SVGGraph/tu.php" type="image/svg+xml" width="600" height="400"></iframe>
