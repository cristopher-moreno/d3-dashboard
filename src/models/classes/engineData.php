<?php
require_once("dbConnect.php");

class EngineData extends DbConnect
{
    public function __construct()
    {
        parent::__construct();
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

    public function exportEngineData($data)
    {
        print_r($data);

        $filename = 'engineJson.json';

        if (file_put_contents($filename, $data)) {
            // "JSON Data received, name is " + json.nameecho ('file exported.');
        } else {
            echo ('Some error happened.');
        }
    }
}
