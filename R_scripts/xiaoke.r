pdf("./r_tmp/xiaoke.pdf")
library(RMySQL)
con<-dbConnect(MySQL(), user="root",password="newpassword",dbname="test",host="127.0.0.1")
control<-dbGetQuery(con,"select sbp from xiaoke")
plot(control);
dev.off
