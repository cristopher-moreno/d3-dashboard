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

    // TODO: HACER UN PROCEDIMIENTO ALMACENADO (SP) QUE RECIBA PARAMETROS PARA ACTUALIZAR VALORES DENTRO DE LA DB
    public function setEngineData($TRIP_ID, $TIME,  $FUEL_ECONOMY, $COST_RATE)
    {
        $instruccion = "CALL sp_getEngineData($TRIP_ID, $TIME,  $FUEL_ECONOMY, $COST_RATE)";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        if ($resultado) {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    // public function actualizar_historial_kg($magnitud){
    //     //Factor de Conversión: 1 kg / 2.204 lb
    //     $kg = (($magnitud)*(1/2.204));
    //     $lb = $magnitud;
    //     echo "kg: ".$kg."<br>";
    //     echo "lb: ".$lb."<br>";
    //     $instruccion = "CALL sp_insert_historial('".$kg."','".$lb."','lb->kg')";
    //     $actualiza = $this->_db->query($instruccion);
    //     if($actualiza){
    //         $this->_db->close();
    //     }
    // }
}
