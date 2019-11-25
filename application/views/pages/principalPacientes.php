<div class="p-3"></div>

<div class="container">
    <h1> Consultas </h1>
    <p>Agende novas consultas e visualize as consultas cadastradas</p>
    <a class="btn btn-primary btn-sm" href="especialidadesMedico" role="button">Agendar</a>

    <div class="p-2"></div>

    <div class="card text-center">
        <div class="card-header">
             <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Consultas</a>
                  </li>
             </ul>
        </div>
        <div class="card-body">
            <div class="container p-5" style="height: 25em;">
                <table class="table table-hover table-sm table-bordeless text-center">
                      <thead class="bg-light">
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
                                      <td><a class="btn btn-danger btn-sm" href="<?= site_url('principalPacientes/deletarConsulta?id='. $con->codConsultas); ?>">
                                          Apagar
                                      </a></td>
                                </tr>

                            <?php } ?>
                      </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
