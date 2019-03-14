<?php
require_once "EmpresaDTO.php";
class UsuarioDTO extends EmpresaDTO
{
    //Variables
    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $id_rol;
    private $nombre_rol;
    private $status;

    public function __construct()
    {
    }

    //Getters and Setters
    public function getIDUsuario()
    {
        return $this->id_usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getNombreRol()
    {
        return $this->nombre_rol;
    }

    public function getIDRol()
    {
        return $this->id_rol;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setIDUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setIDRol($id_rol)
    {
        $this->id_rol = $id_rol;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setNombreRol($nombre_rol)
    {
        $this->nombre_rol = $nombre_rol;
    }

}
