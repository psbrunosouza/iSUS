<?php

    class Cadastro extends CI_Controller{

        public function index(){
           $this->load->view("templates/head");
           $this->load->view("pages/cadastro");
        }

    }

?>
