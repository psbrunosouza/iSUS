<?php
    class Agendamento extends CI_Controller{

        public function index(){

            $this->load->view("templates/head.php");
            $this->load->view("templates/header.php");
            $this->load->view("pages/agendamentoConsultas.php");
            $this->load->view("templates/footer.php");
        }

        public function agendar(){
            
        }

    }
?>
