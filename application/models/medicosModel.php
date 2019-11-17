<?php
    class medicosModel extends CI_Model{
        public $nomeMedico;
        public $genero;
        public $nascimento;
        public $telefone;
        public $email;

        public function selectAll(){

            $query = $this->db->get('medicos', 100);

            return $query->result();
        }
    }
?>
