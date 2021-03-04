<?php include_once("restricao_comum.php");

//Pegar e filtrar valores tranmitidos via GET
    $imagem_id = filter_input(INPUT_GET, 'imagem_id', FILTER_SANITIZE_NUMBER_INT);
    
    if(isset($imagem_id)){

        //Consulta a ser realizada no banco de dados  
        $consulta_sql = 
            "SELECT 
                imagem_titulo, 
                imagem_descriçao, 
                imagem_caminho
            FROM 
                tb_imagem
            WHERE 
                imagem_id = '$imagem_id'";
        
        //Importar conexao com banco de dados
        require_once('sc_conexao_banco.php');

        //Realizar operação no banco de dados
        $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

        //Ler e guardar registros na matriz 
        $registro = mysqli_fetch_array($resultado_consulta_sql, MYSQLI_BOTH);

        //Fechar a conexão com o banco de dados
        mysqli_close($conexao);
    }
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
          <div class="container px-4">
            <h1 class="display-4"><?php echo isset($imagem_id) ? "Editar Imagem" : "Cadastrar Imagem" ; ?></h1> 
          </div>
          <p class="lead"><?php echo isset($imagem_id) ? "Edite a imagem do site" : "Cadastre imagens para o site" ; ?></p>
        </div>
      </div>

        <form name="CadastrarImagem" action="Im_Crud.php" method="POST" enctype="multipart/form-data" onreset="habilitar();">
          <div class="form-row col-6 m-5">
            <input type="hidden" name="imagem_id" value="<?php echo isset($imagem_id) ? $imagem_id : "" ?>">

            <p>Título</p>
            <input type="text" name="imagem_titulo" class="form-control mb-3" id="titulo" placeholder="" value="<?php echo isset($imagem_id) ? $registro['imagem_titulo'] : "" ?>">
            <br>

            <p>Descrição</p>
            <input type="text" name="imagem_descriçao" class="form-control mb-3" id="descriçao" placeholder="" value="<?php echo isset($imagem_id) ? $registro['imagem_descriçao'] : "" ?>">
            <br>

            <label for="file">Escolher imagem</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" name="imagem_caminho" id="imagem_caminho" onclick="habilitar();" value="<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : "" ?>" <?php echo isset($imagem_id) ? "" : "checked" ?>>
                    </div>
                </div>
                <div class="custom-file">              
                    <input type="file" class="custom-file-input" name="file" id="file" onchange="verImagem();" data-max-file-size="2048" <?php echo isset($imagem_id) ? "disabled" : "" ?>>
                    <label data-browse="Buscar" class="custom-file-label" name="name" id="name"></label>
                </div>
              </div>

              <div class="card mb-3">
                <picture>
                    <img name="imagem" id="imagem" src="<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : 'image/image.jpeg' ?>" class="card-img" alt="..." width="400px">
                </picture>
              </div>

          </div>
          </div>

          <div class="row" style="margin-left: 60px; padding-bottom: 100px;">
              <input type="submit" name="salvar" value="Salvar" class="btn btn-dark border-secondary mr-3" onclick="return confirm('Deseja salvar?');">   
              <input type="reset" name="desfazer" value="Desfazer" class="btn btn-dark border-secondary mr-3">  
              <a class="btn btn-dark border-secondary" href="ImagensCadastradas.php">Listar</a>
          </div>
        </div>
        </form>
        
<script type="text/javascript">
    var inputFile = document.getElementById("file");
        inputFile.addEventListener("change", function(){
            document.getElementById("name").innerHTML = this.files[0].name;
        }); 

    function verImagem(){ 
        var oFReader = new FileReader(); 
        oFReader.readAsDataURL(document.getElementById("file").files[0]);

        oFReader.onload = function (oFREvent){ 
            document.getElementById("imagem").src = oFREvent.target.result;
        };
    };

    function habilitar(){
        if(document.getElementById('imagem_caminho').checked){
            document.getElementById('file').disabled = false;
        }else{
            document.getElementById('file').disabled = true;
            document.getElementById("imagem").src = "<?php echo isset($imagem_id) ? $registro['imagem_caminho'] : 'image/image.jpeg' ?>";      
            document.getElementById("name").innerHTML = "";
        }
    };
</script>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>