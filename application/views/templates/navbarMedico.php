<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">

  <a class="navbar-brand" href="<?= site_url('/principal')?>"> <i class="fas fa-clinic-medical"></i> SUSA</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse auto" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('/principal')?>">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acesso
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item disabled" href="#">Admin</a>
          <a class="dropdown-item" href="<?= site_url("loginUsuario/logout") ?>">Sair</a>
        </div>
      </li>
    </ul>
  </div>

</nav>
