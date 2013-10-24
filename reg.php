<?php
session_start();
include('mail.php');
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?>
<?php
//if(!isset($_POST['submit'])){
    //exit('非法访问!');
//}
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//注册信息判断
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
    exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
//if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
    //exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
//}
//包含数据库连接文件
include('conn.php');
//检测用户名是否已经存在
$check_query = mysql_query("select uid from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}
//写入数据
//$password = MD5($password);
$regdate = date("Y-m-d H:i:s");
$user_sql = "CREATE TABLE $username (id int NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),sbp int(10),dbp int(10),regday date,regtime time,heartrate int(10))";
$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email','$regdate')";
if(mysql_query($sql,$conn) && mysql_query($user_sql,$conn)){
    $_SESSION['username'] = $username;//创建session变量
	$_SESSION['password'] = $password;
    smtp_mail("$email", "欢迎使用北京市计算中心高血压健康平台！", "NULL", "yourdomain.com", "username"); 
	unset($_SESSION['password']);
    unset($_SESSION['username']);
    exit('用户注册成功！点击此处 <a href="denglu.php">登录</a>');
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
