<?php include_once("restricao_comum.php");?>

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
          <h1 class="display-4">Cadastrar Informações</h1>
          <p class="lead">Cadastre informações para o site</p>
        </div>
      </div>

      <form name="CadastarInformacao" action="Insert_In.php" method="POST">
        <div class="form-row m-md-5">
          <div class="col">
            <p>Data</p>
            <input type="date" name="informacao_data" class="form-control mb-3" value="">
            <p>Título</p>
            <input type="text" name="informacao_titulo" class="form-control mb-3" value="">
            <p>Escolher Imagem</p>
            <div class="custom-file">
                <input type="file" name="informacao_imagem" class="custom-file-input" id="customFile">
                <label class="custom-file-label mb-3" for="customFile">Selecionar arquivo</label>
            </div>
            <div class="row">
              <img src="image\image.jpeg" class="rounded float-left" alt="...">
            </div>
          </div>
          <div class="col">
            <p>Texto</p>
            <textarea class="form-control" name="informacao_texto" id="exampleFormControlTextarea1" rows="22" value=""></textarea>
          </div>
        </div>
        <div class="row" style="padding-bottom: 100px; margin-left: 65px;">
            <input type="submit" name="salvar" value="Salvar" class="btn btn-dark border-secondary mr-3"> 
            <input type="reset" name="desfazer" value="Desfazer" class="btn btn-dark border-secondary mr-3"> 
            <a class="btn btn-dark border-secondary" href="InformaçoesCadastradas.php">Listar</a>
        </div>
      </form>

    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>