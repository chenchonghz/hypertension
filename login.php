<?php require('libs/Smarty.class.php');//包含Smarty类库文件
    $smarty = new Smarty();//创建一个Smarty对象
    $smarty->display("header.tpl");//显示模板
?>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="js/tab.js"></script>
<script language="javascript" type="text/javascript" src="js/date.js"></script>
<link rel="StyleSheet" href="css/tab.css" type="text/css" />
<div class="geren">
<?php 
//登录
session_start();
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="denglu.php">登录</a>';
    exit;
}
if(!isset($_POST['submit'])){
    //exit('非法访问!');
}
$username = $_POST['username'];
$password = $_POST['password'];
//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");

if($result = mysql_fetch_array($check_query)){ 
    //登录成功
	if(strcmp($_SESSION['identifying'],$_POST['identifier']) == 0) {
    $_SESSION['username'] = $username;//创建session变量
    $_SESSION['userid'] = $result['uid'];
    echo <<<END
尊敬的,$username,欢迎你！进入 <a href="my.php">用户中心</a> <br/>
点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />
END;
    if(file_exists("upload/$username.jpg")){
    	echo <<<END
<img src="upload/$username.jpg" />
<a href="jpegcam/index.php">点此拍摄图像</a>
END;
    }else{
    	echo <<<END
<img src="images/showavatar.jpg" />
<a href="jpegcam/index.php">点此拍摄图像</a>
END;
    }   
}
} elseif( isset($_SESSION['username']))
  { $username=$_SESSION['username'];
  echo <<<END
尊敬的,$username,欢迎你！进入 <a href="my.php">用户中心</a> <br/>
点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />
END;
 if(file_exists("upload/$username.jpg")){
    	echo <<<END
<img src="upload/$username.jpg" />
<a href="jpegcam/index.php">点此拍摄图像</a>
END;
    }else{
    	echo <<<END
<img src="images/showavatar.jpg" /><p>xioake</p>
<a href="jpegcam/index.php">点此拍摄图像</a>
END;
    } 
  
  }
