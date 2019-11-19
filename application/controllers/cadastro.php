<?php

    class Cadastro extends CI_Controller{

        public function index(){
           $this->load->model("estadosCidadesModel");
           $cidades = $this->estadosCidadesModel->selectAllCidades();
           $estados = $this->estadosCidadesModel->selectAllEstados();

           $data = array(
                    'titulo'=>'Cidades',
                    'cidades'=>$cidades,
                    'pagina'=>'pages/cadastro.php'
                );
            /*
                array(
                   'titulo'=>'Estados',
                   'estados'=>$estados,
                   'pagina'=>'pages/cadastro.php'
              )
         );*/


           $this->load->view("templates/head");
           $this->load->view("pages/cadastro",  $data);

           var_dump($data);
        }

    }

?>
