<?php
    class Consultas_model extends CI_Model{
        public function selecionar_consultas(){
            $query = $this->db->get('consultas', 100);
            return $query->result();
        }

        public function selecionar_por_cpf($cpf){
            $this->db->join('especialidades', 'usuarios.codEsp = especialidades.codEsp', 'inner');
            $this->db->join('consultas', 'usuarios.cpf = consultas.cpfMedico', 'inner');
            $this->db->where("consultas.cpfUsuario" , $cpf);
            $query = $this->db->get('usuarios');
            return $query->result();
        }

        public function selecionar_pacientes_agendados($cpf){
            $this->db->join('usuarios', 'USUARIOS.cpf = CONSULTAS.cpfUsuario', 'inner');
            $this->db->where("CONSULTAS.cpfMedico" , $cpf);
            $query = $this->db->get('consultas');
            return $query->result();
        }

        public function selecionar_consultas_agendadas($cpf){
            $this->db->where("consultas.cpfMedico" , $cpf);
            $query = $this->db->get('consultas');
            return $query->result();
        }

        public function salvar_consulta($id, $usuario){
            $this->db->set('cpfUsuario', $usuario);
            $this->db->where('codConsultas', $id);
            $this->db->update('consultas');
        }

        public function deletar_consulta($id){
            $this->db->delete('consultas', array('codConsultas' => $id));
        }

        public function salvar($id){
            $this->db->insert("consultas", $id);
        }

        public function consultas_id($id){
            $this->db->where("consultas.codConsultas" , $id);
            return $query = $this->db->get("consultas")->row_array();
        }

        public function editar_consulta($dados){
            $this->db->set('dataAtdm', $dados["dataAtdm"]);
            $this->db->set('horaAtdm', $dados["horaAtdm"]);
            $this->db->where('codConsultas', $dados["codConsultas"]);
            $this->db->update('consultas');
        }

    }
?>
