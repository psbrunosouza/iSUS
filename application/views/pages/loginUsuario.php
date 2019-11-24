<div class="container">
   <?php if($this->session->flashdata("success")) : ?>
      <p class="alert alert-success"> <?= $this->session->flashdata("success") ?> </p>
   <?php endif ?>

   <?php if($this->session->flashdata("danger")) : ?>
      <p class="alert alert-danger"> <?= $this->session->flashdata("danger") ?> </p>
   <?php endif ?>

    <div class="mt-5"></div>
    <div class="mt-5"></div>

    <div class="card border-primary mb-3 mx-auto" style="max-width: 22rem;">
      <div class="card-header">SUSA - Login</div>
      <div class="card-body text-dark">
        <p class="card-text">Entre com suas credencias de acesso ou siga para a
            página de registro para novos usuários.</p>
            <?php
            echo form_open("loginUsuario/autenticar");
                echo form_label ($label_text = "CPF: ", $id = "cpf");
                echo form_input(array (
                  "name" => "cpf",
                  "id" =>  "cpf",
                  "class" => "form-control",
                  "maxlenght" => "11"
                ));

                echo form_error("cpf", "");

                echo form_label ($label_text = "Senha: ", $id = "senha");
                echo form_password(array (
                  "name" => "senha",
                  "id" =>  "senha",
                  "class" => "form-control",
                  "maxlenght" => "24"
                ));

                echo form_error("senha", "");
             ?>

            <div>
                <a href="<?php echo site_url('/cadastroUsuario'); ?>" class="btn btn-link">Cadastre-se</a>
            </div>
            <div>
                <button type="submit" class="btn btn-link">Entrar</button>
            </div>
            <?php echo form_close(); ?>
      </div>
    </div>
</div>
