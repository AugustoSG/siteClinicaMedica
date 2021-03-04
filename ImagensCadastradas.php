<?php

include_once('restricao_comum.php');

//Importar conexão com o banco de dados
require_once('sc_conexao_banco.php');

//Realização da consulta no banco de dados
$consulta_sql = "SELECT * FROM tb_imagem";

//Realizar operação no banco de dados
$resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

//Contar o número de registros retornado pela consulta no banco de dados
$quantidade_total_registros_banco_dados = mysqli_num_rows($resultado_consulta_sql);

//Definir a quantidade de registros por página
$quantidade_registros_por_pagina = 10;

//Definir a quantidade de páginas
$quantidade_paginas = ceil($quantidade_total_registros_banco_dados / $quantidade_registros_por_pagina);

//Verificar qual a página atual
$pagina_atual = isset($_GET['pagina_atual']) ? filter_input(INPUT_GET, 'pagina_atual', FILTER_SANITIZE_NUMBER_INT) : 1;

//Definir inicio de nova consulta no banco de dados conforme página atual
$inicio_consulta = ($quantidade_registros_por_pagina * $pagina_atual) - $quantidade_registros_por_pagina;

//Consulta a ser realizada no banco de dados para exibir os dados
$consulta_sql =
    "SELECT 
      imagem_id, 
      LEFT(imagem_titulo, 15) AS imagem_titulo, 
      LEFT(imagem_descriçao, 15) AS imagem_descriçao,
      LEFT(imagem_tipo, 10) AS imagem_tipo, 
      LEFT(imagem_tamanho, 10) AS imagem_tamanho,  
      LEFT(usuario_nome, 13) AS usuario_nome,
      LEFT(imagem_caminho, 30) AS caminho_abreviado,
      imagem_caminho
    FROM 
      tb_imagem
    INNER JOIN 
      tb_usuarios 
    USING 
      (usuario_id) 
    ORDER BY 
      imagem_id DESC 
    LIMIT 
      $inicio_consulta, 
      $quantidade_registros_por_pagina";

//Realizar a consulta no banco de dados com a limitação da página atual
$resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

//Contar o numero de registro retornado pela consulta no banco de dados após a limitação da páginas atual
$quantidade_parcial_registros_banco_dados = mysqli_num_rows($resultado_consulta_sql);

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
          <h1 class="display-4">Imagens Cadastradas</h1>
          <p class="lead">Vejas as imagens cadastradas no site</p>
          <h5 class="px-1"></h5>
        </div>
      </div>

      <table class="table">
        <thead style="background-color: #BED1E4;">
          <tr class="">
          <th class="">Ação</th>
            <th class="">Imagem</th>
            <th class="">Título</th>
            <th class="">Descrição</th>
            <th class="">Tipo</th>
            <th class="">Tamanho</th>
            <th class="">Por</th>
            <th class="">Caminho</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($registro = mysqli_fetch_array($resultado_consulta_sql, MYSQLI_BOTH)){ ?>
            <tr>
              <th scope="row">
              <a class="btn btn-dark" href="CadastrarImagens.php?imagem_id=<?php echo $registro['imagem_id']; ?>" role="button">Editar</a>
                <a class="btn btn-dark m-sm-1" onclick="return confirm('Deseja apagar?');" href="Im_Crud.php?imagem_id=<?php echo $registro['imagem_id']; ?>&imagem_caminho=<?php echo $registro['imagem_caminho']; ?>">Apagar</a>
              </th>
              <td>
               <input type="image" src="<?php echo $registro['imagem_caminho'];?>" class="img-thumbnail">
              </td>
              <td class="pt-3" style=""><?php echo $registro['imagem_titulo']; ?></td>
              <td class="pt-3" style=""><?php echo $registro['imagem_descriçao']; ?></td>
              <td class="pt-3" style=""><?php echo $registro['imagem_tipo']; ?></td>
              <td class="pt-3" style=""><?php echo $registro['imagem_tamanho']; ?></td>
              <td class="pt-3" style=""><?php echo $registro['usuario_nome']; ?></td>
              <td class="pt-3" style=""><?php echo $registro['caminho_abreviado']; ?></td>
              </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="margin-left: 85px; margin-top: 30px">
        <caption>
            <?php echo "Registros Totais: <b>$quantidade_total_registros_banco_dados</b> | Registro na Página: <b>$quantidade_parcial_registros_banco_dados</b>"; ?>
        </caption>
    </div>
    <div class="row" style="margin-left: 65px; margin-top: 15px; padding-bottom: 50px">
        <div class="col-1">
          <a href="http://localhost/clinica_valinhos/CadastrarImagens.php" class="btn btn-dark m-1">Inserir</a>
        </div>
        <div class="col-1">
            <nav aria-label="Page navigation example">
                <ul class="pagination m-1">
                <?php // Definir o link para navegação da página anterior ?>
                <li class="page-item <?php echo $pagina_atual == 1 ? "disabled" : ""; ?> ">
                    <a class="page-link border-secondery" href="ImagensCadastradas.php?pagina_atual=<?php echo ($pagina_atual - 1); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                //Definir os links para navegação das páginas
                for($link = $pagina_atual - 3, $limite_links = $link + 6; $link <= $limite_links; $link++){
                    if($link < 1){
                      $link = 1;
                      $limite_links = 7;
                    }
                    if($limite_links > $quantidade_paginas) {
                      $limite_links = $quantidade_paginas;
                      $link = $limite_links -6;
                    }
                    if($link < 1){
                      $link = 1;
                      $limite_links = $quantidade_paginas;
                    }
                    if($link == $pagina_atual){ ?>
                      <li class="page-item">
                        <a class="page-link" href="#"><?php echo $link; ?><span class="sr-only">(current)</span></a>
                      </li>
                      <?php }else{ ?>
                        <li class="page-item">
                          <a class="page-link" href="ImagensCadastradas.php?pagina_atual=<?php echo $link; ?>"><?php echo $link; ?></a>
                        </li>
                      <?php }
                }
                //Definir link para nevagação para página seguinte ?>
                
                <li class="page-item <?php echo $pagina_atual == $quantidade_paginas ? "disabled" : ""; ?>">
                    <a class="page-link" href="ImagensCadastradas.php?pagina_atual=<?php echo ($pagina_atual + 1); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
      </div>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>