CREATE DATABASE IF NOT EXISTS ds7;

USE ds7;

CREATE TABLE IF NOT EXISTS `noticias` ( `id` smallint(5) UNSIGNED NOT NULL,
`titulo` varchar(100) NOT NULL DEFAULT '',
`texto` text NOT NULL,
`categoria` enum('promociones',
'ofertas',
'costas') NOT NULL DEFAULT 'promociones',
`fecha` date NOT NULL,
`imagen` varchar(100) DEFAULT NULL ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT
	INTO
	`noticias` (`id`,
	`titulo`,
	`texto`,
	`categoria`,
	`fecha`,
	`imagen`)
VALUES (1,
'Nueva promocion en Ciudad Cristal',
'145 viviendas de lujo en urbanizacion ajardinada situadas en un entorno privilegiado',
'promociones',
'2019-02-04',
NULL),
(2,
'Ultimas viviendas junto al rio',
'Apartamentos de 1 y 2 dormitorios, con fantasticas vistas. Excelentes condiciones de financiacion.',
'ofertas',
'2019-02-05',
NULL),
(3,
'Apartamentos en el Puerto de San Martin',
'En la Playa del Sol, en primera linea de playa. Pisos reformados y completamente amueblados.',
'costas',
'2019-02-06',
'apartamento8.jpg'),
(4,
'Casa reformada en el barrio de la Palmera',
'Dos plantas y atico, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro historico.',
'promociones',
'2019-02-07',
NULL),
(5,
'Promocion en Costa Mar',
'Con vistas al campo de golf, magnificas calidades, entorno ajardinado con piscina y servicio de vigilancia.',
'costas',
'2019-02-09',
'apartamento9.jpg'),
(6,
'Promocion en Costa Mar',
'Con vistas al campo de golf, magnificas calidades, entorno ajardinado con piscina y servicio de vigilancia.',
'costas',
'2019-02-09',
'apartamento9.jpg'),
(7,
'Casa reformada en el barrio de la Palmera',
'Dos plantas y atico, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro historico.',
'promociones',
'2019-02-07',
NULL);


DROP PROCEDURE IF EXISTS sp_listar_noticias

DELIMITER //
CREATE DEFINER = 'root' @'db' PROCEDURE sp_listar_noticias() BEGIN
SELECT
	id,
	titulo,
	texto,
	categoria,
	fecha,
	imagen
FROM
	noticias;

END//

CALL sp_listar_noticias();

#tratar de  poner una pausa aqui
 CREATE TABLE tbl_trip_analysis (
    `TRIP_ID` INT,
    `CHECKPOINT_A` INT,
    `CHECKPOINT_B` INT,
    `DATE_INI` DATE,
    `DATE_END` DATE,
    `COST` NUMERIC(4, 2),
    `VOLUME` NUMERIC(5, 3),
    `LENGTH` INT,
    `TIME` INT,
    `FUEL_ECONOMY` NUMERIC(5, 3),
    `COST_RATE` NUMERIC(3, 2)
);

INSERT INTO tbl_trip_analysis VALUES
    (190628,37214,37514,STR_TO_DATE('2019-06-28', '%Y-%m-%d')+1,STR_TO_DATE('2019-07-09', '%Y-%m-%d')+1,19.02,24.99,300,11,12.005,1.73),
    (190709,37514,37913,STR_TO_DATE('2019-07-09', '%Y-%m-%d')+1,STR_TO_DATE('2019-07-16', '%Y-%m-%d')+1,20.59,25.642,399,7,15.56,2.94),
    (190716,37913,38309,STR_TO_DATE('2019-07-16', '%Y-%m-%d')+1,STR_TO_DATE('2019-07-24', '%Y-%m-%d')+1,20.14,24.12,396,8,16.418,2.52),
    (190724,38309,38722,STR_TO_DATE('2019-07-24', '%Y-%m-%d')+1,STR_TO_DATE('2019-08-01', '%Y-%m-%d')+1,20.12,24.098,413,8,17.138,2.56),
    (190801,38722,38929,STR_TO_DATE('2019-08-01', '%Y-%m-%d')+1,STR_TO_DATE('2019-08-07', '%Y-%m-%d')+1,15,17.964,207,7,11.523,2.14),
    (190807,38929,39333,STR_TO_DATE('2019-08-07', '%Y-%m-%d')+1,STR_TO_DATE('2019-08-17', '%Y-%m-%d')+1,20.44,24.479,404,11,16.504,1.86),
    (190817,39333,39667,STR_TO_DATE('2019-08-17', '%Y-%m-%d')+1,STR_TO_DATE('2019-08-26', '%Y-%m-%d')+1,19.57,25.42,334,10,13.14,1.96),
    (190826,39667,40004,STR_TO_DATE('2019-08-26', '%Y-%m-%d')+1,STR_TO_DATE('2019-09-03', '%Y-%m-%d')+1,17.63,22.929,337,9,14.698,1.96),
    (190903,40004,40346,STR_TO_DATE('2019-09-03', '%Y-%m-%d')+1,STR_TO_DATE('2019-09-11', '%Y-%m-%d')+1,17.92,23.078,342,11,14.819,1.63),
    (190911,40346,40696,STR_TO_DATE('2019-09-11', '%Y-%m-%d')+1,STR_TO_DATE('2019-09-18', '%Y-%m-%d')+1,17.86,23.474,350,8,14.91,2.23),
    (190918,40696,41071,STR_TO_DATE('2019-09-18', '%Y-%m-%d')+1,STR_TO_DATE('2019-09-25', '%Y-%m-%d')+1,17.79,23.279,375,8,16.108,2.22),
    (190925,41071,41453,STR_TO_DATE('2019-09-25', '%Y-%m-%d')+1,STR_TO_DATE('2019-10-02', '%Y-%m-%d')+1,17.23,23.126,382,8,16.518,2.15),
    (191002,41453,41854,STR_TO_DATE('2019-10-02', '%Y-%m-%d')+1,STR_TO_DATE('2019-10-11', '%Y-%m-%d')+1,17.69,23.335,401,10,17.184,1.77),
    (191011,41854,42241,STR_TO_DATE('2019-10-11', '%Y-%m-%d')+1,STR_TO_DATE('2019-10-21', '%Y-%m-%d')+1,17.93,23.97,387,11,16.145,1.63),
    (191021,42241,42647,STR_TO_DATE('2019-10-21', '%Y-%m-%d')+1,STR_TO_DATE('2019-10-28', '%Y-%m-%d')+1,18.71,25.28,406,8,16.06,2.34),
    (191028,42647,43009,STR_TO_DATE('2019-10-28', '%Y-%m-%d')+1,STR_TO_DATE('2019-11-12', '%Y-%m-%d')+1,17.68,23.575,362,16,15.355,1.11),
   (191112,43009,43376,STR_TO_DATE('2019-11-12', '%Y-%m-%d')+1,STR_TO_DATE('2019-11-22', '%Y-%m-%d')+1,18.40,24.336,367,11,15.081,1.67);







DROP PROCEDURE IF EXISTS sp_getEngineData;

DELIMITER //
CREATE DEFINER = 'root' @'db' PROCEDURE sp_getEngineData() BEGIN
SELECT
	tta.TRIP_ID,
	tta.COST,
	tta.VOLUME,
	tta.LENGTH,
	tta.TIME,
	tta.FUEL_ECONOMY,
	tta.COST_RATE
FROM
	tbl_trip_analysis tta;
END//

CALL sp_getEngineData();

