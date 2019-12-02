<?php
require_once("dbConnect.php");

class EngineData extends DbConnect
{
    public function __construct()
    {
        parent::__construct();
    }

public function initialSetupEngineData(){
 $arr_assoc = json_decode("./json/dbEngineData.json");
 print_r($arr_assoc);    
 }

    public function getEngineData(){
        $instruccion = "CALL sp_getEngineData()";
        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        if($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

}
