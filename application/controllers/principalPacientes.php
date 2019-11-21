<?php
    class principalPacientes extends CI_Controller{

        public function index(){

            $localSession = $this->session->usuario_logado;
            $id = $localSession['cpf'];

            $this->load->model("consultas_model");
            $consultas = $this->consultas_model->selectById($id);

            $dados = array(
                'consultas' => $consultas,
            );

            $this->load->view("templates/head");
            $this->load->view("templates/header");
            $this->load->view("pages/principalPacientes", $dados);
            $this->load->view("templates/footer");
        }
    }

?>
