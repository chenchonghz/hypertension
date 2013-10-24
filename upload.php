<?php
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?>
<style type="text/css">
<!--
#mainContent {
	position: absolute;
	height: 400px;
	width: 400px;
	left: 330px;
	top: 135px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>

<div id="mainContent"><br>
	<table align="center"><tr><td  height="161"><center>
    <h1 align="center">上传个人数据</h1>
    <br>
<form  enctype="multipart/form-data" action="upload.php" method="POST">
<input  name="upload[]" type="file"><br>
<input name="upload[]" type="file"><br>
<input name="upload[]" type="file"><br>
<input type="submit" value="确认上传">
</form></center></td></tr></table>
    <marquee><strong><h2>支持任何格式，可同时支持三个文件共同上传，注意上传文件的的总大小不要超过8M</h2></strong></marquee>
</div>
<?php $smarty->display("footer.tpl");//显示模板?>