<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=gb2312\" />
<title>无标题文档</title>
</head>

<body>

<?php 

$b="10";//the name of the pdf R will be created
$a="pdf(\"./r_tmp/$b.pdf\")
library(RMySQL)
con<-dbConnect(MySQL(), user=\"root\",password=\"newpassword\",dbname=\"hypertension\",host=\"127.0.0.1\")
control<-dbGetQuery(con,\"select * from controls where sbp<140 and dbp<90 and age>30\")
control<-control[,-1]
boxplot(control,las=2)
dev.off
";//R code
echo $a;
$file = 'gxk.r';
exec("touch ./R_scripts/$file");
//if (is_writable($file) == false) {
//       die('我是鸡毛,我不能');
//}
file_put_contents ("./R_scripts/$file", $a);
?>
<?php
exec("cat ./R_scripts/$file | /usr/local/bin/R --vanilla",$output);
exec("convert ./r_tmp/$b.pdf ./r_tmp/$b.png");
exec("chown root ./r_tmp/$b.png");
exec("cp ./r_tmp/$b.png ./");
echo "<img src='$b.png'>";
?>
</body>
</html>
