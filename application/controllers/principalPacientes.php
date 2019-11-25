<?php
    class principalPacientes extends CI_Controller{

        public function index(){
            //Pegar usuario logado na sessao
            $usuario = $this->session->usuario_logado;
            $cpf = $usuario['cpf'];

            //Verificacao de usuario logado
            if($usuario){

                $this->load->model("Consultas_model");
                $consultas = $this->Consultas_model->selecionar_por_cpf($cpf);

                $dados = array(
                    'consultas' => $consultas
                );

                $this->load->view("templates/head");
                $this->load->view("templates/navbarUsuario");
                $this->load->view("templates/header");
                $this->load->view("pages/principalPacientes", $dados);
                $this->load->view("templates/footer");
            }else{
                redirect('/loginUsuario');
            }
        }

        public function deletarConsulta(){
            $id = $this->input->get("id");
            $this->load->model("consultas_model");
            $this->consultas_model->deletar_consulta($id);

            redirect("/principalPacientes");
        }
    }

?>
