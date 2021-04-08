create database 'BDPrestamo'

use BDPrestamo

create table Cliente
(
    cod_cli int not null primary key auto_increment,
    nom_cli varchar(50) not null,
    ape_cli varchar(50) not null,
    dni_cli char(8) not null unique
)

insert into Cliente values (null,'jose','tiznado','123456789');



DROP PROCEDURE IF EXISTS SP_BUSDEL_CLIENTE;
DELIMITER $$
CREATE PROCEDURE SP_BUSDEL_CLIENTE
(BUS VARCHAR(20), TIPO VARCHAR(3))
BEGIN
    IF TIPO='B' THEN
        SELECT * FROM CLIENTE WHERE COD_CLI=BUS OR NOM_CLI LIKE CONCAT('%',BUS,'%');
    ELSEIF TIPO='D' THEN
        DELETE FROM CLIENTE WHERE COD_CLI=BUS;
    END IF;
END $$
DELIMITER $$
CALL SP_BUSDEL_CLIENTE('','B')