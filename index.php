<?php require_once('libs/localhost.php'); ?>
<?php require_once('libs/GaoXueYa.class.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ѫѹ����Ԥ������������</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/slide.js"></script>
</head>
<body>
<div class="header"></div>
<div class="nav"> 
  <ul>
    <li><a class="hide" href="index.php">��ҳ</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="denglu.php">��������</a> 
      <ul>
        <li><a href="reg.html">ע��</a></li>
        <li><a href="denglu.php">��½</a></li>
        <li><a href="login.php">��������</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">��������</a> 
      <ul>
        <li><a href="http://114.251.219.47/">���Բ�����ƽ̨</a></li>
        <li><a href="http://124.127.245.60:8080/holter/">���ļ�</a></li>
      </ul>
    </li>
    <li><a class="hide" href="#">�������</a> 
      <ul>
      <li><a href="#">���˽������</a></li>
      <li><a href="#">�����������</a></li>
      <li><a href="#">�߶���Ⱥ�������</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">���ݷ���ƽ̨</a> 
      <ul>
      <li><a href="http://192.168.60.125:8088/">NGS�������߷���</a></li>
        <li><a href="rpdf.html">��Ѫѹ����Ԥ��</a></li>
        <li><a href="epigenome.html">epigenome�����</a></li>   
      </ul>
    </li>
    <li><a class="hide" href="gwas.html">��Ѫѹ�׸л���</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="map.php">��ϵ����</a> 
    </li>
    <li><a class="hide" href="http://124.127.245.60/bbs">����һ�°�</a> </li>
    <li><a class="hide" href="https://app-v.biocloud.org.cn/">����������</a> </li>
  </ul> 
</div>
<div id="hr"><hr width="1000" size="5"/></div>

 
 
  

 
<div class="slide"><div id="box">
    <ul class="list">
      <li class="current"><img src="./images/004.jpg" width="735" height="289" /></li>
        <li><img src="./images/001.jpg" width="735" height="289" /></li>
        <li><img src="./images/003.jpg" width="735" height="289" /></li>
        <li><img src="./images/002.jpg" width="735" height="289" /></li>
        <li><img src="./images/005.jpg" width="735" height="289" border="0" usemap="#Map" />
  <map name="Map" id="Map"><area shape="rect" coords="50,94,134,134" href="http://www.baidu.com" />
  <area shape="rect" coords="158,81,328,166" href="http://www.google.com" target="_blank" />
  </map></li>
    </ul>
  <ul class="count">
    <li class="current">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
    </ul>
  </div>
  
  
  
  
  <div class="notice">
  <form action="http://www.google.com" method="get" name="form1">
    <input name="key" type="text" class="head_search_kuang" value="�����������" style="color:#CCCCCC"/>&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="" type="button" class="tijiao" value="����" />
  </form>
   <h2>��վ����</h2>
    <hr size="1" width="200" align="left"/>
     <div class="gundong">
    <marquee onmouseover=this.stop() onmouseout=this.start() scrollamount=1 scrollDelay=1 direction=up ">
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-12-06/70.html" >ȫ������De novo����������</a>
      <br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-28/23.html" > ȫ�������ز���������</a>
      <br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/31.html" >�������ѧ����������</a><br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/31.html" >ȫ�������������(GWAS)�������                                </a><br><br />
      
      <a  href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/32.html" >ת¼�����������</a><br><br />
    </marquee></div>
  </div>
</div>


<div class="content">
  <div class="content_1"><h1>���¶�̬</h1>
      <hr size="1" width="200" align="left"/>
      <?php 
mysql_select_db("hypertension",$con);
$result = mysql_query("SELECT * FROM news ORDER BY news_id DESC   limit 6");
$res_kepu = mysql_query("SELECT * FROM kepu ORDER BY kepu_id DESC   limit 6");
while($row = mysql_fetch_array($result))
  { ?>
      <ul class="news">
          <li><a style="text-decoration:none";  href="listnews.php?id=<?php echo $row['news_id']; ?>"> <?php $xianshi = 35; 
	echo cutstr( $row['news_title'],$xianshi); ?></a></li>
          <?php echo "--------------------------------"; ?>
      </ul>
      <?php
 }
mysql_close($con);
?>
  </div>
  
  <div class="content_2"> <h1>ҽѧ֪ʶ</h1>
      <hr size="1" width="200" align="left"/>
      <?php while($ro = mysql_fetch_array($res_kepu))
     {   ?>
      <ul>
          <li><a style="text-decoration:none";  href="listkepu.php?id=<?php echo $ro['kepu_id']; ?>"> <?php $xianshi = 35; 
	      echo cutstr( $ro['kepu_title'],$xianshi); ?></a></li>
          <?php echo "---------------------------------"; ?>      
      </ul>
       <?php } ?>
  </div>
  
  <div class="content_3"> <iframe  src="yun.php" frameborder="no" scrolling="no" width="275" height="250">�˴���ʾ  id "yun" ������</iframe></div>
  
  <div class="content_4"><h1>����Ԥ��</h1>
      <hr size="1" width="200" align="left"/>
  <img src="images/pingg.jpg" alt="���ģ��" /></div>
  
  <div class="content_5"><script type="text/javascript" src="http://ji.revolvermaps.com/2/1.js?i=8kfytdgquag&amp;s=250&amp;m=0&amp;v=false&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script></div>
</div>

<div class="footer">
  <div id="end"></div>
  
  <div id="contact"><a href="http://cbioportal.org/">cBioPortal</a> |
<a href="http://www.mskcc.org/mskcc/html/44.cfm">MSKCC</a> |
<a href="http://cancergenome.nih.gov/">TCGA</a>
<br>
Questions and feedback:  <a href="mailto:guixk@bcc.ac.cn" title="Contact us">guixk@bcc.ac.cn</a>
</div> <img src="images/bcc.png" alt="�����м�������" longdesc="http://www.bcc.ac.cn" />
  <div id="di"></div>
</div>
</body>
</html>
