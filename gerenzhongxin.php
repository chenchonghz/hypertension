<?php
require('libs/Smarty.class.php');//����Smarty����ļ�
$smarty = new Smarty();//����һ��Smarty����
$smarty->display("header.tpl");//��ʾģ��
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

		d.add(0,-1,'��������');
		d.add(1,0,'�ҵ�����','example01.html');
		d.add(2,0,'����','example01.html');
		d.add(3,1,'Node 1.1','example01.html');
		d.add(4,0,'Ѫѹ�仯��¼','example01.html');
		d.add(5,3,'Node 1.1.1','example01.html');
		d.add(6,5,'Node 1.1.1.1','example01.html');
		d.add(7,0,'Ѫѹ����','example01.html');
		d.add(8,1,'Node 1.2','example01.html');
		d.add(9,0,'��������','example01.html','Pictures I\'ve taken over the years','','','img/imgfolder.gif');
		d.add(10,9,'The trip to Iceland','example01.html','Pictures of Gullfoss and Geysir');
		d.add(11,9,'Mom\'s birthday','example01.html');
		d.add(12,0,'Recycle Bin','example01.html','','','img/trash.gif');

		document.write(d);

		//-->
	</script>

</div>
</body>

</html>