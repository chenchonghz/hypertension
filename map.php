
<?php
session_start();
include('mail.php');
require('libs/Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->display("header.tpl");//显示模板
?><!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />  
<title>联系我们</title>  
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
<p>中心地址：北京市海淀区丰贤中路7号北科产业3号楼     <br>
 邮政编码：100094<br>


               E-mail：jszx@bcc.ac.cn<br>


               总机：010-59341997 / 59341998<br>


               所在位置:永丰产业基地 丰贤中路7号北科产业3号楼<br>
</p>

<div id="container"></div>  
<script type="text/javascript">  
var map = new BMap.Map("container");          // 创建地图实例  


//通过经纬度坐标来初始化地图
var point = new BMap.Point(116.241172,40.084857);  // 创建点坐标  http://dev.baidu.com/wiki/static/map/API/tool/creatMap/

map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别  

//通过城市名称来初始化地图
//map.centerAndZoom("长春");

var marker = new BMap.Marker(point);        // 创建标注  
map.addOverlay(marker); 
  
map.enableScrollWheelZoom();  // 开启鼠标滚轮缩放  
map.enableKeyboard();         // 开启键盘控制  
map.enableContinuousZoom();   // 开启连续缩放效果  
map.enableInertialDragging(); // 开启惯性拖拽效果 

map.addControl(new BMap.NavigationControl()); //添加标准地图控件(左上角的放大缩小左右拖拽控件)
map.addControl(new BMap.ScaleControl());      //添加比例尺控件(左下角显示的比例尺控件)
map.addControl(new BMap.OverviewMapControl()); // 缩略图控件
map.addControl(new BMap.MapTypeControl());     //// 仅当设置城市信息时，MapTypeControl的切换功能才能可用map.setCurrentCity("北京");  
map.setCurrentCity("北京市");

//添加自定义控件

// 定义一个控件类，即function  
function ZoomControl(){  
  // 设置默认停靠位置和偏移量  
  this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;  
  this.defaultOffset = new BMap.Size(50, 10);  
}  
  
// 通过JavaScript的prototype属性继承于BMap.Control  
ZoomControl.prototype = new BMap.Control();  

// 自定义控件必须实现initialize方法，并且将控件的DOM元素返回  
// 在本方法中创建个div元素作为控件的容器，并将其添加到地图容器中  
ZoomControl.prototype.initialize = function(map){  
  // 创建一个DOM元素  
  var div = document.createElement("div");  
  // 添加文字说明  
  div.appendChild(document.createTextNode("北京市计算中心"));  
  // 设置样式  
  div.style.cursor = "pointer";  
  div.style.border = "1px solid gray";  
  div.style.backgroundColor = "white";  
  // 绑定事件，点击一次放大两级  
  div.onclick = function(e){  
    alert("北京市计算中心生物事业部");
  }  
  // 添加DOM元素到地图中  
  map.getContainer().appendChild(div);  
  // 将DOM元素返回  
  return div;  
}  

// 创建控件实例  
var myZoomCtrl = new ZoomControl();  
// 添加到地图当中  
map.addControl(myZoomCtrl);  

 

//添加信息窗口
var opts = {  
  width : 200,     // 信息窗口宽度  
  height: 70,     // 信息窗口高度  
  title : "北京市计算中心"  // 信息窗口标题  
}  
var infoWindow = new BMap.InfoWindow("您好，欢迎来到生物事业部", opts);  // 创建信息窗口对象  
map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口 

</script>  
</body>  
</html>
<?php
    $smarty->display("footer.tpl");//显示模板
?>
