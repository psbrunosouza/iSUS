<div class="container">

    <div class="card border-primary mb-3 mx-auto mt-5" style="max-width: ;">
          <div class="card-header">SUSA - Cadastro</div>
          <div class="card-body text-dark">
            <p class="card-text">Cadastra ai teu fila da puta.</p>

                <?php
                   echo form_open("usuarios/novo");
                     echo "<div class='row col-12'>";
                        echo "<div class='col-6'>";
                            echo form_label ($label_text = "Nome completo", $id = "nome");
                            echo form_input(array (
                              "name" => "nome",
                              "id" =>  "nome",
                              "class" => "form-control",
                              "maxlenght" => "255"
                            ));
                        echo "</div>";
                        echo "<div class='col-6'>";
                            echo form_label ($label_text = "Email", $id = "email");
                            echo form_input(array (
                              "name" => "email",
                              "id" =>  "email",
                              "class" => "form-control",
                              "maxlenght" => "24"
                            ));
                         echo "</div>";
                      echo "</div>";

                      echo "<div class='row col-12'>";
                        echo "<div class='col-6'>";
                            echo form_label ($label_text = "Cpf", $id = "cpf");
                            echo form_input(array(
                             "name" => "cpf",
                             "id" =>  "cpf",
                             "class" => "form-control"
                            ));
                        echo "</div>";
                        echo "<div class='col-6'>";
                            echo form_label ($label_text = "Senha", $id = "senha");
                            echo form_password(array (
                              "name" => "senha",
                              "id" =>  "senha",
                              "class" => "form-control",
                              "maxlenght" => "24"
                            ));
                        echo "</div>";
                      echo "</div>";               

                      echo "<div class='row col-12'>";
                         echo "<div class='form-group col-6'>";
                           echo form_label($label_text = "Cidade", $id = "cidade");
                           echo form_dropdown(
                              'cidades',
                              $cidades,
                              'SSA',
                              'class="form-control"'
                           );
                        echo "</div>";
                        echo "<div class='form-group col-6'>";
                           echo form_label($label_text = "Estado", $id = "estado");
                           echo form_dropdown(
                              'estados',
                              $estados,
                              'BA',
                              'class="form-control"'
                           );
                        echo "</div>";
                      echo "</div>";

                      echo "<div class='row col-12'>";
                         echo "<div class='form-group col-10'>";
                           echo form_label ($label_text = "Masculino", $id = "masculino");
                           $dataM = array(
                            'name'          => 'genero',
                            'id'            => 'masculino',
                            'value'         => 'Masculino',
                            'checked'       => TRUE
                           );
                           echo form_radio($dataM);

                           echo "&nbsp;&nbsp;";

                           echo form_label ($label_text = "Feminino", $id = "feminino");
                           $dataF = array(
                            'name'          => 'genero',
                            'id'            => 'feminino',
                            'value'         => 'Feminino',
                            'checked'       => FALSE
                           );
                           echo form_radio($dataF);
                         echo "</div>";

                         echo "<div class='btn-group col-2'>";
                            echo form_button(array(
                              "class" => "btn btn-primary",
                              "type" => "submit",
                              "content" => "Cadastrar"
                            ));
                         echo "</div>";

                      echo "</div>";

                   echo form_close();
                 ?>
             </div>


          </div>
        </div>
