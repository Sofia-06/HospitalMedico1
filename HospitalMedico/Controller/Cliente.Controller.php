<?php
    Class Cliente
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function Ingreso()
        {
            $this->smarty->assign('title','Cliente');
            $this->smarty->display('Cliente.tpl');
        }

        public function AgendCita()
        {
            $this->smarty->assign('rol',"agendCita");
            $this->smarty->assign('title','Agendar Cita');
            $this->smarty->display('Cliente.tpl');
        }

        public function AgendCovid()
        {
            $this->smarty->assign('rol',"agendCovid");
            $this->smarty->assign('title','Agendar Prueba COVID-19');
            $this->smarty->display('Cliente.tpl');
        }

        public function Ubicaciones()
        {
            $this->smarty->assign('rol',"ubicaciones");
            $this->smarty->assign('title','Ubicaciones');
            $this->smarty->display('Cliente.tpl');
        }

    }
?>