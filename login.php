<?php require('libs/Smarty.class.php');//����Smarty����ļ�
    $smarty = new Smarty();//����һ��Smarty����
    $smarty->display("header.tpl");//��ʾģ��
?>
<script language="javascript" type="text/javascript" src="My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="js/tab.js"></script>
<script language="javascript" type="text/javascript" src="js/date.js"></script>
<link rel="StyleSheet" href="css/tab.css" type="text/css" />
<div class="geren">
<?php 
//��¼
session_start();
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'ע����¼�ɹ�������˴� <a href="denglu.php">��¼</a>';
    exit;
}
if(!isset($_POST['submit'])){
    //exit('�Ƿ�����!');
}
$username = $_POST['username'];
$password = $_POST['password'];
//�������ݿ������ļ�
include('conn.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");

if($result = mysql_fetch_array($check_query)){ 
    //��¼�ɹ�
	if(strcmp($_SESSION['identifying'],$_POST['identifier']) == 0) {
    $_SESSION['username'] = $username;//����session����
    $_SESSION['userid'] = $result['uid'];
    echo <<<END
�𾴵�,$username,��ӭ�㣡���� <a href="my.php">�û�����</a> <br/>
����˴� <a href="login.php?action=logout">ע��</a> ��¼��<br />
END;
    if(file_exists("upload/$username.jpg")){
    	echo <<<END
<img src="upload/$username.jpg" />
<a href="jpegcam/index.php">�������ͼ��</a>
END;
    }else{
    	echo <<<END
<img src="images/showavatar.jpg" />
<a href="jpegcam/index.php">�������ͼ��</a>
END;
    }   
}
} elseif( isset($_SESSION['username']))
  { $username=$_SESSION['username'];
  echo <<<END
�𾴵�,$username,��ӭ�㣡���� <a href="my.php">�û�����</a> <br/>
����˴� <a href="login.php?action=logout">ע��</a> ��¼��<br />
END;
 if(file_exists("upload/$username.jpg")){
    	echo <<<END
<img src="upload/$username.jpg" />
<a href="jpegcam/index.php">�������ͼ��</a>
END;
    }else{
    	echo <<<END
<img src="images/showavatar.jpg" /><p>xioake</p>
<a href="jpegcam/index.php">�������ͼ��</a>
END;
    } 
  
  }
else {
   exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}

//ע����¼
?>
 <div class="tab">
<div id="bg" class="xixi1">
		<div id="font1" class="tab1" onClick="setTab03Syn(1);document.getElementById('bg').className='xixi1'">Ѫѹ</div>
		<div id="font2" class="tab2" onClick="setTab03Syn(2);document.getElementById('bg').className='xixi2'">Ѫ��</div>
		<div id="font3" class="tab3" onClick="setTab03Syn(3);document.getElementById('bg').className='xixi3'">�˶�</div>
        <div id="font4" class="tab4" onClick="setTab03Syn(4);document.getElementById('bg').className='xixi4'">Ѫ��</div>
        <div id="font5" class="tab5" onClick="setTab03Syn(5);document.getElementById('bg').className='xixi5'">����</div>
        <div id="font6" class="tab6" onClick="setTab03Syn(6);document.getElementById('bg').className='xixi6'">����</div>
        <div id="font7" class="tab7" onClick="setTab03Syn(7);document.getElementById('bg').className='xixi7'">��֬</div>
        <div id="font8" class="tab8" onClick="setTab03Syn(8);document.getElementById('bg').className='xixi8'">�ĵ�</div>
        <div id="font9" class="tab9" onClick="setTab03Syn(9);document.getElementById('bg').className='xixi9'">����</div>
   </div>
    <div id=TabTab03Con1>
    <form method="post" action="addxueya.php" >
    <table width="1000" border="0">
  <tr>
    <td><label>����ѹ����ѹ��<span>*</span> <input name="sbp"  type="text"> ���׹���</label></td>
    <td><label>��������<input name="regday" class="Wdate" type="text" onClick="WdatePicker()"></label></td>
  </tr>
  <tr>
    <td><label>����ѹ����ѹ��<span>*</span> <input name="dbp" type="text"> ���׹���</label></td>
    <td> <label>����ʱ��<input id="txt" name="regtime" type="text" onClick="startTime()"> <span>������ȡ��ǰʱ��</span></label></td>
  </tr>
  <tr>
    <td><label>����<span>*</span> <input name="heartrate" type="text"> ��/����</label></td>
    <td>&nbsp;</td>
  </tr>
</table>   
    <hr>
    <table width="914" height="100" border="0">
  <tr  height="20" align="center">
    <td width="135" rowspan="6"> ����֢״ </td>
    <td width="108" align="center" valign="middle"><input type="checkbox" name="vehicle" value="Bike" checked="checked" />����ģ��</td>
    <td width="128"><input type="checkbox" name="vehicle" value="Car" />����</td>
    <td width="193"><input type="checkbox" name="vehicle" value="Airplane" />֫����ľ </td>
    <td width="193"> <input type="checkbox" name="vehicle" value="Airplane" />������ŭ</td>
    <td width="131"><input type="checkbox" name="vehicle" value="Airplane" />ʧ��</td>
  </tr>
  <tr height="20" align="center">
    <td> <input type="checkbox" name="vehicle" value="Airplane" />�Ļ�</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />ͷʹ </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />ƣ������</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />ͷ������</td>
    <td> <input type="checkbox" name="vehicle" value="Airplane" />���ʼӿ�</td>
  </tr>
  <tr height="20" align="center">
    <td><input type="checkbox" name="vehicle" value="Airplane" />ͷ�� </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />����</td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />�ļ��Ļ� </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />�ڸ����� </td>
    <td><input type="checkbox" name="vehicle" value="Airplane" />���� </td>
  </tr>
  <tr height="20" align="center">
    <td height="50" ><input type="checkbox" name="vehicle" value="Airplane" />����</td>
    <td> <input type="checkbox" name="vehicle" value="Airplane" />��������</td>
    <td> ����  <input  type="text"> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>



 <hr />

 
����ԭ��
<input type="checkbox" name="vehicle" value="Bike" checked="checked" />����ģ��
<input type="checkbox" name="vehicle" value="Car" />����
<input type="checkbox" name="vehicle" value="Airplane" />֫����ľ 
 <input type="checkbox" name="vehicle" value="Airplane" />������ŭ
 <input type="checkbox" name="vehicle" value="Airplane" />ʧ��
 <input type="checkbox" name="vehicle" value="Airplane" />�Ļ�
 <input type="checkbox" name="vehicle" value="Airplane" />ͷʹ 
 <input type="checkbox" name="vehicle" value="Airplane" />ƣ������
 <input type="checkbox" name="vehicle" value="Airplane" />ͷ������
 <input type="checkbox" name="vehicle" value="Airplane" />���ʼӿ�
 <input type="checkbox" name="vehicle" value="Airplane" />ͷ�� 
 <input type="checkbox" name="vehicle" value="Airplane" />����
 <input type="checkbox" name="vehicle" value="Airplane" />�ļ��Ļ� 
 <input type="checkbox" name="vehicle" value="Airplane" />�ڸ����� 
 <input type="checkbox" name="vehicle" value="Airplane" />���� 
 <input type="checkbox" name="vehicle" value="Airplane" />����
 <input type="checkbox" name="vehicle" value="Airplane" />��������
 ����<input  type="text"> 
 <hr>
 <input name="submit" type="submit" value="�ύ" />
    </form>

    </div>
	<div id=TabTab03Con2 style="display:none">
    <form action="#" method="post"><label>Ѫ��* <input type="text" name="xuetang" />��Ħ��/��</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    <label><input name="" type="radio" value="" />�ո�Ѫ��</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input name="" type="radio" value="" />�ͺ�Ѫ��</label>
    &nbsp;&nbsp;&nbsp;&nbsp;<label>����ʱ��<input name="time" type="text"> ����12:31</label>
    <hr />
    ����֢״  
     <input type="checkbox" name="vehicle" value="Bike" checked="checked" />����ģ��
<input type="checkbox" name="vehicle" value="Car" />֫����ʹ��̸�
<input type="checkbox" name="vehicle" value="Airplane" />����
 <input type="checkbox" name="vehicle" value="Airplane" />ͷ��
 <input type="checkbox" name="vehicle" value="Airplane" />���ؼ���
 <input type="checkbox" name="vehicle" value="Airplane" />�˿ڲ�������
 <input type="checkbox" name="vehicle" value="Airplane" />��ʳ 
 <input type="checkbox" name="vehicle" value="Airplane" />�׼���
 <input type="checkbox" name="vehicle" value="Airplane" />ѣ��
 <input type="checkbox" name="vehicle" value="Airplane" />��ʳ
 <input type="checkbox" name="vehicle" value="Airplane" />�������� 
 <input type="checkbox" name="vehicle" value="Airplane" />��ǻ��������ո�
 <input type="checkbox" name="vehicle" value="Airplane" />����
 <input type="checkbox" name="vehicle" value="Airplane" />ƣ������ 
 <input type="checkbox" name="vehicle" value="Airplane" />�����ʻ���ʹ
 <input type="checkbox" name="vehicle" value="Airplane" />�ļ��Ļ�
 <input type="checkbox" name="vehicle" value="Airplane" />Ƥ��
 <input type="checkbox" name="vehicle" value="Airplane" />֫����ľ
 <input type="checkbox" name="vehicle" value="Airplane" />ҹ������
 <input type="checkbox" name="vehicle" value="Airplane" />�Ļų���
 <input type="checkbox" name="vehicle" value="Airplane" />��������
 <input type="checkbox" name="vehicle" value="Airplane" />���ʶ���
 
<label> ����<input  type="text"> </label>
 <hr>
  ����ԭ��<input type="checkbox" name="vehicle" value="Bike" checked="checked" />û����˶�
<input type="checkbox" name="vehicle" value="Car" />��ʳ��̫��
<input type="checkbox" name="vehicle" value="Airplane" />��ʳ��̫�� 
 <input type="checkbox" name="vehicle" value="Airplane" />�������ý���ҩ
 <input type="checkbox" name="vehicle" value="Airplane" />Ѫ��һֱ�ϸ�
 <input type="checkbox" name="vehicle" value="Airplane" />©������ҩ
 <input type="checkbox" name="vehicle" value="Airplane" />�����˶���
 <input type="checkbox" name="vehicle" value="Airplane" />��ʱ�伢��
 
<label> ����<input  type="text">   </label>
<br />
<br />
<input name="" type="button" value="�ύ" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="" type="button" value="����" />
</form>
    </div>
    <div id=TabTab03Con3 style="display:none">
     <form action="#" method="post">
    <label>�˶�����* <input type="text" name="" /></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    <label>����<span>*</span> <input name="heartrate" type="text"> ��/����</label>
    </form>
    </div>
    <div id=TabTab03Con4 style="display:none">
    <form action="#" method="post">
    <label>Ѫ�����Ͷ�<span>*</span> <input name="xueyang" type="text"> %</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>����ʱ��<input id="txt2" name="time" type="text" onClick="startTime2()"> ����12:31</label>
    </form>
    </div>
    
    <div id=TabTab03Con5 style="display:none">
    <form action="#" method="post">
    <label>����<span>*</span> <input name="temp" type="text"> ���϶�</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>��������<span>*</span> 
     <label><input type="radio" name="RadioGroup1" value="arm" id="RadioGroup1_0" />Ҹ���¶�</label>
     <label><input type="radio" name="RadioGroup1" value="mouth" id="RadioGroup1_1" />��ǻ�¶�</label>
     <label><input type="radio" name="RadioGroup1" value="colon" id="RadioGroup1_2" />ֱ���¶�</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>����ʱ��<input id="txt3" name="time" type="text" onClick="startTime3()"> ����12:31</label>
    </form>
    </div>
    <div id=TabTab03Con6 style="display:none">
    <form action="#" method="post">
    <label>����<span>*</span> <input name="weight" type="text"> ����</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>���<span>*</span> <input name="height" type="text"> ����</label>
    </form>
    </div>
    <div id=TabTab03Con7 style="display:none">
    <form action="#" method="post">
    <label>֬����<span>*</span> <input name="lip" type="text"> %</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
     <label>������<span>*</span> <input name="muscle" type="text"> %</label><br/>
     <label>������л����<span>*</span> <input name="ibm" type="text"> %</label><br/>
    </form>
    </div>
    <div id=TabTab03Con8 style="display:none">
    <form enctype="multipart/form-data" action="#" method="post" >
    <label>�ĵ�ͼ�ϴ���<input type="file" name="file" id="file" /> <br />
    <input type="submit" name="submit" value="ȷ���ϴ�" /><br />
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>��������<input class="Wdate" type="text" onClick="WdatePicker()"></label><br/>
   
    </form>
    </div>
    <div id=TabTab03Con9 style="display:none">��9��</div>
</div>
</div>
<?php
    $smarty->display("footer.tpl");//��ʾģ��
?>