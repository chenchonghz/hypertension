pdf("./r_tmp/xiaoke01.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="test",host="127.0.0.1")
sbp<-dbGetQuery(con,"select sbp from xiaoke01")
time<-dbGetQuery(con,"select regtime from xiaoke01")
plot(sbp,time);
dev.off
