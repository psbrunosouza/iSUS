
<div class="container col-9">
    <div class="row p-3">

            <?php foreach($especialidades as $esp){
            ?>
            <?php form_open("agendamento")?>
             <div class="col-sm-4 mt-3">
               <div class="card">
                 <div class="card-body">
                   <input type="hidden" name="id" value="<?= $esp->codEsp; ?>"/>
                   <h5 class="card-title"><?= $esp->nome ?></h5>
                   <p class="card-text"><?= $esp->descricao ?></p>
                   <a href="agendamento"><input type="submit"
                        class="btn btn-primary" value="enviar"/></a>
                 </div>
               </div>
             </div>
             <?php form_close()?>
         <?php
            } ?>
    </div>
</div>
