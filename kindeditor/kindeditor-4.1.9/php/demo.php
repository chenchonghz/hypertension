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
    <li><a class="hide" href="index.php">��ҳ</a> 
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </li>
    <li><a class="hide" href="denglu.php">��������</a> 
      <ul>
        <li><a href="login.php">��������</a></li>
        <li><a href="my.php">Ѫѹ��̬</a></li>
      </ul>
    </li>
    <li><a class="hide" href="fengxian.php">��������</a> 
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </li>
    <li><a class="hide" href="#">�������</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="http://124.127.245.60:8080/">���ݷ���ƽ̨</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="">�г�����</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="">��ϵ����</a> 
    </li>
    <li><a class="hide" href="http://124.127.245.60/bbs">����һ�°�</a> </li>
    <li><a class="hide" href="http://192.168.60.125/wiki/">֪ʶ�ٿ�</a> </li>
  </ul>
</div>
<br/>
	<?php echo $htmlData; ?>
	<form name="example" method="post" action="insertnews.php">
    <label>������Ŀ:<input id="title" type="text" name="title" /></label> 
      <br/><br/>
		<textarea name="content1" style="width:700px;height:400px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="�ύ" /> (�ύ��ݼ�? Ctrl + Enter)
	</form>
<div class="footer">
  <div id="end"></div>
  
  <div id="contact"><a href="http://cbioportal.org/">cBioPortal</a> |
<a href="http://www.mskcc.org/mskcc/html/44.cfm">MSKCC</a> |
<a href="http://cancergenome.nih.gov/">TCGA</a>
<br>
Questions and feedback:  <a href="mailto:guixk@bcc.ac.cn" title="Contact us">guixk@bcc.ac.cn</a>
</div> <img src="bcc.png" alt="�����м�������" longdesc="http://www.bcc.ac.cn" />
  <div id="di"></div>
</div> 
</body>
</html>

