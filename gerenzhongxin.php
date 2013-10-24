<?php
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?>
<style type="text/css">
<!--
.dtree { position: absolute; top: 70px; height: 400px; width: 400px; }
-->
</style>

<div class="dtree">

	<script type="text/javascript">
		<!--

		d = new dTree('d');

		d.add(0,-1,'个人中心');
		d.add(1,0,'我的资料','example01.html');
		d.add(2,0,'病历','example01.html');
		d.add(3,1,'Node 1.1','example01.html');
		d.add(4,0,'血压变化记录','example01.html');
		d.add(5,3,'Node 1.1.1','example01.html');
		d.add(6,5,'Node 1.1.1.1','example01.html');
		d.add(7,0,'血压走势','example01.html');
		d.add(8,1,'Node 1.2','example01.html');
		d.add(9,0,'其他资料','example01.html','Pictures I\'ve taken over the years','','','img/imgfolder.gif');
		d.add(10,9,'The trip to Iceland','example01.html','Pictures of Gullfoss and Geysir');
		d.add(11,9,'Mom\'s birthday','example01.html');
		d.add(12,0,'Recycle Bin','example01.html','','','img/trash.gif');

		document.write(d);

		//-->
	</script>

</div>
</body>

</html>