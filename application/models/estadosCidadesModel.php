<?php
    class estadosCidadesModel extends CI_Model{
        public function selectAllEstados(){

            $query = $this->db->get('estados', 100);

            return $query->result();
        }

        public function selectAllCidades(){

            $query = $this->db->get('cidades', 100);

            return $query->result();
        }
    }
?>
