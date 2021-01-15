# Test-desarrollo

Proyecto correspondiente al test de desarrollo Agencia-EGO

## Pasos para ejecutar el proyecto localmente 📋

1. Tener creada la base de datos agencia-ego
2. Hacer un Fork de este repositorio.
3. Clonar el proyecto a nuestro repositorio local.
4. Dentro de la carpeta del proyecto a travez del comando "composer update" actualizaremos las dependencias necesarias
5. Ejecutamos las migraciones con el comando "php artisan migrate"
6. Ejecutamos los seeders para cargar los roles de usuarios y un admin con el comando "php artisan db:seed"

## Caracteristicas

Tomando como base las imagenes de la web Zeplin, se replicaron las paginas utilizando integramente el framework bootstrap y CSS nativo para el frontend, y se utilizo PHP bajo el framework Laravel, en su version 7.0 para programar el backend. Se realizo una pequeña base de datos con migraciones y se populo la misma mediante seeders. Por ultimo se creo un endpoint que devuelve todos los modelos en la URL: localhost:8000/api/modelos.

## Autor ✒️

* **Nicolás Bustamante** 
