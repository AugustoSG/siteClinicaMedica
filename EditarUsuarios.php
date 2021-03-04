<?php include_once("restricao_supervisor.php");?>

<?php
    //Importar conexão com o banco de dados
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    $usuario_id = filter_input(INPUT_GET, "usuario_id", FILTER_SANITIZE_NUMBER_INT);

    //Consulta
    $consulta_sql =
      "SELECT * FROM tb_usuarios WHERE usuario_id = '".$usuario_id."'";
     
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
          <h1 class="display-4">Editar Usuário</h1>
          <p class="lead">Edite os usuários cadastrados</p>
        </div>
      </div>

      <form name="CadastarUsuario" action="Update_Us.php" method="POST">
        <div class="form-row m-md-5">
          <div class="col-6">
          <input type="hidden" name="usuario_id" value="<?php echo $registro['usuario_id'];?>">
            <p>Nome</p>
            <input type="text" name="usuario_nome" class="form-control" value="<?php echo $registro['usuario_nome'];?>">
            <p>E-mail</p>
            <input type="email" name="usuario_email" class="form-control" value="<?php echo $registro['usuario_email'];?>">
            <p>Senha</p>
            <input type="password" name="usuario_senha" class="form-control" value="<?php echo $registro['usuario_senha'];?>">
            <p>Tipo</p>
            <select class="custom-select" name="usuario_tipo" id="validationCustom04" value="<?php echo $registro['usuario_tipo'];?>" required>
                <option>Comum</option>
                <option>Supervisor</option>
            </select>
          </div>
        </div>
        <div class="row" style="margin-left: 60px; padding-bottom: 100px;">
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