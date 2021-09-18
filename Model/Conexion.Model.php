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
           $DB="hospmed";
        

           parent::__construct($servidor,$user,$pass,$DB);
           $this->query("SET NAMES 'utf8';");
           $this->connect_errno ? die('Error en la conexion'): $error="Conectado a ".$DB;
           //echo $error;
           unset ($error);
       } 
    }
    
?>