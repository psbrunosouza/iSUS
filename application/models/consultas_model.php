<?php
    class Consultas_model extends CI_Model{
        public function selectAll(){
            //$query = $this->db->get('consultas', 100);
            $this->db->join('consultas', 'consultas.cpfUsuario = usuarios.cpf', 'inner');
            $query = $this->db->get('usuarios');
            return $query->result();
        }

        public function selectById($cpf){
            //$query = $this->db->get('consultas', 100);
            $this->db->join('consultas', 'consultas.cpfUsuario = usuarios.cpf', 'inner');
            $this->db->where("cpf", $cpf);
            $query = $this->db->get('usuarios');
            return $query->result();
        }
    }
?>
