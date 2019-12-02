<?php
require_once("dbConnect.php");

class EngineData extends DbConnect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function initialSetupEngineData()
    {
        $file = file_get_contents("../../models/classes/data.json");
        $json_arr_assoc = json_decode($file, true);
        print_r($json_arr_assoc);
    }

    public function getEngineData()
    {
        $instruccion = "CALL sp_getEngineData()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        if ($resultado) {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}
