<?php

   class Usuarios_model extends CI_Model{

      public function salvarUsuario($usuario){
         $this->db->insert("usuarios", $usuario);
      }

      public function logarUsuarios($cpf, $senha){
         $this->db->where("cpf", $cpf);
         $this->db->where("senha", $senha);
         return $usuario = $this->db->get("usuarios")->row_array();
      }
   }

?>
