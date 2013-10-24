pdf("./r_tmp/7.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="hypertension",host="127.0.0.1")
control<-dbGetQuery(con,"select * from controls where sbp<140 and dbp<90 and age>30")
control<-control[,-1]
boxplot(control,las=2)
dev.off
