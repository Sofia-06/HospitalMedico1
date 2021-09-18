<?php
    Class Secre
    {
        public $smarty;
        public $secretaria;

        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->secretaria= new Secretaria();
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
            $n=$_POST['nom'];
            $a=$_POST['apel'];
            $t=$_POST['cel'];
            $s=$_POST['segurom'];
            $id=$_POST['idpersonal'];
            $esp=$_POST['medico'];
            $f=$_POST['Fechan'];
            $h=$_POST['Horario'];

            $this->secretaria->PacienteNuevo($n,$a,$t,$s,$id,$esp,$f,$h);
            $this->smarty->assign('rol',"pacnue");
            $this->smarty->assign('title','Paciente Nuevo');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Salas()
        {
            $this->smarty->assign('rol',"salas");
            $this->smarty->assign('title','Disponibilidad de salas');
            $this->smarty->display('Secretaria.tpl');
        }
    }
?>