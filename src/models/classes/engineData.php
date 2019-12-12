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

    public function setEngineData($TRIP_ID, $TIME,  $FUEL_ECONOMY, $COST_RATE)
    {
        //?echo $TRIP_ID . "<br>";
        //?echo $TIME . "<br>";
        //?echo $FUEL_ECONOMY . "<br>";
        //?echo $COST_RATE . "<br>";

        $instruccion = "CALL sp_setEngineData('" . $TRIP_ID . "', '" . $TIME . "',  '" . $FUEL_ECONOMY . "', '" . $COST_RATE . "')";
        $actualiza = $this->_db->query($instruccion);
        if ($actualiza) {
            $this->_db->close();
        }
    }
}
