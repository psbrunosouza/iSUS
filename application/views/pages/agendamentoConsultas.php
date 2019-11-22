<div class="p-3"></div>
<div class="p-3"></div>

<div class="container">
    <h1> Agendamento </h1>
    <p> Preencha o formulário abaixo para agendar uma nova consulta.</p>

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
              <table class="table">
              <thead class="thead-light">
                    <tr>
                          <th scope="col">#</th>
                          <th scope="col">Médico</th>
                          <th scope="col">Especialidade</th>
                          <th scope="col">Horário</th>
                          <th scope="col">Marcar</th>
                    </tr>
              </thead>
              <tbody>
                    <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td><button class="btn btn-primary">Agendar</button></td>
                    </tr>
                  </tbody>
            </table>
        </div>
   </div>

    <?php form_close();?>
</div>
