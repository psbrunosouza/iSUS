<?php
    class especialidadesMedico extends CI_Controller{

        public function index(){

            //Carregar model especialidades e retornar todas especialidades
            $this->load->model("especialidades_model");
            $especialidade = $this->especialidades_model->selecionar_especialidades();
            $dados = array(
                'especialidades' => $especialidade
            );

            //capturar usuario da sessao
            $usuario = $this->session->usuario_logado;

            //verificar usuario logado
            if($usuario){
                $this->load->view("templates/head");
                $this->load->view("templates/header");
                $this->load->view("pages/especialidadeMedico", $dados);
                $this->load->view("templates/footer");
            }else{
                redirect('/loginUsuario');
            }

        }


    }
?>
