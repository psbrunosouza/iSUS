<?php
    class Especialidades_model extends CI_Model{
        public function selectAll(){
            $query = $this->db->get('especialidades', 100);
            return $query->result();
        }
    }
?>
