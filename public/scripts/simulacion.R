args <- commandArgs(TRUE)
param <- as.integer(args[1])
csv<-read.csv(file="scripts/archivo.csv",header=T)