else {
   exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

//注销登录
?>
 <div class="tab">
<div id="bg" class="xixi1">
		<div id="font1" class="tab1" onClick="setTab03Syn(1);document.getElementById('bg').className='xixi1'">血压</div>
		<div id="font2" class="tab2" onClick="setTab03Syn(2);document.getElementById('bg').className='xixi2'">血糖</div>
		<div id="font3" class="tab3" onClick="setTab03Syn(3);document.getElementById('bg').className='xixi3'">运动</div>
        <div id="font4" class="tab4" onClick="setTab03Syn(4);document.getElementById('bg').className='xixi4'">血氧</div>
        <div id="font5" class="tab5" onClick="setTab03Syn(5);document.getElementById('bg').className='xixi5'">体温</div>
        <div id="font6" class="tab6" onClick="setTab03Syn(6);document.getElementById('bg').className='xixi6'">体重</div>
        <div id="font7" class="tab7" onClick="setTab03Syn(7);document.getElementById('bg').className='xixi7'">体脂</div>
        <div id="font8" class="tab8" onClick="setTab03Syn(8);document.getElementById('bg').className='xixi8'">心电</div>
        <div id="font9" class="tab9" onClick="setTab03Syn(9);document.getElementById('bg').className='xixi9'">病历</div>
   </div>
    <div id=TabTab03Con1>
    <form method="post" action="addxueya.php" >
    <table width="1000" border="0">
  <tr>
    <td><label>收缩压（高压）<span>*</span> <input name="sbp"  type="text"> 毫米汞柱</label></td>
    <td><label>测量日期<input name="regday" class="Wdate" type="text" onClick="WdatePicker()"></label></td>
  </tr>
  <tr>
    <td><label>舒张压（低压）<span>*</span> <input name="dbp" type="text"> 毫米汞柱</label></td>
    <td> <label>测量时间<input id="txt" name="regtime" type="text" onClick="startTime()"> <span>单击获取当前时间</span></label></td>
  </tr>
  <tr>
    <td><label>心率<span>*</span> <input name="heartrate" type="text"> 次/分钟</label></td>
    <td>&nbsp;</td>
  </tr>
</table>   
    <hr>
    <table width="914" height="100" border="0">
  <tr  height="20" align="center">
    <td width="135" rowspan="6"> 不适症状 </td>
    <td width="108" align="center" valign="middle"><input type="checkbox" name="vehicle" value="Bike" checked="checked" />视力模糊</td>
    <td width="128"><input type="checkbox" name="vehicle" value="Car" />气短</td>
    <td width="193"><input type="checkbox" name="vehicle" value="Airplane" />肢体麻木 </td>
    <td width="193"> <input type="checkbox" name="vehicle" value="Airplane" />烦躁易怒</td>
    <td width="131"><input type="checkbox" name="vehicle" value="Airplane" />失眠</td>
  </tr>
  <tr height="20" align="center">
    <td> <input type="checkbox" name="vehicle" value="Airplane" />心慌</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />头痛 </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />疲乏无力</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />头部沉重</td>
    <td> <input type="checkbox" name="vehicle" value="Airplane" />心率加快</td>
  </tr>
  <tr height="20" align="center">
    <td><input type="checkbox" name="vehicle" value="Airplane" />头晕 </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />烦躁</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />心悸心慌 </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />口干舌燥 </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />胸闷 </td>
  </tr>
  <tr height="20" align="center">
    <td height="50" ><input type="checkbox" name="vehicle" value="Airplane" />耳鸣</td>
    <td> <input type="checkbox" name="vehicle" value="Airplane" />出汗乏力</td>
    <td> 其他  <input  type="text"> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>



 <hr />

 
可能原因
<input type="checkbox" name="vehicle" value="Bike" checked="checked" />视力模糊
<input type="checkbox" name="vehicle" value="Car" />气短
<input type="checkbox" name="vehicle" value="Airplane" />肢体麻木 
 <input type="checkbox" name="vehicle" value="Airplane" />烦躁易怒
 <input type="checkbox" name="vehicle" value="Airplane" />失眠
 <input type="checkbox" name="vehicle" value="Airplane" />心慌
 <input type="checkbox" name="vehicle" value="Airplane" />头痛 
 <input type="checkbox" name="vehicle" value="Airplane" />疲乏无力
 <input type="checkbox" name="vehicle" value="Airplane" />头部沉重
 <input type="checkbox" name="vehicle" value="Airplane" />心率加快
 <input type="checkbox" name="vehicle" value="Airplane" />头晕 
 <input type="checkbox" name="vehicle" value="Airplane" />烦躁
 <input type="checkbox" name="vehicle" value="Airplane" />心悸心慌 
 <input type="checkbox" name="vehicle" value="Airplane" />口干舌燥 
 <input type="checkbox" name="vehicle" value="Airplane" />胸闷 
 <input type="checkbox" name="vehicle" value="Airplane" />耳鸣
 <input type="checkbox" name="vehicle" value="Airplane" />出汗乏力
 其他<input  type="text"> 
 <hr>
 <input name="submit" type="submit" value="提交" />
    </form>

    </div>
	<div id=TabTab03Con2 style="display:none">
    <form action="#" method="post"><label>血糖* <input type="text" name="xuetang" />毫摩尔/升</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    <label><input name="" type="radio" value="" />空腹血糖</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input name="" type="radio" value="" />餐后血糖</label>
    &nbsp;&nbsp;&nbsp;&nbsp;<label>测量时间<input name="time" type="text"> 例如12:31</label>
    <hr />
    不适症状  
     <input type="checkbox" name="vehicle" value="Bike" checked="checked" />视力模糊
<input type="checkbox" name="vehicle" value="Car" />肢体疼痛针刺感
<input type="checkbox" name="vehicle" value="Airplane" />多饮
 <input type="checkbox" name="vehicle" value="Airplane" />头晕
 <input type="checkbox" name="vehicle" value="Airplane" />体重减轻
 <input type="checkbox" name="vehicle" value="Airplane" />伤口不易愈合
 <input type="checkbox" name="vehicle" value="Airplane" />多食 
 <input type="checkbox" name="vehicle" value="Airplane" />易饥饿
 <input type="checkbox" name="vehicle" value="Airplane" />眩晕
 <input type="checkbox" name="vehicle" value="Airplane" />厌食
 <input type="checkbox" name="vehicle" value="Airplane" />排尿增多 
 <input type="checkbox" name="vehicle" value="Airplane" />口腔溃疡或灼烧感
 <input type="checkbox" name="vehicle" value="Airplane" />无力
 <input type="checkbox" name="vehicle" value="Airplane" />疲乏无力 
 <input type="checkbox" name="vehicle" value="Airplane" />排尿不适或尿痛
 <input type="checkbox" name="vehicle" value="Airplane" />心悸心慌
 <input type="checkbox" name="vehicle" value="Airplane" />皮疹
 <input type="checkbox" name="vehicle" value="Airplane" />肢体麻木
 <input type="checkbox" name="vehicle" value="Airplane" />夜尿增多
 <input type="checkbox" name="vehicle" value="Airplane" />心慌出汗
 <input type="checkbox" name="vehicle" value="Airplane" />外阴瘙痒
 <input type="checkbox" name="vehicle" value="Airplane" />烦渴多尿
 
<label> 其他<input  type="text"> </label>
 <hr>
  可能原因<input type="checkbox" name="vehicle" value="Bike" checked="checked" />没坚持运动
<input type="checkbox" name="vehicle" value="Car" />主食吃太多
<input type="checkbox" name="vehicle" value="Airplane" />甜食吃太多 
 <input type="checkbox" name="vehicle" value="Airplane" />过量服用降糖药
 <input type="checkbox" name="vehicle" value="Airplane" />血糖一直较高
 <input type="checkbox" name="vehicle" value="Airplane" />漏服降糖药
 <input type="checkbox" name="vehicle" value="Airplane" />剧烈运动过
 <input type="checkbox" name="vehicle" value="Airplane" />长时间饥饿
 
<label> 其他<input  type="text">   </label>
<br />
<br />
<input name="" type="button" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="" type="button" value="放弃" />
</form>
    </div>
    <div id=TabTab03Con3 style="display:none">
     <form action="#" method="post">
    <label>运动步数* <input type="text" name="" /></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    <label>心率<span>*</span> <input name="heartrate" type="text"> 次/分钟</label>
    </form>
    </div>
    <div id=TabTab03Con4 style="display:none">
    <form action="#" method="post">
    <label>血氧饱和度<span>*</span> <input name="xueyang" type="text"> %</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量时间<input id="txt2" name="time" type="text" onClick="startTime2()"> 例如12:31</label>
    </form>
    </div>
    
    <div id=TabTab03Con5 style="display:none">
    <form action="#" method="post">
    <label>体温<span>*</span> <input name="temp" type="text"> 摄氏度</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>体温类型<span>*</span> 
     <label><input type="radio" name="RadioGroup1" value="arm" id="RadioGroup1_0" />腋下温度</label>
     <label><input type="radio" name="RadioGroup1" value="mouth" id="RadioGroup1_1" />口腔温度</label>
     <label><input type="radio" name="RadioGroup1" value="colon" id="RadioGroup1_2" />直肠温度</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量时间<input id="txt3" name="time" type="text" onClick="startTime3()"> 例如12:31</label>
    </form>
    </div>
    <div id=TabTab03Con6 style="display:none">
    <form action="#" method="post">
    <label>体重<span>*</span> <input name="weight" type="text"> 公斤</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>身高<span>*</span> <input name="height" type="text"> 厘米</label>
    </form>
    </div>
    <div id=TabTab03Con7 style="display:none">
    <form action="#" method="post">
    <label>脂肪率<span>*</span> <input name="lip" type="text"> %</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>肌肉率<span>*</span> <input name="muscle" type="text"> %</label><br/>
     <label>基础代谢率率<span>*</span> <input name="ibm" type="text"> %</label><br/>
    </form>
    </div>
    <div id=TabTab03Con8 style="display:none">
    <form enctype="multipart/form-data" action="#" method="post" >
    <label>心电图上传：<input type="file" name="file" id="file" /> <br />
    <input type="submit" name="submit" value="确认上传" /><br />
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>测量日期<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
   
    </form>
    </div>
    <div id=TabTab03Con9 style="display:none">第9个</div>
</div>
</div>
<?php
    $smarty->display("footer.tpl");//显示模板
?>