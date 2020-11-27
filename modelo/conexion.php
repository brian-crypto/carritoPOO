<?php
class Conexion{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'proyectoTienda';
        protected $conexion;
        public function Conexion(){
            try{
                $this->conexion=new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
                $this->conexion->beginTransaction();//Iniciar la transacción
                //echo "me conecto";
                $this->conexion->commit();//confirmar
                return $this->conexion;
            }catch(Exception $e){
                if($this->conexion){
                    $this->conexion->rollBack();//revierte la transaccion
                }
                echo "error no conecto".$e->getMessage();
            }
        }
}
