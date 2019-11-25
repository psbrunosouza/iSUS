<div class="p-3"></div>
<div class="p-3"></div>

<div class="container">
    <h1> Agendamento </h1>
    <p> Selecione um especialista nos horários disponíveis abaixo.</p>

    <?php form_open("agendamento/agendar");?>

    <div class="card text-center">
        <div class="card-header">
             <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Agendar consultas</a>
                  </li>
             </ul>
        </div>
        <div class="card-body">
              <h5 class="card-title">Medicos e horários disponíveis para atendimento</h5>
              <table class="table table-hover table-sm table-bordeless text-center">
              <thead class="thead-light">
                    <tr>

                          <th scope="col">Médico</th>
                          <th scope="col">Especialidade</th>
                          <th scope="col">Data</th>
                          <th scope="col">Hora</th>
                          <th scope="col">Marcar</th>
                    </tr>
              </thead>
              <tbody>

                  <?php
                   foreach($medicosPorEspecialidade as $medEsp){
                       ?>
                    <tr>
                          <td><?= $medEsp->nome ?></td>
                          <td><?= $medEsp->nomeEsp ?></td>
                          <td><?= $medEsp->dataAtdm ?></td>
                          <td><?= $medEsp->horaAtdm ?></td>
                          <td><a class="btn btn-primary btn-sm" href="<?= site_url('agendamentoConsultas/agendar?id='. $medEsp->codConsultas); ?>"> Agendar </a></td>

                    </tr>
                <?php } ?>
                  </tbody>
            </table>
        </div>
   </div>

    <?php form_close();?>
</div>
