<?php
    class LoginUsuario extends CI_Controller{

      public function index(){
         $this->load->view("templates/head");
         $this->load->view("pages/loginUsuario");
      }

      public function autenticar(){
         $this->load->view("templates/head");
         $this->form_validation->set_rules("cpf", "cpf", "required|max_length[11]");
         $this->form_validation->set_rules("senha", "senha", "required|min_length[8]|max_length[16]");
         $this->form_validation->set_error_delimiters("<p class='alert-danger'>", "</p>");
         $sucesso =  $this->form_validation->run();

         if($sucesso){
             //Login e senha capturados da view
             $cpf = $this->input->post("cpf");
             $senha = md5($this->input->post("senha"));

             //Carregar a model e fazer o match do CPF e SENHA
             $this->load->model("usuarios_model");
             $usuario = $this->usuarios_model->logarUsuarios($cpf, $senha);

             //Verificação de login
             if($usuario){
                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_flashdata("success", "Logado com sucesso!");

                if($usuario["tipo"] == 'usr'){
                   redirect('/principalPacientes');
                }else if($usuario["tipo"] == 'med'){
                   redirect('/principalMedicos');
                }
             }else {
                $this->session->set_flashdata("danger", "Usuario ou senha invalidos!");
                redirect('/');
             }
         }else{
             $this->load->view("pages/loginUsuario");
         }
      }
    }

?>
