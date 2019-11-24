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

    <div class="card text-center">
        <div class="card-header">
             <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Períodos agendados</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="#">Consultas agendadas</a>
                  </li>
             </ul>
        </div>
        <div class="card-body">
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
                                <td><a class="btn btn-info" href="<?= site_url('principalMedicos/editarConsulta?id=' . $conAgen->codConsultas); ?>">
                                    Editar
                                </a></td>
                                <td><a class="btn btn-danger" href="<?= site_url('principalMedicos/deletarConsulta?id='. $conAgen->codConsultas); ?>">
                                    Excluir
                                </a></td>
                          </tr>
                       <?php }?>
                    </tbody>
              </table>
        </div>

        <div class="card-body">
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
                                <a class="btn btn-info" href="<?= site_url('principalMedicos/editarConsulta?id=' . $conAgen->codConsultas); ?>">
                                    Editar
                                </a></td>
                                <td><a class="btn btn-danger" href="<?= site_url('principalMedicos/deletarConsulta?id='. $conAgen->codConsultas); ?>">
                                    Excluir
                                </a></td>
                          </tr>
                       <?php }?>
                    </tbody>
              </table>
        </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
