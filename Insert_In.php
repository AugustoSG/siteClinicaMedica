<?php include_once("restricao_comum.php");?>

<?php
    //Filtrar dados trasmitidos por POST
    $informacao_data = filter_input(INPUT_POST, "informacao_data", FILTER_SANITIZE_STRING);
    $informacao_titulo = filter_input(INPUT_POST, "informacao_titulo", FILTER_SANITIZE_STRING);
    $informacao_texto = filter_input(INPUT_POST, "informacao_texto", FILTER_SANITIZE_STRING);
    $informacao_imagem = filter_input(INPUT_POST, "informacao_imagem", FILTER_SANITIZE_STRING);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "INSERT INTO
            tb_informaçoes(
                informacao_data,
                informacao_titulo,
                informacao_texto,
                informacao_imagem
                )
        VALUES(
            '".$informacao_data."',
            '".$informacao_titulo."',
            '".$informacao_texto."',
            '".$informacao_imagem."'
            )";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: CadastrarInformaçoes.php");
?>
