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
        //print_r($data);

        $filename = 'engine.json';

        if (file_put_contents($filename, $data)) {
            //! Se exporta .json llamado 'engine.json'
        } else {
            echo ('Some error happened.');
        }
    }

    // TODO: HACER UN PROCEDIMIENTO ALMACENADO QUE RECIBA PARAMETROS PARA ACTUALIZAR VALORES DENTRO DE LA DB
    public function setEngineData()
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
