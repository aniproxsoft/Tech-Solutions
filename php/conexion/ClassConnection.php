<?php

class connectionDB extends mysqli
{
    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'job_crusade';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        // $this->set_charset('utf-8');

        $this->connect_errno ? die('Error fatal en la conexion BD' . mysqli_connect_errno())
        : $msg = 'Conexion exitosa';

        // echo $msg;
    }

    public function get_connection()
    {
        return $this->conn;
    }
}
