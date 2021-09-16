<?php
    Class SecreModel
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function PacienteNuevo()
        {
            $query="SELECT * FROM `clientes`;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function PacienN($nom, $apell, $seguro, $dpi, $tel, $especialidad)
        {
            $query="INSERT INTO `clientes` (`Nombre`, `Apellido`, `Seguro`, `Dpi`, `Telefono`, `Especialidad`) VALUES ('$nom','$apell', '$seguro','$dpi', '$tel','$especialidad');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function PacienE($nom, $apell, $seguro, $dpi)
        {
            $query="INSERT INTO `clientes` (`Nombre`, `Apellido`, `Seguro`, `DPI`) VALUES ('$nom','$apell', '$seguro','$dpi');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
    }
?>