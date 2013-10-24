<?php
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?>
<style type="text/css">
<!--
#newstitle {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-large;
	background-color: #CCFFFF;
	text-align: center;
	margin-top: 40px;
	margin-right: auto;
	margin-left: auto;
	height: 50px;
	width: 400px;
}
#newscontent {
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
}

p {
	text-indent: 20px;
}
-->
</style>
</head>

<body>
<?php require_once('libs/localhost.php'); ?>
<?php
mysql_select_db("hypertension", $con);

$result = mysql_query("SELECT * FROM news where news_id=$_GET[id]");

while($row = mysql_fetch_array($result))
  {
  ?>
 <div id="newstitle"><?php echo $row['news_title']; ?></div>
 <br />
<p><div id="newscontent">&nbsp;&nbsp;<?php echo $row['news_content'];?></div></p>
 <?php  }
mysql_close($con);?>

<div class="footer">
  <div id="end"></div>
  
  <div id="contact"><a href="http://cbioportal.org/">cBioPortal</a> |
<a href="http://www.mskcc.org/mskcc/html/44.cfm">MSKCC</a> |
<a href="http://cancergenome.nih.gov/">TCGA</a>
<br>
Questions and feedback:  <a href="mailto:guixk@bcc.ac.cn" title="Contact us">guixk@bcc.ac.cn</a>
</div> <img src="images/bcc.png" alt="北京市计算中心" longdesc="http://www.bcc.ac.cn" />
  <div id="di"></div>
</div> 
</body>
</html>