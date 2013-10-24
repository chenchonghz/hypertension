pdf("./r_tmp/peizy.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="test",host="127.0.0.1")
sbp<-dbGetQuery(con,"select sbp from peizy")
time<-dbGetQuery(con,"select regtime from peizy")
plot(sbp,time);
dev.off
