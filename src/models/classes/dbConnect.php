<?php
require_once('config.php');
class DbConnect
{
    protected $_db;
    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->_db->connect_errno) {
            echo "Fallo al conectar a la base de datos " . $this->db->connect_errno;
            return;
        }else{
            //*debug: echo "Conexión Correcta.";
        }
    }
}
