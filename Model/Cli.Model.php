<?php
    Class Cli
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }

        public function AgendarCita($n,$a,$t,$s,$i,$e,$f,$h)
        {
          $query="INSERT INTO `clientes`(`Nombre`, `Apellido`, `Telefono`, `Seguro`, `DPI`, `EspecialidadMedica`, `Fecha`, `Horario`) VALUES ('$n','$a','$t','$s','$i','$e','$f','$h');";
          $resultado=$this->con->query($query);
          $this->con->close();
          return $resultado;
        }
        public function ACovid($no,$ap,$tel,$fe)
        {
          $query="INSERT INTO `covid`(`Nombre`, `Apellido`, `Telefono`, `Fecha`) VALUES ('$no','$ap','$tel','$fe');";
          $resultado=$this->con->query($query);
          $this->con->close();
          return $resultado;
        }
    }
?>