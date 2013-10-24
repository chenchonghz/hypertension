pdf("./r_tmp/guixiaoe.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="test",host="127.0.0.1")
sbp<-dbGetQuery(con,"select sbp from guixiaoe")
time<-dbGetQuery(con,"select regtime from guixiaoe")
plot(sbp,time);
dev.off
