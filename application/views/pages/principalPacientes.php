<div class="container p-5" style="height: 25em;">
    <div class="jumbotron">
         <h1 class="display-4">Agenda</h1>
         <p class="lead">Aqui está uma lista das suas consultas agendadas.</p>
         <hr class="my-4">
         <p>Se você deseja realizar um novo cadastro de consulta, clique no botão abaixo.</p>
         <a class="btn btn-primary btn-lg" href="especialidadesMedico" role="button">Agendar</a>
    </div>
    <table class="table">
          <thead>
                <tr>
                      <th scope="col">Médico</th>
                      <th scope="col">Data</th>
                      <th scope="col">Hora</th>
                      <th scope="col">Especialidade</th>
                      <th scope="col">Desmarcar</th>
                </tr>
          </thead>
          <tbody>



                <?php foreach($consultas as $con){ ?>

                    <tr>
                          <td><?= $con->nome ?></td>
                          <td><?= $con->dataAtdm ?></td>
                          <td><?= $con->horaAtdm ?></td>
                          <td><?= $con->nomeEsp ?></td>
                          <td><a>
                              <?= anchor('principalPacientes/deletarConsulta?id='. $con->codConsultas, 'Apagar'); ?>
                          </a></td>
                    </tr>

                <?php } ?>
          </tbody>

    </table>
</div>
