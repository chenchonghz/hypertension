<?php
	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="gb2312" />
	<title>KindEditor PHP</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../themes/default/default.css" />
	<link rel="stylesheet" href="../plugins/code/prettify.css" />
	<script charset="gb2312" src="../kindeditor.js"></script>
	<script charset="gb2312" src="../lang/zh_CN.js"></script>
	<script charset="gb2312" src="../plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../plugins/code/prettify.css',
				uploadJson : '../php/upload_json.php',
				fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
    <style type="text/css">
<!--
form {
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
}
#title {
	width: 300px;
	margin-right: auto;
	margin-left: auto;
}
-->
    </style>
</head>
<body>
<div class="header"></div>
<div class="nav"> 
  <ul>
    <li><a class="hide" href="index.php">首页</a> 
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </li>
    <li><a class="hide" href="denglu.php">个人中心</a> 
      <ul>
        <li><a href="login.php">个人中心</a></li>
        <li><a href="my.php">血压动态</a></li>
      </ul>
    </li>
    <li><a class="hide" href="fengxian.php">疾病管理</a> 
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </li>
    <li><a class="hide" href="#">解决方案</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="http://124.127.245.60:8080/">数据分析平台</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="">市场合作</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="">联系我们</a> 
    </li>
    <li><a class="hide" href="http://124.127.245.60/bbs">讨论一下吧</a> </li>
    <li><a class="hide" href="http://192.168.60.125/wiki/">知识百科</a> </li>
  </ul>
</div>
<br/>
	<?php echo $htmlData; ?>
	<form name="example" method="post" action="insertnews.php">
    <label>新闻题目:<input id="title" type="text" name="title" /></label> 
      <br/><br/>
		<textarea name="content1" style="width:700px;height:400px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="提交" /> (提交快捷键? Ctrl + Enter)
	</form>
<div class="footer">
  <div id="end"></div>
  
  <div id="contact"><a href="http://cbioportal.org/">cBioPortal</a> |
<a href="http://www.mskcc.org/mskcc/html/44.cfm">MSKCC</a> |
<a href="http://cancergenome.nih.gov/">TCGA</a>
<br>
Questions and feedback:  <a href="mailto:guixk@bcc.ac.cn" title="Contact us">guixk@bcc.ac.cn</a>
</div> <img src="bcc.png" alt="北京市计算中心" longdesc="http://www.bcc.ac.cn" />
  <div id="di"></div>
</div> 
</body>
</html>

