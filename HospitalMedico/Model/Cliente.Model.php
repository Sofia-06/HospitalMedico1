<?php
    Class ClienteModel
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function Cita($nom, $apell, $tel, $fecha)
        {
            $query="INSERT INTO `citas` (`Nombre`, `Apellido`, `Telefono`, `Fecha`) VALUES ('$nom','$apell', '$tel','$fecha');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function Covid($nom, $apell, $telef, $fecha)
        {
            $query="INSERT INTO `covid` (`Nombre`, `Apellido`, `Telefono`, `Fecha`) VALUES ('$nomb','$apell', '$tel', '$fecha');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
    }
?>