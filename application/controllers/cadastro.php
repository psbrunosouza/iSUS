<?php

    class Cadastro extends CI_Controller{

        public function index(){
           $this->load->view("templates/head");
           $this->load->view("pages/cadastro");
        }

        public function novo(){
          $usuario = array(
                "cpf" => $this->input->post("cpf"),
                "senha" => md5($this->input->post("senha")),
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "tipo" => 'usr'
          );

           $this->load->model("usuarios_model");
           $this->usuarios_model->salvar($usuario);
           $usuarioLocal = $this->usuarios_model->logarUsuarios($usuario["cpf"], $usuario["senha"]);

           if($usuarioLocal){
              $this->session->set_userdata("usuario_logado", $usuario); /*Caso a sessão exista sete para usuario logado*/
              $this->session->set_flashdata("success", "Logado com sucesso!");

              if($usuarioLocal["tipo"] == 'usr'){
                 redirect('/principalPacientes');
              }else if($usuarioLocal["tipo"] == 'med'){
                 redirect('/principalMedicos');
              }
           }else {
              $this->session->set_flashdata("danger", "Usuario ou senha invalidos!");
              redirect('/');
           }
        }
    }

?>
