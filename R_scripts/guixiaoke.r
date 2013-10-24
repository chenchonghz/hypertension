pdf("./r_tmp/guixiaoke.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="test",host="127.0.0.1")
sbp<-dbGetQuery(con,"select sbp from guixiaoke")
time<-dbGetQuery(con,"select regtime from guixiaoke")
plot(sbp,time);
dev.off
