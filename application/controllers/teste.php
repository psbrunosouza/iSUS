<?php

    class Medicos extends CI_Controller{

        public function index(){
            $this->load->model("medicosModel");
            $listaMedicos = $this->medicosModel->selectAll();

            $dados = array(
                'titulo'=>'Lista de médicos',
                'tabela'=>$listaMedicos,
                'pagina'=>'pages/listaMedicos.php'
            );

            $this->load->view("pages/listaMedicos", $dados);
        }

        public function cadastrar(){
            echo 'suave';
        }

    }

?>
