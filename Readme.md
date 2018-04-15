# ISW

# Instalación del proyecto.

(SOLO WINDOWS)Al descargar el repositorio colocarlo en:
```=php
laragon\www
```
hay que instalar los modulos, para esto entran a la carpeta y escriben:
```=php
composer install
```
ahora hay que configurar las cosas de git:
```=php
cp .env.example .env
```
ahora se genera la key:
```php
php artisan key:generate
```
y para correr el servidor:
```php
php artisan serve
```

# Uso de Git

si quieren implementar algo:
-Crear issue sobre lo q van a implementar, ej "boton subir archivos"
-Crear una rama, formato user-numero-nombre, ej: ecreyes-1-btn

## Comandos utiles:
https://hackmd.io/s/B1vLRG89-