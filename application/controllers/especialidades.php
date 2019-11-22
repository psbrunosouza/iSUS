<?php
    class Especialidades extends CI_Controller{

        public function index(){
            $this->load->model("especialidades_model");
            $especialidade = $this->especialidades_model->selectAll();

            $dados = array(
                'especialidades' => $especialidade
            );

            $this->load->view("templates/head");
            $this->load->view("templates/header");
            $this->load->view("pages/especialidadeMedico", $dados);
            $this->load->view("templates/footer");
        }
    }
?>
