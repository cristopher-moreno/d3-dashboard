<?php
require_once('config.php');
class DbConnect
{
    protected $_db;
    public function __construct()
    {
        $this->_db = new mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), getenv('MYSQL_DATABASE'));
        if ($this->_db->connect_errno) {
            echo "Fallo al conectar a la base de datos " . $this->db->connect_errno;
            return;
        }
    }
}
