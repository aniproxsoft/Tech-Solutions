DELIMITER //
CREATE PROCEDURE sp_autentification(user varchar(50),pass varchar(40))
BEGIN
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
END


call sp_autentification('antonio.01yea@gmail.com','123456')