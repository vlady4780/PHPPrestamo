create database 'BDPrestamo'

use BDPrestamo

create table Cliente
(
    cod_cli int not null primary key auto_increment,
    nom_cli varchar(50) not null,
    ape_cli varchar(50) not null,
    dni_cli char(8) not null unique
)

insert into Cliente values (null,'jose','tiznado','1234567');



DROP PROCEDURE IF EXISTS SP_BUSDEL_CLIENTE;
DELIMITER $$
CREATE PROCEDURE SP_BUSDEL_CLIENTE
(
    BUS int, 
    TIPO VARCHAR(8)
    )
BEGIN
    IF TIPO='B' THEN
        SELECT * FROM Cliente
        WHERE COD_CLI=BUS OR NOM_CLI LIKE CONCAT('%',BUS,'%');
    ELSEIF TIPO='D' THEN
        DELETE FROM CLIENTE
        WHERE COD_CLI=BUS;
    END IF;
END; $$
CALL SP_BUSDEL_CLIENTE('1','B')