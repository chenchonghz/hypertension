<?php
$conn = @mysql_connect("localhost","root","newpassword");
if (!$conn){
    die("Á¬½ÓÊý¾Ý¿âÊ§°Ü£º" . mysql_error());
}
mysql_select_db("test", $conn);
//×Ö·û×ª»»£¬¶Á¿â
mysql_query("set character set 'gbk'");
//Ð´¿â
mysql_query("set names 'gbk'");
?>
