<?php
session_start();
require('libs/Smarty.class.php');//����Smarty����ļ�
    $smarty = new Smarty();//����һ��Smarty����
    $smarty->display("header.tpl");//��ʾģ��
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
//����Ƿ��¼����û��¼��ת���¼����
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
}
//�������ݿ������ļ�
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$xueya = mysql_query("select * from $username");
$row = mysql_fetch_array($user_query);

echo '�û���Ϣ��<br />';
//echo '�û�ID��',$userid,'<br />';
echo '�û�����',$username,'<br />';
echo '���䣺',$row['email'],'<br />';
echo 'ע�����ڣ�',date("Y-m-d", $row['regdate']),'<br />';
echo '���ҽ��ܣ�',$row['selfintro'],'<br />';
echo '����������',mysql_num_rows($xueya),'������','<br />';
echo '<a href="login.php?action=logout">ע��</a> ��¼<br />';
$i=1;
while($xue = mysql_fetch_array($xueya)){
    echo '��',$i++,'��:',$xue['xueya'],'<br/>';
}
?>
<iframe src="SVGGraph/tu.php" type="image/svg+xml" width="600" height="400"></iframe>
