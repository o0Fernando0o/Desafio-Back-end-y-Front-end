<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel App(Desafio)

Aplicación Laravel para gestionar una lista de usuarios con las operaciones
básicas de un CRUD (Create, Read, Update, Delete). Además, de 2 implementaciones de endpoints para
realizar operaciones específicas.

## Requisitos Previos
Asegúrate de tener instalados los siguientes programas antes de comenzar con la configuración del proyecto:

Node.js
npm
PHP
Composer
MySQL
Instalación
Sigue los siguientes pasos para configurar y ejecutar el proyecto:

## npm install
Este comando nos sirve para instalar paquetes. Los paquetes se descargarán y se meterán automáticamente en una carpeta llamada node_modules.

## npm run dev
Compila los Recursos de Frontend

## Crea una base de datos en tu servidor MySQL.
Copia el archivo .env.example y renómbralo a .env.
Abre el archivo .env y configura las variables de entorno relacionadas con la base de datos, como DB_DATABASE, DB_USERNAME y DB_PASSWORD

## php artisan migrate
Ejecuta las migraciones para crear las tablas en la base de datos

## php artisan serve
Finalmente, inicia el servidor de desarrollo de Laravel