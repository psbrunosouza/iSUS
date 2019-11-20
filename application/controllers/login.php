<?php
    class Login extends CI_Controller{

      public function index(){
         $this->load->view("templates/head");
         $this->load->view("pages/login");
      }

      public function autenticar(){

         $this->load->model("usuarios_model");

         $cpf = $this->input->post("cpf");
         $senha = md5($this->input->post("senha"));
         $usuario = $this->usuarios_model->logarUsuarios($cpf, $senha);


         /*Teste para verificar se usuario existe*/
         if($usuario){
            $this->session->set_userdata("usuario logado", $usuario); /*Caso a sessão exista sete para usuario logado*/
            $this->session->set_flashdata("success", "Logado com sucesso!");
               echo "asd";
            if($usuario["tipo"] == 'usr'){
               echo "asd";
               redirect('/principalPacientes');
            }else if($usuario["tipo"] == 'med'){
               redirect('/principalMedicos');
            }
         }else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalidos!");
         }
         redirect('/');
      }

    }

?>
