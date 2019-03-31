-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-03-2019 a las 18:52:53
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `job_crusade`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_autentification`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_autentification` (`user` VARCHAR(50), `pass` VARCHAR(40))  BEGIN
	DECLARE flag boolean;
	DECLARE count int;
    DROP TABLE IF EXISTS temp_usuario;
    
    

	SELECT COUNT(*) FROM usuario as us
    WHERE (us.password=MD5(pass) AND us.email=user) INTO count;

    
    IF(count>0)THEN
        set flag=true;
        CREATE TEMPORARY TABLE temp_usuario AS
        SELECT '0' as flag,user.id_rol, user.nombre, user.apellidos, user.email,rol.rol_nombre as nombre_rol,
            company.nombre as nombre_empresa, company.direccion,edo.nombre_estado,
            city.nombre_ciudad,company.codigo_postal,company.num_telefono,company.folio_convenio,company.rfc,
            (case WHEN company.status=1 THEN 'Activa' 
            WHEN company.status=0 THEN 'Baja'
            WHEN company.status=3 THEN 'Por Aprobar' 
            END)as status
        from usuario as user
        INNER JOIN usuario_rol as rol ON user.id_rol= rol.id_rol
        INNER JOIN empresa as company ON company.id_usuario=user.id_usuario
        INNER JOIN estado as edo ON edo.id_estado=  company.id_estado
        INNER JOIN ciudad as city ON city.id_ciudad=company.id_ciudad and edo.id_estado=city.id_estado
        WHERE (user.password=MD5(pass) AND user.email=user)
        ;
        UPDATE temp_usuario set
        flag='1'
        WHERE email=user;

        
    ELSE
    	set flag= false;
        CREATE TEMPORARY TABLE temp_usuario AS
        SELECT flag,null as id_rol,null as nombre,null as apellidos,null as email,
        null as nombre_rol,null as nombre_empresa,null as direccion,null as nombre_estado,
        null as nombre_ciudad,null as codigo_postal,null as num_telefono,null as folio_convenio,
        null as rfc,null as status;
    END if;
    SELECT * FROM temp_usuario ;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_empresa`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_empresa` (`nombre_u` VARCHAR(50), `apellido_u` VARCHAR(50), `email_u` VARCHAR(50), `pass` VARCHAR(50), `direccion_em` VARCHAR(50), `nombre_em` VARCHAR(50), `estado` INT, `ciudad` INT, `cp` INT, `telefono` VARCHAR(13), `folio` VARCHAR(30), `rfc_em` VARCHAR(15))  BEGIN
    DECLARE flag boolean;
    DECLARE count int;
    DECLARE id_user int;
    DECLARE msj varchar (50);
    select (max(id_usuario) +1) as id_u from usuario INTO id_user;
    INSERT INTO usuario (id_usuario,nombre,apellidos,email,password,id_rol,status)      VALUES (id_user,nombre_u,apellido_u,email_u,MD5(pass),1,1);
    
    SET COUNT = ROW_COUNT();
    IF(COUNT>0) THEN 
    
        INSERT INTO empresa (direccion, nombre, id_estado, id_ciudad,                       codigo_postal,id_usuario,num_telefono,folio_convenio,rfc, status) VALUES            (direccion_em,nombre_em,estado,ciudad,cp,id_user,telefono,folio,rfc_em,3);
        SET COUNT = ROW_count();
        IF (COUNT>0) THEN
        SET flag = true;
        SET msj = 'Registro exitoso. Su solicitud esta en proceso.';
        ELSE
        SET flag = false;
        SET msj = 'Error, no se insertó en la segunda tabla.';
        END IF;
    ELSE
        SET flag = false;
        SET msj = 'Error no se inserto en la primera tabla';
    END IF;
    SELECT flag, msj, id_user;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre_ciudad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_ciudad`,`id_estado`),
  KEY `fk_estado_ciudad` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre_ciudad`, `id_estado`) VALUES
