args <- commandArgs(TRUE)
p_anios <- as.numeric(args[1])
p_tasa <- as.numeric(args[2])
p_precio <- as.numeric(args[3])

csv<-read.csv(file="scripts/archivo.csv",header=T)

R = c() #variable que contiene los valores de los ln
#acalculo los ln y los agrego a R
for(i in 2:length(csv$Close)){
  ri = log(csv$Close[i]/csv$Close[i-1])
  R = c(R,ri)
}

#Puntos iniciales
# Suponiendo para 10 dias más.
precio = p_precio #precio estimado
trayectorias = 20 #numero de trayectorias
valores_trayectorias = c()
d = p_anios*365 #numero de dias
t = p_anios/1000 #tiempo en años
tg = d/365
rg = p_tasa
r = p_tasa *d/365 #tasa libre de riesgo
s = c()
s = c(s,csv$Close) #lista de numeros de cierre
sigma = sd(R) #desviacion estandar de los ln

#simulacion de todas las trayectorias requeridas
for(j in 1:trayectorias){
  #simulacion de 1 trayectoria
  for(i in 1:d){
    epsilon = rnorm(1, 0, 1) # un numero,media 0,sd 1
    delta_s = r*s[length(s)]*t + sigma*s[length(s)]*epsilon*sqrt(t)
    sn_1 = s[length(s)] + delta_s
    s = c(s,sn_1) #añado el nuevo valor
    #ri = log(s[length(s)]/s[length(s-1)]) #calculo el ln con el anterior
    #R = c(R,ri) #agrego el valor del ln a los R
    #sigma = sd(R) #calculo nuevamente la sd
  }
  valores_trayectorias = c(valores_trayectorias,s[length(s)])
}

valores_maximos = c() #valores maximos entre la diferencia y 0
for(z in 1:trayectorias){
  valores_maximos = c(valores_maximos,max(valores_trayectorias[z]-precio,0))
}
esperanza = mean(valores_maximos)
funcion = exp(-rg*tg)*esperanza
print(funcion)