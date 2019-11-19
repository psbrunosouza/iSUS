<div class="container">
    <div class="mt-5"></div>
    <div class="mt-5"></div>

    <div class="card border-primary mb-3 mx-auto" style="max-width: 22rem;">
      <div class="card-header">SUSA - Login</div>
      <div class="card-body text-dark">
        <p class="card-text">Entre com suas credencias de acesso ou siga para a
            página de registro para novos usuários.</p>
            <?php
            echo form_open("login/autenticar");
                echo form_label ($label_text = "CPF: ", $id = "cpf");
                echo form_input(array (
                  "name" => "cpf",
                  "id" =>  "cpf",
                  "class" => "form-control",
                  "maxlenght" => "11"
                ));

                echo form_label ($label_text = "Senha: ", $id = "senha");
                echo form_input(array (
                  "name" => "senha",
                  "id" =>  "senha",
                  "class" => "form-control",
                  "maxlenght" => "24"
                ));
            echo form_close();
             ?>
            <div>
                <button type="button" class="btn btn-link"><a href="#rs">Registre-se</a></button>
            </div>
            <div>
                <button type="button" class="btn btn-link"><a href="#ra">Recuperar acesso</a></button>
            </div>
        </form>
      </div>
    </div>
</div>
