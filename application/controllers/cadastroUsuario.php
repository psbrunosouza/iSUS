<?php

    class CadastroUsuario extends CI_Controller{

        public function index(){
           $this->load->view("templates/head");
           $this->load->view("pages/cadastroUsuario");
        }

        public function novo(){
            $this->load->view("templates/head");
            $this->form_validation->set_rules("cpf", "cpf", "required|max_length[11]|min_length[11]");
            $this->form_validation->set_rules("senha", "senha", "required|min_length[8]|max_length[16]");
            $this->form_validation->set_rules("nome", "nome", "required|min_length[4]|max_length[24]");
            $this->form_validation->set_rules("email", "email", "required|max_length[24]|valid_email");
            $this->form_validation->set_error_delimiters("<p class='alert-danger'>", "</p>");
            $sucesso =  $this->form_validation->run();

            if($sucesso){
                $usuario = array(
                      "cpf" => $this->input->post("cpf"),
                      "senha" => md5($this->input->post("senha")),
                      "nome" => $this->input->post("nome"),
                      "email" => $this->input->post("email"),
                      "tipo" => 'usr',
                      "codEsp" => 9999
                );

                 $this->load->model("usuarios_model");
                 $this->usuarios_model->salvarUsuario($usuario);
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
            }else{
                $this->load->view("pages/cadastroUsuario");
            }
        }
    }

?>
