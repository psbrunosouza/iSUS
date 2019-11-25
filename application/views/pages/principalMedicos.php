<div class="p-3"></div>

<div class="container">
    <h1> Agenda </h1>
    <p>Cadastre novas consultas e visualize as consultas cadastradas</p>

    <div class="container">
        <?= form_open("principalMedicos/salvar"); ?>
           <div class="row form-group col-12">
                <div class="form-group">
                    <input type="date" class="form-control" name="data" id="data" aria-describedby="dataHelp" />
                </div>

                <div class="form-group ml-2">
                    <input type="time" class="form-control" name="hora" id="data" aria-describedby="dataHelp" />
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


    <div class="p-2"></div>

   <ul class="nav nav-tabs" id="myTab" role="tablist">
     <li class="nav-item">
       <a class="nav-link active" id="periodos-tab" data-toggle="tab" href="#periodos" role="tab" aria-controls="periodos" aria-selected="true">Períodos Agendados</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">Consultas agendadas</a>
     </li>
   </ul>
   <div class="tab-content" id="myTabContent">
     <div class="tab-pane fade show active" id="periodos" role="tabpanel" aria-labelledby="periodos-tab"><div class="card-body" >
           <h5 class="card-title">Períodos registrados</h5>
           <table class="table table-hover table-sm table-bordeless text-center">
                 <thead class="bg-light">
                       <tr>
                             <th scope="col">Data</th>
                             <th scope="col">Hora</th>
                             <th scope="col">Editar</th>
                             <th scope="col">Excluir</th>
                       </tr>
                 </thead>
                 <tbody>
                     <?php foreach($periodosAgendados as $conAgen) {?>
                       <tr>
                             <td><?= $conAgen->dataAtdm ?></td>
                             <td><?= $conAgen->horaAtdm ?></td>
                             <td>
                             <a class="btn btn-primary btn-sm" href="<?= site_url('principalMedicos/editarConsulta?id=' . $conAgen->codConsultas); ?>">
                                 Editar
                             </a></td>
                             <td><a class="btn btn-danger btn-sm" href="<?= site_url('principalMedicos/deletarConsulta?id='. $conAgen->codConsultas); ?>">
                                 Excluir
                             </a></td>
                       </tr>
                    <?php }?>
                 </tbody>
           </table>
    </div></div>
     <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="consultas-tab"> <div class="card-body">
            <h5 class="card-title">Consultas agendadas</h5>
            <table class="table table-hover table-sm table-bordeless text-center">
                  <thead class="bg-light">
                       <tr>
                              <th scope="col">Paciente</th>
                              <th scope="col">Data</th>
                              <th scope="col">Hora</th>
                              <th scope="col">Editar</th>
                              <th scope="col">Excluir</th>
                       </tr>
                  </thead>
                  <tbody>
                      <?php foreach($consultasAgendadas as $conAgen) {?>
                       <tr>
                              <td><?= $conAgen->nome ?></td>
                              <td><?= $conAgen->dataAtdm ?></td>
                              <td><?= $conAgen->horaAtdm ?></td>
                              <td><a class="btn btn-info btn-sm" href="<?= site_url('principalMedicos/editarConsulta?id=' . $conAgen->codConsultas); ?>">
                                 Editar
                              </a></td>
                              <td><a class="btn btn-danger btn-sm" href="<?= site_url('principalMedicos/deletarConsulta?id='. $conAgen->codConsultas); ?>">
                                 Excluir
                              </a></td>
                       </tr>
                     <?php }?>
                  </tbody>
            </table>
     </div></div>
   </div>

</div>
