<?php
Class Doctor
{
    public $con;
    public function __construct()
    {
        $this->con=new Conexion();
    }

    public function VerSala()
    {
          $query="SELECT * FROM `salas`;";
          $resultado=$this->con->query($query);
          $this->con->close();
          return $resultado;
    }

    public function ActuSalas($est,$salas)
    {
        $query="UPDATE `salas` SET `Estado`='$est' WHERE `Nombre`='$salas';";
        $resultado=$this->con->query($query);
        $this->con->close();
        return $resultado;
    }

    public function CrearHist($dpi,$mconsul,$ediag,$exam,$med)
    {
      $query="INSERT INTO `crearh`(`dpi`, `mconsulta`, `diagnostico`, `examenes`, `medicina`) VALUES ('$dpi','$mconsul','$ediag','$exam','$med');";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
    public function VerPaciente()
    {
      $query="SELECT * FROM `clientes`;";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
    public function BuscarHist()
    {
      $query="SELECT * FROM `crearh`;";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
}
?>