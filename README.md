# Proyecto Data Warehousing

Proyecto 2: Curso Bases de datos.<br />
9/05/2019<br />
Proyecto 2: Sistema de ventas con DB centralizada<br />

## Descripción


Este proyecto consiste en la implementación de conceptos de OLAP y Data Warehousing para una base de datos relacional en PostgreSQL, simulando un entorno distribuido de puntos de venta. Se pretende simular el comportamiento de un conjunto de tiendas en donde cada una maneja una instancia independiende de un sistema de ventas. La premisa básica de la simulación 
es que cada tienda puede registrar empleados, clientes, productos y ventas independientes, la información luego es agregada hacia un data warehouse para procesamiento, análisis y presentación.


## Primeros pasos

### Requerimientos 

Este proyecto requiere la previa instalación de Composer y Laravel, puedes ver cómo instalarlos [aquí](https://laravel.com/docs/5.8/installation).

### Instalación

1. Clona este repositorio utilizando `https://github.com/her17138/Proyecto2DB.git`
2. Corre el comando `php artisan serve` para inicializar el servidor local.<br />
3. Puedes ver tu página web en `http://localhost:8080`.

## Features

Estas tecnologías no están integradas en este repositorio, pero también se realizó el diseño y centralización de un Datawarehouse en Hive/Hadoop para los reportes de ventas y el uso de Hadoop como herramienta para el almacenamiento del tracking de los clientes. Adicionalmente, para el análisis y presentación de datos se utilizó la herramienta de Tableau. 

## Créditos

### Autores

Ana Lucía Hernández - [her17138](github.com/her17138). <br />
María Fernanda López - [diazMafer](github.com/diazMafer). <br />
Francisco Molina - [molinajimenez](github.com/molinajimenez). <br />
Oliver Mazariegos - [oliversinn](github.com/Oliversinn). <br />

