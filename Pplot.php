<?php 
include("libs/PhpPlot.php");
$username=
$b="guixiaoe";//the name of the pdf R will be created
$a="pdf(\"./r_tmp/$b.pdf\")
library(RMySQL)
con<-dbConnect(MySQL(), user=\"root\",password=\"newpassword\",dbname=\"test\",host=\"127.0.0.1\")
sbp<-dbGetQuery(con,\"select sbp from $username\")
time<-dbGetQuery(con,\"select regtime from $username\")
plot(sbp,time);
dev.off
";//R code
$r="guixiaoe.r";
$p1=new PhpPlot($b, $a,$r);
$p1->say();
$p1->create();
$p1->plot();
?>