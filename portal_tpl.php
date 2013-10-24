<?php
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?>
<style type="text/css">
<!--
h1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: large;
	height: 20px;
	width: 300px;
	position: absolute;
	left: 330px;
	top: 180px;
}
#form1 {
	height: 500px;
	width: 700px;
	position: absolute;
	left: 330px;
	top: 230px;
}
-->
</style>

<h1 align="center">新闻添加系统</h1>
<div id="form1">
  <form action="insertnews.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>title:</strong> 
    <input type="text" name="title" /><br><br>
    <strong>content:</strong>
    <textarea name="content" cols="40" rows="30"></textarea>
    <br /><br /><br />

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交！" />
  </form>
</div>
</div>
<?php $smarty->display("footer.tpl");//显示模板?>