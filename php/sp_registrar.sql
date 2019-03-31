DELIMITER //
CREATE PROCEDURE sp_registrar_empresa (nombre_u varchar(50),apellido_u varchar(50),email_u varchar (50), 
    pass varchar (50),direccion_em varchar (50),nombre_em varchar (50), estado int, ciudad int, cp int,
    telefono varchar (13), folio varchar(30),rfc_em varchar(15))
BEGIN
    DECLARE flag boolean;
    DECLARE count int;
    DECLARE id_user int;
    DECLARE msj varchar (50);
    select (max(id_usuario) +1) as id_u from usuario INTO id_user;
    INSERT INTO usuario (id_usuario,nombre,apellidos,email,password,id_rol,status)      VALUES (id_user,nombre_u,apellido_u,email_u,MD5(pass),1,1);
    
    SET COUNT = ROW_COUNT();
    IF(COUNT>0) THEN 
    
        INSERT INTO empresa (direccion, nombre, id_estado, id_ciudad, codigo_postal,id_usuario,num_telefono,folio_convenio,rfc, status) VALUES (direccion_em,nombre_em,estado,ciudad,cp,id_user,telefono,folio,rfc_em,3);
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
END



call sp_registrar_empresa ('John','Smith','john@123.com','1234','ELM STREET S.N.','DARK GOOGLE',1,2,2222,'55667788','DG123','DG290319RL12')