<?php include_once("restricao_comum.php"); ?>

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
          <h1 class="display-4">Agendamento</h1>
          <p class="lead">Agende seus exames pelo site.</p>
        </div>
      </div>

      <div class="row align-items-center justify-content-center;">
        <div class="col-12 text-left m-5">
          <form class="" name="Agendamento" action="Insert_Ag.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputEmail4">Tipo de Exame</label>
                <input type="text" name="ag_exame" class="form-control" id="inputEmail4" placeholder="Digite aqui" value="">
              </div>
              <div class="form-group col-md-5" style="margin-left: 100px;">
                <label for="inputPassword4">Data</label>
                <input type="date" name="ag_data" class="form-control" id="inputPassword4" placeholder="Digite aqui" value="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputEmail4">E-mail</label>
                <input type="email" name="ag_email" class="form-control" id="inputEmail4" placeholder="Digite aqui" value="">
              </div>
              <div class="form-group col-md-5" style="margin-left: 100px;">
                <label for="inputPassword4">Prontuário do Paciente</label>
                <input type="number" name="ag_pronturario" class="form-control" id="inputPassword4" placeholder="Digite aqui" value="">
              </div>
            </div>
              <input type="submit" name="Agendar" value="Agendar" class="btn btn-dark border-secondary">
          </form>
        </div>
      </div>

    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>