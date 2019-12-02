<?php
require_once("dbConnect.php");

class EngineData extends DbConnect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function initialSetup()
    {
        //Crear la tabla 'tbl_trip_analysis'
        $this->_db->query("DROP TABLE IF EXISTS tbl_trip_analysis;");
        $this->_db->query(" CREATE TABLE IF NOT EXISTS tbl_trip_analysis (`TRIP_ID` INT, `CHECKPOINT_A` INT, `CHECKPOINT_B` INT, `DATE_INI` DATE, `DATE_END` DATE, `COST` NUMERIC(4, 2), `VOLUME` NUMERIC(5, 3), `LENGTH` INT, `TIME` INT,`FUEL_ECONOMY` NUMERIC(5, 3),`COST_RATE` NUMERIC(3, 2));");

        //Leer .json para comenzar a poblar la tabla tbl_trip_analysis
    }

    public function getEngineData()
    {
        $res = $this->_db->query("CALL sp_getEngineData();")->fetch_all(MYSQLI_ASSOC);
        if (!$res) {
            echo "error en la consulta";
        } else {
            return $res;
            $res->close();
            $this->_db->close();
        }
    }
}
