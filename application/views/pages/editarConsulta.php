<div class="container">
    <h1> Agenda </h1>
    <p>Cadastre novas consultas e visualize as consultas cadastradas</p>

    <div class="container">
        <?= form_open("principalMedicos/editar"); ?>
           <div class="row form-group col-12">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="<?= $id ?>"/>
                    <input type="date" class="form-control" name="dataAtdm" id="data" value="<?= $dataAtdm ?>"/>
                </div>

                <div class="form-group ml-2">
                    <input type="time" class="form-control" name="horaAtdm" id="data" value="<?= $horaAtdm ?>"/>
                </div>


                <div class="form-group ml-2">
                    <?php  echo form_button(array(
                      "class" => "btn btn-primary",
                      "type" => "submit",
                      "content" => "Salvar"));?>
                </div>

          </div>
       <?= form_close(); ?>
    </div>
</div>
