<?php
    Class DocModel
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function VerCliente()
        {
            $query="SELECT * FROM `clientes`;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }

        public function CrearHisto($nom, $apell, $Corr)
        {
            $query="INSERT INTO `doctores` (`Nombre`, `Apellido`, `Correo`) VALUES ('$nom','$apell', '$corr');";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
    }
?>