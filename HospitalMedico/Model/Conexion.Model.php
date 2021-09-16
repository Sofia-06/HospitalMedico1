<?php
    class Conexion extends mysqli
    {
       function __construct()
       {
           //BASE DE DATOS WEB
         /*$servidor="mysql.webcindario.com";
         $pass="kqgrYKP141";
         $user="practicaprogra";
         $DB="practicaprogra";*/

          //BASE DE DATOS LOCAL
          $servidor="localhost:3307";
           $pass="";
           $user="root";
           $MariaDB="hospmed";
        

           parent::__construct($servidor,$user,$pass,$MariaDB);
           $this->query("SET NAMES 'utf8';");
           $this->connect_errno ? die('Error en la conexion'): $error="Conectado a ".$MariaDB;
           //echo $error;
           unset ($error);
       } 
    }
    
?>