<?php
require('libs/Smarty.class.php');//����Smarty����ļ�
$smarty = new Smarty();//����һ��Smarty����
$smarty->display("header.tpl");//��ʾģ��
?>
<style type="text/css">
<!--
h1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: large;
	height: 20px;
	width: 300px;
	margin-right: auto;
	margin-left: auto;
}
#form1 {
	height: 500px;
	width: 700px;
	margin-right: auto;
	margin-left: auto;
}
-->
</style>

<h1 align="center">�������ϵͳ</h1>
<div id="form1">
  <form action="insertkepu.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>title:</strong> 
    <input type="text" name="title" /><br><br>
    <strong>content:</strong>
    <textarea name="content" cols="40" rows="30"></textarea>
    <br /><br /><br />

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="�ύ��" />
  </form>
</div>
</div>
<?php $smarty->display("footer.tpl");//��ʾģ��?>