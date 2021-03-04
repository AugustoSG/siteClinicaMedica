<?php include_once("restricao_comum.php");?>

<?php

//Importar conexão com o banco de dados
require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

//Filtrar dados trasmitidos por GET
$informacao_id = filter_input(INPUT_GET, "informacao_id", FILTER_SANITIZE_NUMBER_INT);

//Realização da consulta no banco de dados
$consulta_sql = "SELECT * FROM tb_informaçoes WHERE informacao_id = '".$informacao_id."'";

//Realizar operação no banco de dados
$resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

$registro = mysqli_fetch_array($resultado_consulta_sql);

//Fechar conexão com o banco de dados
mysqli_close($conexao);

?>


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
          <h1 class="display-4">Editar Informações</h1>
          <p class="lead">Edite as informações do site</p>
        </div>
      </div>

      <form name="editar" action="Update_If.php" method="POST">
        <div class="form-row m-md-5">
          <div class="col">
            <input type="hidden" name="informacao_id" value="<?php echo $registro['informacao_id']; ?>">
            <p>Data</p>
            <input type="date" class="form-control mb-3" name="informacao_data" value="<?php echo $registro['informacao_data']; ?>"> 
            <p>Título</p>
            <input type="text" class="form-control mb-3" name="informacao_titulo" value="<?php echo $registro['informacao_titulo']; ?>">
            <p>Escolher Imagem</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input mb-3" id="customFile" name="informacao_imagem" value="<?php echo $registro['informacao_imagem']; ?>">
                <label class="custom-file-label" for="customFile">Selecionar arquivo</label>
            </div>
            <div class="row ml-1 mt-3 mb-3">
              <img src="image\image.jpeg" class="rounded float-left" alt="...">
            </div>
          </div>
          <div class="col">
            <p>Texto</p>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="informacao_texto" rows="10"><?php echo $registro['informacao_texto'];?></textarea>
          </div>
        </div>
        <div class="row" style="margin-left: 60px; padding-bottom: 100px;">
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