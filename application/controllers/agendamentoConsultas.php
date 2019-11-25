<?php
    class AgendamentoConsultas extends CI_Controller{

        public function index(){
            $id = $this->input->get("id");
            $this->load->model("especialidades_model");
            $medicosEspecialidade = $this->especialidades_model->selecionar_por_especialidade($id);

            $dados = array(
                'medicosPorEspecialidade' => $medicosEspecialidade
            );

            $usuario = $this->session->usuario_logado;

            if($usuario){
                $this->load->view("templates/head.php");
                $this->load->view("templates/navbarUsuario.php");
                $this->load->view("templates/header.php");
                $this->load->view("pages/agendamentoConsultas", $dados);
                $this->load->view("templates/footer.php");
            }else{
                redirect('/loginUsuario');
            }
        }


        public function agendar(){
            $id = $this->input->get("id");
            $usuario = $this->session->usuario_logado["cpf"];

            $this->load->model("consultas_model");
            $this->consultas_model->salvar_consulta($id, $usuario);


            redirect('/');
        }
    }
?>
