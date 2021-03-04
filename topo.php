<?php
//Iniciar a sessão
if(!isset($_SESSION)){
  session_start();
}

  if(!empty($_SESSION)){
    $nome = substr(strtoupper($_SESSION['usuario_nome']), 0, 5);
  }

strstr('/;/pg;/Ho', substr(strrchr($_SERVER['REQUEST_URI'], '/'), 0, 2)) ? $restrito = false : $restrito = true;

?>

<header class="container-fluid;">
      <div class="row align-items-center justify-content-center;">
        <div class="col-sm-1 text-center">
          <nav class="navbar">
            <a class="navbar-brand" href="http://localhost/clinica_valinhos/Home.php">
              <img src="image\Logo.png" width="200" height="100" alt="">
            </a>
          </nav>
        </div>
        <div class="col-sm-11 text-center" style="font-size: 18px;">
          <ul class="nav justify-content-center">            
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/pg_Paciente.php">Paciente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/pg_Especialidades.php">Especialidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/pg_SobreNos.php">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/pg_Informacoes.php">Informações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/pg_Contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localhost/clinica_valinhos/Administrativo.php">Administração</a>
            </li>
            <div class="dropdown">
              <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:Verdana, Geneva, Tahoma, sans-serif;"><?php echo !empty($_SESSION) ? $nome : 'Entrar' ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <form class="px-4 py-3" enctype="form-data" action="LoginLogout.php" method="POST">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="usuario_email" placeholder="email@examplo.com" style="width: 180px;">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Senha</label>
                    <input type="password" class="form-control" id="senha" name="usuario_senha" placeholder="Senha">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">Lembrar</label>
                    </div>
                  </div>
                    <input type="submit" class="btn btn-primary border-secondary" name="entrar" value="Entrar">
                    <a class="btn btn-danger border-secondary <?php echo !empty($_SESSION) ? "" : "disabled" ?>" onclick="return confirm('Deseja sair?');" href="LoginLogout.php?logout=true&restrito=<?php echo $restrito ?>">Sair</a>
                </form>
                <a class="dropdown-item" href="http://localhost/clinica_valinhos/CadastrarSenha.php">Esqueceu a Senha</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </header>
    <main class="container-fluid;" style="background-color: white;">

  