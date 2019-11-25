
<div class="container col-9">
    <div class="row p-3">
        <?php foreach($especialidades as $esp){ ?>
             <div class="col-sm-4 mt-3">
               <div class="card">
                 <div class="card-body">
                   <input type="hidden" name="id" value="<?= $esp->codEsp; ?>"/>
                   <h5 class="card-title"> <?=  $esp->nomeEsp; ?></h5>
                   <p class="card-text"><?= $esp->descricao; ?></p>
                   <a class="btn btn-primary btn-sm" href="<?= site_url('agendamentoConsultas?id='.$esp->codEsp); ?>"> Agendar </a>
                 </div>
               </div>
             </div>
         <?php } ?>

    </div>
</div>
