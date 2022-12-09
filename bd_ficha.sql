CREATE DATABASE IF NOT EXISTS bd_ficha;
CREATE TABLE IF NOT EXISTS bd_ficha.ficha(
   id_ficha INT NOT NULL  AUTO_INCREMENT,
   numero_ficha INT NOT NULL,
   fecha DATE NOT NULL,
   descripcion VARCHAR(50) NOT NULL,
   marca VARCHAR(50) NOT NULL,
   tipo VARCHAR(50) NOT NULL,
   edificio VARCHAR(50) NOT NULL,
   responsable VARCHAR(50) NOT NULL,
   cargo_responsable VARCHAR(50) NOT NULL,
   
   PRIMARY KEY (id_ficha)

);
