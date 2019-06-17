drop table clientes;
drop table atributos;
drop table facturas;
drop table lineas_factura;
drop table marcas;
drop table productos;
drop table valors;
drop table categorias;
drop table tiendas;

SELECT * FROM lineas_factura
SELECT * FROM atributos
SELECT * FROM clientes
SELECT * FROM facturas
SELECT * FROM marcas 
SELECT * FROM productos
SELECT * FROM valors 
SELECT * FROM categorias

CREATE EXTERNAL TABLE IF NOT EXISTS lineas_factura(
		lineaid INT,
        tiendaid INT,
		productoid INT,
		marcaid INT,
		facturaid INT,
		cantidad INT,
		preciounitario FLOAT,
		created_at string,
		updated_at string)
    COMMENT 'Informacion de la tabla lineas_factura'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/lineas_factura';

CREATE TABLE IF NOT EXISTS lineas_factura(
    lineaid INT,
    tiendaid INT,
    productoid INT,
    marcaid INT,
    facturaid INT,
    cantidad INT,
    preciounitario FLOAT,
		created_at string,
		updated_at string)
COMMENT 'Informacion de la tabla lineas_factura'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;


CREATE EXTERNAL TABLE IF NOT EXISTS atributos(
		atributoid INT,
		nombre STRING,
		productoid INT)
    COMMENT 'Informacion de la tabla atributos'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/atributos';

CREATE TABLE IF NOT EXISTS atributos(
    atributoid INT,
		nombre STRING,
		productoid INT)
COMMENT 'Informacion de la tabla atributos'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS clientes(
		clientenit INT,
		nombre STRING,
		apellido STRING, 
        telefono STRING,
        direccion STRING)
    COMMENT 'Informacion de la tabla clientes'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/clientes';

CREATE TABLE IF NOT EXISTS clientes(
		clientenit INT,
		nombre STRING,
		apellido STRING, 
        telefono STRING,
        direccion STRING)
COMMENT 'Informacion de la tabla clientes'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS facturas(
		facturaid INT,
        tiendaid INT,
		clientenit STRING,
		direccion STRING, 
        total DOUBLE, 
        created_at string,
        updated_at string)
    COMMENT 'Informacion de la tabla facturas'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/facturas';

CREATE TABLE IF NOT EXISTS facturas(
		facturaid INT,
        tiendaid INT,
		clientenit STRING,
		direccion STRING, 
        total DOUBLE,  
        created_at string,
        updated_at string)
COMMENT 'Informacion de la tabla facturas'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS marcas(
		marcaid INT,
		categoriaid INT,
		productoid INT, 
        nombre STRING,
        precio FLOAT,    
        cantidad INT)
    COMMENT 'Informacion de la tabla marcas'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/marcas';

CREATE TABLE IF NOT EXISTS marcas(
		marcaid INT,
		categoriaid INT,
		productoid INT, 
        nombre STRING,
        precio FLOAT,    
        cantidad INT)
COMMENT 'Informacion de la tabla marcas'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS productos(
		productoid INT,
        tiendaid INT,
		nombre STRING)
    COMMENT 'Informacion de la tabla productos'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/productos';

CREATE TABLE IF NOT EXISTS productos(
		productoid INT,
        tiendaid INT,
		nombre STRING)
COMMENT 'Informacion de la tabla productos'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS valors(
		valorid INT,
		marcaid INT, 
        atributoid INT,
        valor STRING)
    COMMENT 'Informacion de la tabla valores'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/valores';

CREATE TABLE IF NOT EXISTS valors(
		valorid INT,
		marcaid INT, 
        atributoid INT,
        valor STRING)
COMMENT 'Informacion de la tabla valores'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

CREATE EXTERNAL TABLE IF NOT EXISTS categorias(
		categoriaid INT,
		productoid INT,
        nombre STRING)
    COMMENT 'Informacion de la tabla categorias'
    ROW FORMAT DELIMITED
    FIELDS TERMINATED BY ','
    STORED AS TEXTFILE
    location '/user/p2/categorias';

CREATE TABLE IF NOT EXISTS categorias(
		categoriaid INT,
		productoid INT,
        nombre STRING)
COMMENT 'Informacion de la tabla categorias'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

----------------------          tablas predeterminadas de Hive


CREATE TABLE IF NOT EXISTS tiendas(
    tiendaid INT,
    nombre STRING)
COMMENT 'Informacion de la tabla tiendas.'
ROW FORMAT DELIMITED
FIELDS TERMINATED BY ','
STORED AS ORC;

INSERT INTO tiendas(tiendaid, nombre)
VALUES (0, 'Ana Lucia'),
(1, 'Maria Fernanda'),
(2, 'Francisco'),
(3, 'Oliver')


