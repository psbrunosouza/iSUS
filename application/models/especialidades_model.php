<?php
    class Especialidades_model extends CI_Model{
        public function selecionar_especialidades(){
            $this->db->where('especialidades.codEsp !=', '9999');
            $query = $this->db->get('especialidades');
            return $query->result();
        }

        public function selecionar_por_especialidade($id){
            $this->db->join('especialidades', 'usuarios.codEsp = especialidades.codEsp', 'inner');
            $this->db->join('consultas', 'usuarios.cpf = consultas.cpfMedico', 'inner');
            $this->db->where("consultas.codEsp" , $id);
            $this->db->where("consultas.cpfUsuario" , '00000000000');
            $query = $this->db->get('usuarios');
            return $query->result();
        }
    }
?>
