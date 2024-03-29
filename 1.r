pdf("./r_tmp/1.pdf")
case=read.table("case2.txt",head=T)
plot(case$case.age,ylab="age",xlab="sample")
dev.off()
pdf("./r_tmp/2.pdf")
plot(case$case.sbp,ylab="sbp",xlab="sample")
dev.off()
pdf("./r_tmp/3.pdf")
plot(case$case.dbp,ylab="dbp",xlab="sample")
dev.off()
pdf("./r_tmp/4.pdf")
tmp=cbind(case$case.gene, case$case.sex, case$case.bmi, case$case.salt, case$case.oil, case$case.tobacco, case$case.alcohol, case$case.loneliness, case$case.pressure)
boxplot(tmp,las=2)
dev.off()
pdf("./r_tmp/5.pdf")
library(corrplot)
corrplot(cor(case[,-c(3,4)]),method="number")
dev.off()
