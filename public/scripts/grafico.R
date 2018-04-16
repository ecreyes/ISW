csv<-read.csv(file="scripts/archivo.csv",header=T)
png(filename="output/test.png", width=500, height=500)
plot(csv$Close, type="o", col="blue")
graphics.off()