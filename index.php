<?php require_once('libs/localhost.php'); ?>
<?php require_once('libs/GaoXueYa.class.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>高血压早期预警及健康管理</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/slide.js"></script>
</head>
<body>
<div class="header"></div>
<div class="nav"> 
  <ul>
    <li><a class="hide" href="index.php">首页</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="denglu.php">健康管理</a> 
      <ul>
        <li><a href="reg.html">注册</a></li>
        <li><a href="denglu.php">登陆</a></li>
        <li><a href="login.php">个人中心</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">疾病管理</a> 
      <ul>
        <li><a href="http://114.251.219.47/">慢性病管理平台</a></li>
        <li><a href="http://124.127.245.60:8080/holter/">护心甲</a></li>
      </ul>
    </li>
    <li><a class="hide" href="#">解决方案</a> 
      <ul>
      <li><a href="#">个人解决方案</a></li>
      <li><a href="#">社区解决方案</a></li>
      <li><a href="#">高端人群解决方案</a></li>
      </ul>
    </li>
    <li><a class="hide" href="">数据分析平台</a> 
      <ul>
      <li><a href="http://192.168.60.125:8088/">NGS数据在线分析</a></li>
        <li><a href="rpdf.html">高血压早期预警</a></li>
        <li><a href="epigenome.html">epigenome浏览器</a></li>   
      </ul>
    </li>
    <li><a class="hide" href="gwas.html">高血压易感基因</a> 
      <ul>
      </ul>
    </li>
    <li><a class="hide" href="map.php">联系我们</a> 
    </li>
    <li><a class="hide" href="http://124.127.245.60/bbs">讨论一下吧</a> </li>
    <li><a class="hide" href="https://app-v.biocloud.org.cn/">云主机申请</a> </li>
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
    <input name="key" type="text" class="head_search_kuang" value="请输入基因名" style="color:#CCCCCC"/>&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="" type="button" class="tijiao" value="检索" />
  </form>
   <h2>网站公告</h2>
    <hr size="1" width="200" align="left"/>
     <div class="gundong">
    <marquee onmouseover=this.stop() onmouseout=this.start() scrollamount=1 scrollDelay=1 direction=up ">
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-12-06/70.html" >全基因组De novo测序解决方案</a>
      <br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-28/23.html" > 全基因组重测序解决方案</a>
      <br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/31.html" >宏基因组学测序解决方案</a><br><br />
      
      <a href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/31.html" >全基因组关联分析(GWAS)解决方案                                </a><br><br />
      
      <a  href="http://www.bioc.org.cn/China/shengwujisuanfuwu/2011-11-29/32.html" >转录组测序解决方案</a><br><br />
    </marquee></div>
  </div>
</div>


<div class="content">
  <div class="content_1"><h1>最新动态</h1>
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
  
  <div class="content_2"> <h1>医学知识</h1>
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
  
  <div class="content_3"> <iframe  src="yun.php" frameborder="no" scrolling="no" width="275" height="250">此处显示  id "yun" 的内容</iframe></div>
  
  <div class="content_4"><h1>健康预警</h1>
      <hr size="1" width="200" align="left"/>
  <img src="images/pingg.jpg" alt="诊断模型" /></div>
  
  <div class="content_5"><script type="text/javascript" src="http://ji.revolvermaps.com/2/1.js?i=8kfytdgquag&amp;s=250&amp;m=0&amp;v=false&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script></div>
</div>

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
