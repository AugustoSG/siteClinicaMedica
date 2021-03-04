<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #66DE6E;">

     <?php include_once("topo.php");?>
      
      <div class="jumbotron jumbotron-fluid text-center m-0" style="background-color: #73B777; color:white;">
        <div class="container">
          <h1 class="display-4">Exames</h1>
          <p class="lead">Procure por por informações de exames e outras opções.</p>
        </div>
      </div>

      <div class="card-deck w-75 text-center" style="margin-top:50px; padding-bottom: 50px; margin-left:150px;">
        <div class="card" style="background-color: #BED1E4;">
          <img class="rounded-circle" src="image\048-pharmacy.png" alt="Generic placeholder image" width="140" height="140" style="margin-left: 80px; margin-top: 30px;">
          <div class="card-body">
            <h3 class="card-title">Resultado de Exames</h3>
          </div>
          <div class="card-footer">
            <a href="http://localhost/clinica_valinhos/ResultadodeExame.php?pagina_atual=1#" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
          </div>
        </div>
        <div class="card" style="background-color: #BED1E4;">
          <img class="rounded-circle" src="image\049-syrup.png" alt="Generic placeholder image" width="140" height="140" style="margin-left: 80px; margin-top: 30px;">
          <div class="card-body">
            <h3 class="card-title">Agendamento</h3>
          </div>
          <div class="card-footer">
            <a href="http://localhost/clinica_valinhos/Agendamento.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
          </div>
        </div>
        <div class="card" style="background-color: #BED1E4;">
          <img class="rounded-circle" src="image\050-calendar.png" alt="Generic placeholder image" width="140" height="140" style="margin-left: 80px; margin-top: 30px;">
          <div class="card-body">
            <h3 class="card-title">Atendimento Domiciliar</h3>
          </div>
          <div class="card-footer">
            <a href="http://localhost/clinica_valinhos/pg_AtendimentoDomiciliar.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
          </div>
        </div>
      </div>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>