<?php

    class principalMedicos extends CI_Controller{

        public function index(){

            $cpf = $this->session->usuario_logado['cpf'];

            $this->load->model("consultas_model");
            $periodosAgendados = $this->consultas_model->selecionar_consultas_agendadas($cpf);
            $consultasAgendadas = $this->consultas_model->selecionar_pacientes_agendados($cpf);

            $dados = array(
                'periodosAgendados' => $periodosAgendados,
                'consultasAgendadas' => $consultasAgendadas
            );

            $this->load->view("templates/head");
            $this->load->view("templates/header");
            $this->load->view("pages/principalMedicos", $dados);
            $this->load->view("templates/footer");
        }

        public function salvar(){
            $data = $this->input->post("data");
            $hora = $this->input->post("hora");
            $medico = $this->session->usuario_logado;



            $dadosConsulta = array(
                 'codConsultas' => 'null',
                 'dataAtdm' => $data,
                 'horaAtdm' => $hora,
                 'cpfUsuario' => '00000000000',
                 'cpfMedico' => $medico["cpf"],
                 'codEsp' => $medico["codEsp"]
            );

            $this->load->model("consultas_model");
            $this->consultas_model->salvar($dadosConsulta);

            redirect("/principalMedicos");
        }

        public function editarConsulta(){

            $id = $this->input->get('id');
            $this->load->model("consultas_model");
            $consultas_id = $this->consultas_model->consultas_id($id);

            $dados = array(
                'id' => $id,
                'dataAtdm' => $consultas_id['dataAtdm'],
                'horaAtdm' => $consultas_id['horaAtdm']
            );

            $this->load->view("templates/head");
            $this->load->view("templates/header");
            $this->load->view("pages/editarConsulta", $dados);
            $this->load->view("templates/footer");
        }

        public function editar(){

            $dados = array(
                'codConsultas' => $this->input->post("id"),
                'dataAtdm' => $this->input->post("dataAtdm"),
                'horaAtdm' => $this->input->post("horaAtdm")
            );

            $this->load->model("consultas_model");
            $this->consultas_model->editar_consulta($dados);

            redirect("/");

        }

        public function deletarConsulta(){
            $id = $this->input->get("id");
            $this->load->model("consultas_model");
            $this->consultas_model->deletar_consulta($id);

            redirect("/");
        }
    }

?>
