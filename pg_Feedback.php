<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #E5B33E;">

    <?php include_once("topo.php");?>
      
      <div class="jumbotron jumbotron-fluid text-center m-0" style="background-color: #FFCA4B; color:white;">
        <div class="container">
          <h1 class="display-4">Feedback</h1>
          <p class="lead">Envie um e-mail para dar dicas e possíveis melhorias a clinica</p>
        </div>
      </div>

      <form class="" name="Feedback" action="Insert_Fe.php" method="POST">
        <div class="form-row m-md-3">
          <div class="col">
            <p>Nome Completo</p>
            <input type="text" name="feed_nome" class="form-control mb-3" value="">
            <p>E-mail</p>
            <input type="email" name="feed_email" class="form-control mb-3" value="">
            <p>Telefone</p>
            <input type="number" name="feed_telefone" class="form-control mb-3" value="">
            <p>Assunto</p>
            <input type="text" name="feed_assunto" class="form-control mb-3" value="">
            <div class="row; text-right p-2">
              <input type="submit" name="enviar" value="Enviar" class="btn btn-dark border-secondary">
            </div>
          </div>
          <div class="col">
            <p>Mensagem</p>
            <textarea class="form-control" name="feed_assunto" value="" id="exampleFormControlTextarea1" rows="10"></textarea>
          </div>
        </div>
      </form>
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>