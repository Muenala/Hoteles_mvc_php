<?php

    class SucursalController{
        public function __construct()
        {
            require_once "models/SucursalModel.php";
        }

        public function index(){
            
            $sucursales = new SucursalModel();
            $data["titulo"] = "Sucursales";
            $data["sucursales"] = $sucursales->getSucursales();

            require_once "views/Sucursal/Sucursal.php";
        }

        public function nuevo(){
            $data["titulo"] = "Sucursales";
            require_once "views/Sucursal/SucursalNuevo.php";
        }

        public function guardar(){
            $NOMBRE_SUC = $_POST['NOMBRE_SUC'];
            $DIRECCION_SUC = $_POST['DIRECCION_SUC'];
            $TELEFONO_SUC = $_POST['TELEFONO_SUC'];
            $UBICACIONLAT_SUC = $_POST['UBICACIONLAT_SUC'];
            $UBICACIONLON_SUC = $_POST['UBICACIONLON_SUC'];
            $IMAGEN_SUC = $_POST['IMAGEN_SUC'];
            $sucursales = new SucursalModel();
            $sucursales->insertar($NOMBRE_SUC,$DIRECCION_SUC,$TELEFONO_SUC,$UBICACIONLAT_SUC,$UBICACIONLON_SUC,$IMAGEN_SUC);
            $data["titulo"] = "Sucursales";
            $this->index();
        }

        public function modificar($ID_SUC){
            $sucursales = new SucursalModel();
            
            $data["id"] = $ID_SUC;
            $data["sucursal"] = $sucursales->getSucursal($ID_SUC);
            $data["titulo"] = "Sucursales";
            require_once "views/Sucursal/SucursalModificar.php";
        }

        public function actualizar(){
            $ID_SUC = $_POST['ID_SUC'];
            $NOMBRE_SUC = $_POST['NOMBRE_SUC'];
            $DIRECCION_SUC = $_POST['DIRECCION_SUC'];
            $TELEFONO_SUC = $_POST['TELEFONO_SUC'];
            $UBICACIONLAT_SUC = $_POST['UBICACIONLAT_SUC'];
            $UBICACIONLON_SUC = $_POST['UBICACIONLON_SUC'];
            $IMAGEN_SUC = $_POST['IMAGEN_SUC'];
            $sucursales = new SucursalModel();
            $resultado =  $sucursales->modificar($ID_SUC,$NOMBRE_SUC,$DIRECCION_SUC,$TELEFONO_SUC,$UBICACIONLAT_SUC,$UBICACIONLON_SUC,$IMAGEN_SUC);
            if($resultado ){
                $data["titulo"] = "Sucursales";
                $this->index();
            }else{
                echo 'error';
                
            }

        }



    }



