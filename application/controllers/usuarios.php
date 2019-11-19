<?php
   class Usuarios extends CI_Controller{

       public function index(){

       }

       public function novo(){
         $usuario = array(
            "cpf" => $this->input->post("cpf"),
            "senha" => md5 ($this->input->post("senha")),
            "nomeUsuario" => $this->input->post("nome"),
            "genero" => 'M',
            "nascimento" => '1996-06-15',
            "rg" => '242424242',
            "crm" => '55',
            "telefone" => '123',
            "email" => $this->input->post("email"),
            "tipo" => '2',
            "codEspecialidade" => '9999',
            "codCidade" => 'SSA'
         );

          $this->load->model("usuarios_model");
          $this->usuarios_model->salvar($usuario);
          $this->load->view("pages/novoUsuario");
       }
   }
?>
