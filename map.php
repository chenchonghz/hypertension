
<?php
session_start();
include('mail.php');
require('libs/Smarty.class.php');//����Smarty����ļ�
$smarty = new Smarty();//����һ��Smarty����
$smarty->display("header.tpl");//��ʾģ��
?><!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />  
<title>��ϵ����</title>  
<style type="text/css">  
html{height:100%}  
body{height:100%;margin:0px;padding:0px}  
#container{ height:70%; margin-right: auto; margin-left: auto; }
#container{width:50%}  
p { height: 100px; width: 1000px; margin-right: auto; margin-left: auto; }
</style>  
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>  
</head>  
  
<body>  
<br>
<p>���ĵ�ַ�������к�����������·7�ű��Ʋ�ҵ3��¥     <br>
 �������룺100094<br>


               E-mail��jszx@bcc.ac.cn<br>


               �ܻ���010-59341997 / 59341998<br>


               ����λ��:�����ҵ���� ������·7�ű��Ʋ�ҵ3��¥<br>
</p>

<div id="container"></div>  
<script type="text/javascript">  
var map = new BMap.Map("container");          // ������ͼʵ��  


//ͨ����γ����������ʼ����ͼ
var point = new BMap.Point(116.241172,40.084857);  // ����������  http://dev.baidu.com/wiki/static/map/API/tool/creatMap/

map.centerAndZoom(point, 15);                 // ��ʼ����ͼ���������ĵ�����͵�ͼ����  

//ͨ��������������ʼ����ͼ
//map.centerAndZoom("����");

var marker = new BMap.Marker(point);        // ������ע  
map.addOverlay(marker); 
  
map.enableScrollWheelZoom();  // ��������������  
map.enableKeyboard();         // �������̿���  
map.enableContinuousZoom();   // ������������Ч��  
map.enableInertialDragging(); // ����������קЧ�� 

map.addControl(new BMap.NavigationControl()); //��ӱ�׼��ͼ�ؼ�(���ϽǵķŴ���С������ק�ؼ�)
map.addControl(new BMap.ScaleControl());      //��ӱ����߿ؼ�(���½���ʾ�ı����߿ؼ�)
map.addControl(new BMap.OverviewMapControl()); // ����ͼ�ؼ�
map.addControl(new BMap.MapTypeControl());     //// �������ó�����Ϣʱ��MapTypeControl���л����ܲ��ܿ���map.setCurrentCity("����");  
map.setCurrentCity("������");

//����Զ���ؼ�

// ����һ���ؼ��࣬��function  
function ZoomControl(){  
  // ����Ĭ��ͣ��λ�ú�ƫ����  
  this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;  
  this.defaultOffset = new BMap.Size(50, 10);  
}  
  
// ͨ��JavaScript��prototype���Լ̳���BMap.Control  
ZoomControl.prototype = new BMap.Control();  

// �Զ���ؼ�����ʵ��initialize���������ҽ��ؼ���DOMԪ�ط���  
// �ڱ������д�����divԪ����Ϊ�ؼ�����������������ӵ���ͼ������  
ZoomControl.prototype.initialize = function(map){  
  // ����һ��DOMԪ��  
  var div = document.createElement("div");  
  // �������˵��  
  div.appendChild(document.createTextNode("�����м�������"));  
  // ������ʽ  
  div.style.cursor = "pointer";  
  div.style.border = "1px solid gray";  
  div.style.backgroundColor = "white";  
  // ���¼������һ�ηŴ�����  
  div.onclick = function(e){  
    alert("�����м�������������ҵ��");
  }  
  // ���DOMԪ�ص���ͼ��  
  map.getContainer().appendChild(div);  
  // ��DOMԪ�ط���  
  return div;  
}  

// �����ؼ�ʵ��  
var myZoomCtrl = new ZoomControl();  
// ��ӵ���ͼ����  
map.addControl(myZoomCtrl);  

 

//�����Ϣ����
var opts = {  
  width : 200,     // ��Ϣ���ڿ��  
  height: 70,     // ��Ϣ���ڸ߶�  
  title : "�����м�������"  // ��Ϣ���ڱ���  
}  
var infoWindow = new BMap.InfoWindow("���ã���ӭ����������ҵ��", opts);  // ������Ϣ���ڶ���  
map.openInfoWindow(infoWindow, map.getCenter());      // ����Ϣ���� 

</script>  
</body>  
</html>
<?php
    $smarty->display("footer.tpl");//��ʾģ��
?>
