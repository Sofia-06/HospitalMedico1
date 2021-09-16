<?php
    Class Doc
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function IngresoDoc()
        {
            $this->smarty->assign('title','Doctor');
            $this->smarty->display('Login.tpl');
        }

        public function BuscHist()
        {
            $this->smarty->assign('rol',"bushist");
            $this->smarty->assign('title','Buscar Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function CrearH()
        {
            $this->smarty->assign('rol',"crearhist");
            $this->smarty->assign('title','Crear Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function VerP()
        {
            $this->smarty->assign('rol',"verpacientes");
            $this->smarty->assign('title','Ver Pacientes');
            $this->smarty->display('Doctor.tpl');
        }

        public function VerT()
        {
            $this->smarty->assign('rol',"verturnos");
            $this->smarty->assign('title','Ver Turnos');
            $this->smarty->display('Doctor.tpl');
        }
    }
?>