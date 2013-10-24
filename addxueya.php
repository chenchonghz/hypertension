<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
 $username=$_SESSION['username'];
 include('conn.php');
 
$sbp = $_POST['sbp'];
$dbp = $_POST['dbp'];
$day = $_POST['regday'];
$time = $_POST['regtime'];
$heartrate = $_POST['heartrate'];
$sql = "INSERT INTO $username (sbp,dbp,regday,regtime,heartrate)VALUES('$sbp','$dbp','$day','$time','$heartrate')";
if(mysql_query($sql,$conn)){
    //exit('血压添加成功! 点击此处 <a href="my.php">查看趋势</a>');
     header('Location:my.php');
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}

?>
</body>
</html>
