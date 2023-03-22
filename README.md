<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Clonar el proyecto
Clono el proyecto
```shell
git clone http://....
cd laravel_empresas
composer update
npm install
```
Verifico si tengo el fichero .env, sino lo consigo y genero la clave
```shell
php artisan key:gen
```

Cargo las bases de datos de mi [docker](./docker-compose.yaml)
```shell
# Al estr funcionando con docker, lo levanto.
docker compose up -d
php artisan migrate
```

Levanto el poyecto y verifico su funcionamiento (el & para no peder el terminal y ejecutar el proceso el background)
```shell
php artisan serve &
npm run dev
```

## Proyecto empresas
Creao un proyecto de gestion de empresas
```shell
laravel new Empresas
```

## Requisitos
### 1. Instalar autentficacion
Instalamos el `BREEZE` para gestionar la autentificacion de forma más fácil y segura
```shell
# Añades el paquete breeze al composer (pero no en mi proyecto)
composer require laravel/breeze --dev

# Instalar el breeze con blade a mi proyecto
php artisan breeze:install

# Instalo las herramientas de front (taildwind)
npm install
```

Pongo en funcionamiento el servidor de bases de datos y cargamos el fichero [docker-compose.yaml](./docker-compose.yaml) en el directorio.
```shell
docker compose up -d
```
Conriguro el fichero ***.ENV*** para configurar la base de datos (ver credenciales en el fichero **yaml**)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=23104
DB_DATABASE=empresas
DB_USERNAME=gabi
DB_PASSWORD=gabi
```
Ejecuto las migraciones
```shell
php artisan migrate
```
Arranco las herramientas de cliente
```shell
# Para iniciar un server local de Laravel
php artisan serve &

# Para iniciar el herramienta de transpiracion del cliente (en este caso carga el CSS)
npm run dev
```

# 2. Diseño web
* Empezamos con el diseño del loyout siguiendo las [especificaciones](./documentacion/diseño_layout.md)
