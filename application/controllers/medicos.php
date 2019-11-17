<?php
   class medicos extends CI_controller {

      public function index() {

         $this->load->model('medicosModel');

            $tabela = $this->medicosModel->SelecionarTodos();

            $dados = array(
               'titulo' =>'Marcar Consulta',
               'tabela' =>$tabela,
               'pagina' =>'medicos/index.php'
            );

         $this->load->view('index',$dados);
      }
   }
?>
