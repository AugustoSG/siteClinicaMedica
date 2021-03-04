<?php include_once("restricao_supervisor.php");?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #FFA1A4;">

    <?php include_once("topo.php");?>
   
      <div class="jumbotron jumbotron-fluid text-center m-0" style="background-color: #FE595E; color:white;">
        <div class="container">
          <h1 class="display-4">Cadastrar Usuários</h1>
          <p class="lead">Cadastre usuários para o site</p>
        </div>
      </div>

      <form name="CadastarUsuario" action="Insert_Us.php" method="POST">
        <div class="form-row m-md-5">
          <div class="col-6">
            <p>Nome</p>
            <input type="text" name="usuario_nome" class="form-control mb-3" value="">
            <p>E-mail</p>
            <input type="email" name="usuario_email" class="form-control mb-3" value="">
            <p>Senha</p>
            <input type="password" name="usuario_senha" class="form-control mb-3" value="">
            <p>Tipo</p>
            <select class="custom-select" name="usuario_tipo" id="validationCustom04" required value="">
                <option>Comum</option>
                <option>Supervisor</option>
            </select>
          </div>
        </div>
        <div class="row" style="padding-bottom: 100px; padding-left: 67px">
          <input type="submit" name="salvar" value="Salvar" class="btn btn-dark border-secondary mr-3">    
          <input type="reset" name="desfazer" value="Desfazer" class="btn btn-dark border-secondary mr-3">  
          <a class="btn btn-dark border-secondary" href="UsuariosCadastrados.php">Listar</a>
        </div>
      </form>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>