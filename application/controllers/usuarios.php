<?php
   class Usuarios extends CI_Controller{

       public function index(){

       }

       public function novo(){
         $usuario = array(
            "cpfPaciente" => $this->input->post("cpf"),
            "senha" => $this->input->post("senha"),
            "nomePaciente" => $this->input->post("nome"),
            "genero" => 'M',
            "nascimento" => '1996-06-15',
            "rg" => '242424242',
            "telefone" => '123',
            "email" => $this->input->post("email")
         );

          $this->load->model("usuarios_model");
          $this->usuarios_model->salvar($usuario);
          $this->load->view("pages/novoUsuario");
       }
   }
?>
