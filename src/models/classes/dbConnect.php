<?php
require_once("config.php");

class DbConnect
{
    public $_db;

    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        if ($this->_db->connect_errno) {
            echo "Fallo en la conexion";
            return;
        } else {
            echo "Connection successful";
        }
    }
}
