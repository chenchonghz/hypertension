<?php
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header2.tpl");//显示模板
?>
<style type="text/css">
<!--
#menu ul {
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}
#menu ul li ul {
	display: none;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: solid;
	border-top-color: #CCCCCC;
	border-right-color: #CCCCCC;
	border-bottom-color: #CCCCCC;
	border-left-color: #CCCCCC;
	position: absolute;
	width: 100px;
	left: 100px;
	top: 0px;
}
#menu ul li:hover ul {
	display: block;
}
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 1.5px;
}
#menu { border: 1px solid #CCCCCC; width: 100px; height: auto; position: absolute; top: 135px; }
#menu ul  li {
	background-color: #eee;
	height: 26px;
	padding-top: 0px;
	padding-right: 8px;
	padding-bottom: 0px;
	padding-left: 8px;
	line-height: 26px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	position: relative;
}
a {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
}
-->
</style>
</head>

<body>
<div id="menu">
<ul>
<li><a href="#">分析平台</a>
<ul>
<li><a href="#">自适应</a></li>
<li><a href="#">固定</a></li>
</ul>
</li>
<li><a href="#">IPA平台</a></li>
<li><a href="#">虚机申请</a></li>
</ul>
</div>
</body>
</html>
