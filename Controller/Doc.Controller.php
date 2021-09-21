<?php
    Class Doc
    {
        public $smarty;
        public $doctor;

        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->doctor=new Doctor();
        }

        public function IngresoDoc()
        {
            $this->smarty->assign('title','Doctor');
            $this->smarty->display('Login.tpl');
        }

        public function BuscHist()
        {
            $paci=$this->doctor->BuscarHist();
            //var_dump($pacientes);
            $array=array();
            while($fila=mysqli_fetch_Array($paci)){
                array_push($array, $fila);
            }
            $this->smarty->assign('paci', $array);
            $this->smarty->assign('rol',"bushist");
            $this->smarty->assign('title','Buscar Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function CrearH()
        {
            
            if(isset($_POST['dpi']))
            {
                $dpi=$_POST['dpi'];
                $mconsul=$_POST['consulta'];
                $ediag=$_POST['enf'];
                $exam=$_POST['test'];
                $med=$_POST['medicina'];

            $this->doctor->CrearHist($dpi,$mconsul,$ediag,$exam,$med);
            }
            
            $this->smarty->assign('rol','crearhist');
            $this->smarty->assign('title','Crear Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function VerP()
        {
            $pacientes=$this->doctor->VerPaciente();
            //var_dump($pacientes);
            $array=array();
            while($fila=mysqli_fetch_assoc($pacientes)){
                array_push($array, $fila);
            }
            //var_dump($array);
            $this->smarty->assign('pacientes', $array);
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
        public function ActSalas()
        {
            if(isset($_POST['estado']))
            {
            $est=$_POST['estado'];
            $salas=$_POST['salas'];

            $this->doctor->ActuSalas($est,$salas);
            }

            $this->smarty->assign('rol',"actsalas");
            $this->smarty->assign('title','Actualizar salas');
            $this->smarty->display('Doctor.tpl');
        }
    }
?>