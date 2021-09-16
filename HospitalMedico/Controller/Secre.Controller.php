<?php
    Class Secre
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function IngresoSecre()
        {
            $this->smarty->assign('title','Secretaria');
            $this->smarty->display('Login.tpl');
        }

        public function PacienteE()
        {
            $this->smarty->assign('rol',"pacex");
            $this->smarty->assign('title','Paciente Existente');
            $this->smarty->display('Secretaria.tpl');
        }

        public function PacienteN()
        {
            $this->smarty->assign('rol',"pacnue");
            $this->smarty->assign('title','Paciente Nuevo');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Salas()
        {
            $this->smarty->assign('rol',"salas");
            $this->smarty->assign('title','Salas');
            $this->smarty->display('Secretaria.tpl');
        }
    }
?>