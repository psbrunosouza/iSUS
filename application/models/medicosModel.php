<?php
   class medicosModel extends CI_model {
      public $cpfMedico;
      public $senha;
      public $nomeMedico;
      public $genero;
      public $nascimento;
      public $rg;
      public $crm;
      public $telefone;
      public $email;
      public $codEspecialidade;

      public function SelecionarTodos(){
         $retorno = $this->db->get('MEDICOS',100);

         return $retorno->result();
      }
   }
 ?>
