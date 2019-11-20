<div class="container p-5" style="height: 25em;">
    <table class="table">

        <div class="jumbotron">
             <h1 class="display-4">Agenda</h1>
             <p class="lead">Aqui está uma lista das suas consultas agendadas.</p>
             <hr class="my-4">
             <p>Se você deseja realizar um novo cadastro de consulta, clique no botão abaixo.</p>
             <a class="btn btn-primary btn-lg" href="#" role="button">Agendar</a>
        </div>

          <thead>
                <tr>  <th scope="col">Médico</th>               
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
                          <td><button type="button" class="btn btn-info">E</button></td>
                          <td><button type="button" class="btn btn-danger">X</button></td>
                    </tr>

                <?php } ?>
          </tbody>
    </table>
</div>