(1, 'Acambay', 1),
(1, 'Álvaro Obregon', 2),
(2, 'Acolman', 1),
(2, 'Benito Juarez', 2),
(3, 'Aculco', 1),
(3, 'Coyoacan', 2),
(4, 'Almoloya de Alquisiras', 1),
(4, 'Cuajimalpa', 2),
(5, 'Amecameca', 1),
(5, 'Cuauhtemoc', 2),
(6, 'Cuautitlan', 1),
(6, 'Gustavo A. Madero', 2),
(7, 'Ecatepec de Morelos', 1),
(7, 'Iztacalco', 2),
(8, 'Ixtapaluca', 1),
(8, 'Santa Fe', 2),
(9, 'Jilotepec', 1),
(9, 'Polanco', 2),
(10, 'Morelos', 1),
(10, 'Chapultepec', 2),
(11, 'Nezahualcoyotl', 1),
(12, 'Ozumba', 1),
(13, 'Tejupilco', 1),
(14, 'Valle de Bravo', 1),
(15, ' Zumpango', 1),
(16, 'Cuautitlán Izcalli', 1),
(17, 'Toluca', 1),
(18, 'Tonatico', 1),
(19, 'Almoloya de Juárez', 1),
(20, 'Amanalco', 1),
(21, 'Axapusco', 1),
(22, 'Coyotepec', 1),
(23, 'Chalco', 1),
(24, 'Chapa de Mota', 1),
(25, 'Chimalhuacán', 1),
(26, 'Donato Guerra', 1),
(27, 'Huixquilucan', 1),
(28, 'Ixtlahuaca', 1),
(29, 'Xalatlaco', 1),
(30, 'Lerma', 1),
(31, 'Metepec', 1),
(32, 'Ocoyoacac', 1),
(33, 'El Oro', 1),
(34, 'Otumba', 1),
(35, 'Ozumba', 1),
(36, 'Papalotla', 1),
(37, 'Polotitlán', 1),
(38, 'Temoaya', 1),
(39, 'Tenancingo', 1),
(40, 'Texcoco', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `codigo_postal` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `num_telefono` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `folio_convenio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rfc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_empresa`),
  KEY `fk_estado_empresa` (`id_estado`),
  KEY `fk_ciudad_empresa` (`id_ciudad`),
  KEY `fk_usuario_empresa` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `direccion`, `nombre`, `id_estado`, `id_ciudad`, `codigo_postal`, `id_usuario`, `num_telefono`, `folio_convenio`, `rfc`, `status`) VALUES
(1, 'Calle Faisan numero 43', 'Tech Solutions ', 1, 11, 57800, 1, '55334622', '', 'PECD750307Q99', '1'),
(2, 'Calle Dolores #420', 'CONSWARE', 2, 6, 571223, 2, '55123415263', 'CONV123450', 'FERD750307Q97', '1'),
(4, 'ELM STREET S.N.', 'DARK GOOGLE', 1, 2, 2222, 4, '55667788', 'DG123', 'DG290319RL12', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`) VALUES
(1, 'Estado de Mexico'),
(2, 'CDMX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_escolar`
--

DROP TABLE IF EXISTS `grado_escolar`;
CREATE TABLE IF NOT EXISTS `grado_escolar` (
  `id_grado` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

DROP TABLE IF EXISTS `puesto`;
CREATE TABLE IF NOT EXISTS `puesto` (
  `id_puesto` int(11) NOT NULL,
  `nombre_puesto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_rol_usuario` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `email`, `password`, `id_rol`, `status`) VALUES
(1, 'Gabriel Antonio', 'Rodriguez Barrera', 'antonio.01yea@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1'),
(2, 'Maria Fernanda', 'Zamudio Pelaez', 'ferjumex@gmail.com', 'dd6b8391d79e582e5c741405c3e55932', 1, '1'),
(4, 'John', 'Smith', 'john@123.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

DROP TABLE IF EXISTS `usuario_rol`;
CREATE TABLE IF NOT EXISTS `usuario_rol` (
  `id_rol` int(11) NOT NULL,
  `rol_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`id_rol`, `rol_nombre`) VALUES
(1, 'Empresario'),
(2, 'Estudiante/Egresado'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

DROP TABLE IF EXISTS `vacante`;
CREATE TABLE IF NOT EXISTS `vacante` (
  `id_vacante` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vacante_desc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_puesto` int(11) DEFAULT NULL,
  `id_grado_esc` int(11) DEFAULT NULL,
  `edad_min` int(2) NOT NULL,
  `edad_max` int(2) NOT NULL,
  `salario_min` double(9,2) DEFAULT NULL,
  `salario_max` double(9,2) DEFAULT NULL,
  `hora_inicial` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hora_final` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experiencia` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vacante`),
  KEY `fk_puesto_vacante` (`id_puesto`),
  KEY `fk_grado_vacante` (`id_grado_esc`),
  KEY `fk_usuario_vacante` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_estado_ciudad` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_ciudad_empresa` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estado_empresa` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_empresa` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol_usuario` FOREIGN KEY (`id_rol`) REFERENCES `usuario_rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_grado_vacante` FOREIGN KEY (`id_grado_esc`) REFERENCES `grado_escolar` (`id_grado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_puesto_vacante` FOREIGN KEY (`id_puesto`) REFERENCES `puesto` (`id_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_vacante` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
