<?php
session_start();
require('libs/Smarty.class.php');//����Smarty����ļ�
    $smarty = new Smarty();//����һ��Smarty����
    $smarty->display("header.tpl");//��ʾģ��
//����Ƿ��¼����û��¼��ת���¼����
if(!isset($_SESSION['userid'])){
    header("Location:denglu.php");
    exit();
}?>
<style type="text/css">
<!--
.shuruxueya { background: #00FFCC; height: 800px; width: 1000px; margin-right: auto; margin-left: auto; }
-->
</style>

<link href="css/tab.css" rel="stylesheet" type="text/css" />
<div class="shuruxueya">
<?php 
//�������ݿ������ļ�
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$xueya = mysql_query("select * from $username");
$row = mysql_fetch_array($user_query);
echo '<h1>�û���Ϣ</h1><br />';
//echo '�û�ID��',$userid,'<br />';
echo '�û�����',$username,'<br />';
if(file_exists("upload/$username.jpg")){
   echo <<<END
<img src="upload/$username.jpg" />
<br />
END;
 }else{
 echo <<<END
<img src="images/showavatar.jpg" />
<br />
END;
 }
echo '���䣺',$row['email'],'<br />';
echo 'ע�����ڣ�',$row['regdate'],'<br />';
echo '����������',mysql_num_rows($xueya),'������','<br />';
echo '<a href="login.php?action=logout">ע��</a> ��¼<br />';
$i=1;
while($xue = mysql_fetch_array($xueya)){
    echo '��',$i++,'��:',$xue['sbp'],'&nbsp;&nbsp;';
}
echo "<br />";
?>
<style type="text/css">
<!--
#xueya {
	position: absolute;
	top: 200px;
	float: right;
	left: auto;
	right: 30%;
}
#shangchuan {
	float: none;
	position: absolute;
	top: 300px;
}
-->
</style>

<!--<form id="xueya" method="post" action="addxueya.php" >
  <p>
  <label >�������Ѫѹֵ:</label>
  <input  name="sbp" type="text"  />
  <p/>
  <br />
  <p>
  <input type="submit" name="submit" value=" ���  "/>
  </p>
  <br />
  </form>-->
<!--<iframe src="SVGGraph/tu.php" type="image/svg+xml" width="500" height="400"></iframe>-->

<?php 
include("libs/PhpPlot.php");
$b=$username;//the name of the pdf R will be created
$a="pdf(\"./r_tmp/$b.pdf\")
library(RMySQL)
con<-dbConnect(MySQL(), user=\"root\",password=\"newpassword\",dbname=\"test\",host=\"127.0.0.1\")
sbp<-dbGetQuery(con,\"select sbp from $username\")
time<-dbGetQuery(con,\"select regtime from $username\")
plot(sbp,time);
dev.off
";//R code
$r=$username.".r";
$p1=new PhpPlot($b, $a,$r);
//$p1->say();
$p1->create();
$p1->plot();
?>
</div>
<?php
    $smarty->display("footer.tpl");//��ʾģ��
?>