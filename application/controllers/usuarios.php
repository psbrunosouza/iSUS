<?php
   class Usuarios extends CI_Controller{

       public function index(){

       }

       public function novo(){
         $usuario = array(
            "cpf" => $this->input->post("cpf"),
            "senha" => md5 ($this->input->post("senha")),
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "tipo" => 'usr'
         );

          $this->load->model("usuarios_model");
          $this->usuarios_model->salvar($usuario);
          $this->load->view("pages/novoUsuario");
       }
   }
?>
