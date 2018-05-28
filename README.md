# Desarrollo de una aplicación del inicio

Documentación https://laravel.com/docs/5.4

## Requirements

* git
* php5
* compouser

## Instalación

Pasos para instalar las dependencias

1. Compouser https://getcomposer.org/download/
2. Compouser https://getcomposer.org/doc/00-intro.md

## Clonamos el repositorio

```
 $ git clone https://github.com/JoseSulbaran/laravel-project.git
```

## Accedemos al directorio

```
$ cd laravel-proyecto
```

## Ejecutamos el siguiente comando.

```
 $ composer install
```    

## Modificamos el nombre del archivo __.env.example.__ por __.env__ y agregamos nuestras credenciales.


## Por ultimo solo debemos generar una key para nuestra API.
```
$ php artisan key:generate
```

## Listo ya podemos ejecutar nuestra API.
```
 $ php artisan serve
```

