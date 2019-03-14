<?php
class EmpresaDTO
{
    public function __construct()
    {
    }

    //variables
    private $id_empresa;
    private $direccion;
    private $nombre_empresa;
    private $id_estado;
    private $nombre_estado;
    private $id_ciudad;
    private $nombre_ciudad;
    private $codigo_postal;
    private $id_usuario;
    private $num_telefono;
    private $folio_convenio;
    private $rfc;
    private $status;

    //Getters and Setters
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getNombreEmpresa()
    {
        return $this->nombre_empresa;
    }
    public function getIDEstado()
    {
        return $this->id_estado;
    }
    public function getNombreEstado()
    {
        return $this->nombre_estado;
    }
    public function getIDCiudad()
    {
        return $this->id_ciudad;
    }
    public function getNombreCiudad()
    {
        return $this->nombre_ciudad;
    }
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }
    public function getIDUsuarioE()
    {
        return $this->id_usuario;
    }
    public function getNumTelefono()
    {
        return $this->num_telefono;
    }
    public function getFolioConvenio()
    {
        return $this->folio_convenio;
    }
    public function getRFC()
    {
        return $this->rfc;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setIDEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function setNombreEmpresa($nombre_empresa)
    {
        $this->nombre_empresa = $nombre_empresa;
    }

    public function setIDEstado($id_estado)
    {
        $this->id_estado = $id_estado;
    }
    public function setNombreEstado($nombre_estado)
    {
        $this->nombre_estado = $nombre_estado;
    }
    public function setIDCiudad($id_ciudad)
    {
        $this->id_ciudad = $id_ciudad;
    }
    public function setNombreCiudad($nombre_ciudad)
    {
        $this->nombre_ciudad = $nombre_ciudad;
    }
    public function setCodigoPostal($codigo_postal)
    {
        $this->codigo_postal = $codigo_postal;
    }
    public function setIDUsuarioE($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function setNumTelefono($num_telefono)
    {
        $this->num_telefono = $num_telefono;
    }
    public function setFolioConvenio($folio_convenio)
    {
        $this->folio_convenio = $folio_convenio;
    }
    public function setRFC($rfc)
    {
        $this->rfc = $rfc;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

}
