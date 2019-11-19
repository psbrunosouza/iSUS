<?php

    class principalPacientes extends CI_Controller{

        public function index(){

            $this->load->model("consultas_model");
            $consultas = $this->consultas_model->selectAll();

            $dados = array(
                'titulo' => 'Consultas',
                'consultas' => $consultas,
                'pagina' => 'pages/principalPacientes.php'
            );

            $this->load->view("templates/head");
            $this->load->view("templates/header");
            $this->load->view("pages/principalPacientes", $dados);
            $this->load->view("templates/footer");
        }

    }

?>
