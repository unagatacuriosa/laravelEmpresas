<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 0. Clonar el proyecto
Clono el proyecto

```shell
git clone https://....
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

## 1. Empezar proyecto empresas
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
### 2. CRUD BBDD (Crear)
1. Creamos migraciones
2. Configuramos las factorias
3. Configuramos los seeders
4. En config/app -> cambiamos los idiomas 'fake_local'
5. Ejecuto las migraciones
```shell
php artisan migrate
```

### 3. Arranco el proyecto
Arranco las herramientas de cliente
```shell
# Para iniciar un server local de Laravel
php artisan serve &

# Para iniciar el herramienta de transpiracion del cliente (en este caso carga el CSS)
npm run dev
```

### 4. CRUD PETICIONES (Lectura)
1. Segun los datos de la tabla los **modelos** tendran unos parametros
2. Cambiamos los permisos - Http/request - Segun los parametros del formulario
   - store y update = true
3. Creamos los controladores
4. Creamos las rutas
   - Cuando hay una solicitud pasa algo (cuando lo pides la url pides el controlador)
   - Devolver una vista desde el controlador (formulario de crear)
     1. get -> petición
     2. post -> store
     3. return y actualizar vista

# _. Diseño web
* Empezamos con el diseño del loyout siguiendo las [especificaciones](./documentacion/diseño_layout.md)
