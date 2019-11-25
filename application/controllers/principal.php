<?php
    class Principal extends CI_Controller
    {

        public function index(){
            $usuario = $this->session->usuario_logado;

            if($usuario){
                if($usuario["tipo"] == "usr"){
                    redirect("/principalPacientes");
                }else if($usuario["tipo"] == "med"){
                    redirect("/principalMedicos");
                }
            }else{
                redirect("/loginUsuario");
            }
        }
    }
?>
