<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #BEB0B0;">

    <?php include_once("topo.php");?>
      
      <div class="jumbotron jumbotron-fluid text-center m-0" style="background-color: #978888; color:white;">
        <div class="container">
          <h1 class="display-4">Cadastre uma nova senha</h1>
          <p class="lead">Preencha os campos para cadastrar uma nova senha</p>
        </div>
      </div>

      <form>
        <div class="form-row m-md-5">
          <div class="col-6">
            <p>E-mail</p>
            <input type="email" class="form-control mb-3">
            <p>Senha</p>
            <input type="password" class="form-control mb-3">
            <p>Repita a nova senha</p>
            <input type="password" class="form-control">
          </div>
        </div>
        <div class="row" style="padding-bottom: 100px; padding-left: 65px;">
            <button type="button" class="btn btn-dark m-md-1">Salvar</button>
        </div>
      </form>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>