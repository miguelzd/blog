<p  align="center"><img  src="https://laravel.com/assets/img/components/logo-laravel.svg" width="50%"  alt="Logo-Laravel">
</p>

<p  align="center">
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/full-logo-min.png" width="50%"  alt="Logo-Laravel-Collective">
</p>

</hr>

<p  align="center">
<a  href="https://travis-ci.org/laravel/framework"><img  src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/d/total.svg"  alt="Total Downloads"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/v/stable.svg"  alt="Latest Stable Version"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/license.svg"  alt="License"></a>

</p>
  
  
# Blog Laravel 5.7 + Laravel Collective, stringToSlug y CKEditor

CMS Laravel que realiza las operaciones de CRUD (Create - Read - Update - Delete) sobre los Posts, Etiquetas y Categorías de un Blog.
Implementa faker para la generación de datos, policies para permisos de usuarios y traducción de mensajes de error al español con el paquete  Laraveles.

## Links de referencias y paquetes utilizados

 - https://github.com/Laraveles/spanish
 - https://ckeditor.com/ckeditor-4/download/
 - http://leocaseiro.com.br/jquery-plugin-string-to-slug/
 - https://laravelcollective.com/
  

## composer.json

```
"php": "^7.1.3",
"fideloper/proxy": "^4.0",
"laravel/framework": "5.7.*",
"laravel/tinker": "^1.0",
"laravelcollective/html": "^5.7",
"laraveles/spanish": "^1.1"
```

NOTA: Recuerda tener instalado Composer para descargar las dependencias del proyecto. 


## Instalación

1. Descarga el proyecto https://github.com/miguelzd/blog.git a tu equipo local.

2. Instala las dependencias y  plugins utilizando Composer.
```
composer install
```
3. Crea el archivo "**.env**" y luego genera la "**key**" de la aplicación desde la consola.
```
php artisan key:generate
```
4. Crea la base de datos llamada "**blog**" en tu servidor **MySQL** y configurarla en el archivo "**.env**" del proyecto.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```
5. Por último, ejecuta las "**migraciones**" y los **seeders** para crear las tablas y los datos a utilizar.
```
php artisan migrate:refresh --seed
```

## Ejecución

Accede al directorio del proyecto  y ejecuta el servidor de desarrollo desde la consola con el comando **"php artisan serve"**
```
➜  blog git:(master) ✗ php artisan serve
...
Laravel development server started: <http://127.0.0.1:8000>
```

**IMPORTANTE:**  Junto con las migraciones se creará un usuario  llamado **Admin** con el cual podrás acceder a las funciones de **CRUD**.
```
User: admin@admin.com
Pass: 123456
```
 

## Screenshots

#### Base de datos - BLOG
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/der-blog-min.png"  width="100%">
  
#### Index
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-1-min.png"  width="60%">

#### Entrada
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-2-min.png"  width="60%">

#### Login
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-3-min.png"  width="60%">

#### Lista de Categorías
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-4-min.png"  width="60%">

#### Lista de Entradas
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-5-min.png"  width="60%">

#### Lista de Etiquetas
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-6-min.png"  width="60%">

#### Crear Entrada
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-7-min.png"  width="60%">

#### Validaciones de Entrada
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-8-min.png"  width="60%">

#### Validaciones de Etiquetas
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-9-min.png"  width="60%">

#### Borrado de Categoría
<img  src="http://l3000446.ferozo.com/github/demo-app-laravel-blog/cap-10-min.png"  width="60%">

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).