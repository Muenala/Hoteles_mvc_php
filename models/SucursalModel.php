<?php

    class SucursalModel{
        private $db;
        private $sucursales;

        public function __construct()
        {
            $this->db = Connection::connectionMysql();
            $this->sucursales = array();
        }

        public function getSucursales(){
            $sql = "SELECT * FROM sucursal";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc()){
                $this->sucursales[] = $row;
            }
            return $this->sucursales;
        }

        public function getSucursal($ID_SUC){

            $sql = "SELECT * FROM sucursal WHERE ID_SUC='$ID_SUC' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }

        public function insertar($NOMBRE_SUC,$DIRECCION_SUC,$TELEFONO_SUC,$UBICACIONLAT_SUC,$UBICACIONLON_SUC,$IMAGEN_SUC){
            $resultado = $this->db->query("INSERT INTO sucursal (NOMBRE_SUC,DIRECCION_SUC,TELEFONO_SUC,UBICACIONLAT_SUC,UBICACIONLON_SUC,IMAGEN_SUC)
            VALUES ('$NOMBRE_SUC','$DIRECCION_SUC','$TELEFONO_SUC','$UBICACIONLAT_SUC','$UBICACIONLON_SUC','$IMAGEN_SUC')");

        }
        
        public function modificar($ID_SUC,$NOMBRE_SUC,$DIRECCION_SUC,$TELEFONO_SUC,$UBICACIONLAT_SUC,$UBICACIONLON_SUC,$IMAGEN_SUC){

            $resultado = $this->db->query("UPDATE sucursal SET NOMBRE_SUC='$NOMBRE_SUC',DIRECCION_SUC='$DIRECCION_SUC',TELEFONO_SUC ='$TELEFONO_SUC'
            ,UBICACIONLAT_SUC='$UBICACIONLAT_SUC',UBICACIONLON_SUC='$UBICACIONLON_SUC',IMAGEN_SUC = '$IMAGEN_SUC' WHERE ID_SUC = '$ID_SUC'");
            printf("Errormessage: %s\n", $this->db->error);
            return $resultado;
        }

        public function eliminar($ID_SUC){
            $resultado = $this->db->query("DELETE sucursal WHERE ID_SUC = '$ID_SUC'");
            
        }
    }