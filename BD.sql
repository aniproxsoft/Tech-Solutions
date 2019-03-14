DROP DATABASE IF EXISTS job_crusade;

CREATE DATABASE  job_crusade DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE job_crusade;

CREATE TABLE `grado_escolar` (
  `id_grado` int ,
  `nombre` varchar(50) not null,
  PRIMARY KEY (`id_grado`)
  
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `empresa` (
  `id_empresa` int,
  `direccion` varchar(50) not null,
  `nombre` varchar(50) not null,
  `id_estado` int ,
  `id_ciudad` int ,
  `codigo_postal` int not null,
  `id_usuario` int,
  `num_telefono` varchar(13) not null,
  `folio_convenio` varchar(50)null,
  `rfc` varchar(15) NOT NULL,
  `status` varchar(1) NOT NULL,
   PRIMARY KEY (`id_empresa`)
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `puesto` (
  `id_puesto` int,
  `nombre_puesto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_puesto`)
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `estado` (
  `id_estado` int,
  `nombre_estado` varchar(50)NOT NULL,
  PRIMARY KEY (`id_estado`)
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `usuario` (
  `id_usuario` int,
  `nombre` varchar(50)NOT NULL,
  `apellidos` varchar(50)NOT NULL,
  `email` varchar(50)NOT NULL,
  `password` varchar(50)NOT NULL,
  `id_rol` int,
  `status` varchar(1)NOT NULL,
  PRIMARY KEY (`id_usuario`)
 
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `ciudad` (
  `id_ciudad` int,
  `nombre_ciudad` varchar(50)NOT NULL,
  `id_estado` int,
  PRIMARY KEY (`id_ciudad`, `id_estado`)
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `vacante` (
  `id_vacante` int,
  `titulo` varchar(50) NOT NULL,
  `vacante_desc` varchar(50) NULL,
  `id_puesto` int,
  `id_grado_esc` int,
  `edad_min` int(2) NOT NULL,
  `edad_max` int(2)NOT NULL,
  `salario_min` double(9,2)NULL,
  `salario_max` double(9,2)NULL,
  `hora_inicial` varchar(10) NULL,
  `hora_final` varchar(10)NULL,
  `experiencia` int NULL,
  `id_usuario` int,
  `status` varchar(1)NOT NULL,
  PRIMARY KEY (`id_vacante`)
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE `usuario_rol` (
  `id_rol` int,
  `rol_nombre` varchar(50)NOT NULL,
  PRIMARY KEY (`id_rol`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;




-- FOREIGN KEYS--------------------------
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_estado_empresa`
  FOREIGN KEY (`id_estado`)
    REFERENCES `estado`(`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_ciudad_empresa`
  FOREIGN KEY (`id_ciudad`)
    REFERENCES `ciudad`(`id_ciudad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_usuario_empresa`
  FOREIGN KEY (`id_usuario`)
    REFERENCES `usuario`(`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol_usuario`
  FOREIGN KEY (`id_rol`)
    REFERENCES `usuario_rol`(`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_estado_ciudad`
  FOREIGN KEY (`id_estado`)
    REFERENCES `estado`(`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_puesto_vacante`
  FOREIGN KEY (`id_puesto`)
    REFERENCES `puesto`(`id_puesto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

  ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_grado_vacante`
  FOREIGN KEY (`id_grado_esc`)
    REFERENCES `grado_escolar`(`id_grado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


  ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_usuario_vacante`
  FOREIGN KEY (`id_usuario`)
    REFERENCES `usuario`(`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


