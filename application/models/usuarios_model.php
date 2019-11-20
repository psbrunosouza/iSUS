<?php

   class Usuarios_model extends CI_Model{

      public function salvar($usuario){
         $this->db->insert("usuarios", $usuario);
      }

      public function logarUsuarios($cpf, $senha){
         /*Pega o cpf e a senha que coincidam com essas*/
         $this->db->where("cpf", $cpf);
         $this->db->where("senha", $senha);
         /*Joga na variavel usuario*/
         $usuario = $this->db->get("usuarios")->row_array();
         
         /*Retorna usuario*/
         return $usuario;
      }

   }

?>
