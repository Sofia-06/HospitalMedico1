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
            $paci=$this->secretaria->PacienteExis();
            //var_dump($pacientes);
            $array=array();
            while($fila=mysqli_fetch_Array($paci)){
                array_push($array, $fila);
            }
            //var_dump($array);

            $dpi="";
            if(isset($_POST['submit']))
            {
                $dpi=$_POST['dpi'];
                $resultado=mysqli_query($conexion, "SELECT * FROM clientes WHERE DPI= '$dpi'");
                while($consulta=mysqli_fetch_assoc($resultado))
                {
                    echo $consulta['DPI'];
                }
            }
            $this->smarty->assign('paci', $array);
            $this->smarty->assign('rol',"pacex");
            $this->smarty->assign('title','Paciente Existente');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Turnos()
        {
            //$paci=$this->secretaria->VerTurnos();
            //var_dump($pacientes);
            $array=array();
            //while($fila=mysqli_fetch_Assoc($paci)){
               // array_push($array, $fila);
            //}
            //var_dump($array);

            var_dump($_POST);
            if(isset($_POST['DPI']))
            {
                $dpi=$_POST['DPI'];
                $resultado=$this->secretaria->VerTurnos($dpi);
                while($consulta=mysqli_fetch_assoc($resultado))
                {
                    echo $consulta['DPI'];
                }
                die();
            }
            $this->smarty->assign('paci', $array);
            $this->smarty->assign('rol',"pacex");
            $this->smarty->assign('title','Asignación de Turnos');
            $this->smarty->display('Secretaria.tpl');
        }

        

        public function PacienteN()
        {
            if(isset($_POST['nom'])){
                $n=$_POST['nom'];
                $a=$_POST['apel'];
                $t=$_POST['cel'];
                $s=$_POST['segurom'];
                $id=$_POST['idpersonal'];
                $esp=$_POST['medico'];
                $f=$_POST['Fechan'];
                $h=$_POST['Horario'];
                $this->secretaria->PacienteNuevo($n,$a,$t,$s,$id,$esp,$f,$h);
            }
            $this->smarty->assign('rol',"pacnue");
            $this->smarty->assign('title','Paciente Nuevo');
            $this->smarty->display('Secretaria.tpl');
        }

        public function Salas()
        {
            $sal=$this->secretaria->VerSalas();
            //var_dump($pacientes);
            $array=array();
            while($fila=mysqli_fetch_assoc($sal)){
                array_push($array, $fila);
            }
            //var_dump($array);
            $this->smarty->assign('sal', $array);
            $this->smarty->assign('rol',"salas");
            $this->smarty->assign('title','Disponibilidad de salas');
            $this->smarty->display('Secretaria.tpl');
        }
    }
?>