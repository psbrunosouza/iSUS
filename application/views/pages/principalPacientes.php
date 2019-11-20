
<div class="container-fluid" style="height: 25em;">
    <table class="table">
          <thead>
                <tr>
                      <th scope="col">Paciente</th>
                      <th scope="col">Data do atendimento</th>
                      <th scope="col">Descrição do atendimento</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Desmarcar</th>
                </tr>
          </thead>
          <tbody>
                <?php foreach($consultas as $con){ ?>

                    <tr>
                          <td><?= $con->nome ?></td>
                          <td><?= $con->dataAtdm ?></td>
                          <td><?= $con->descricao ?></td>
                          <td><button type="button" class="btn btn-link">Editar
                              <?php
                                  $id = $con->codConsultas;
                                  echo $id;
                              ?>
                          </button></td>
                          <td><button type="button" class="btn btn-link">Desmarcar
                              <?php
                                  $id = $con->codConsultas;
                                  echo $id;
                              ?>
                          </button></td>
                    </tr>

                <?php } ?>
          </tbody>

    </table>
</div>
