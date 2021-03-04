<?php include_once("restricao_comum.php");?>

<?php
    //Filtrar dados trasmitidos por POST
    $informacao_id = filter_input(INPUT_POST, "informacao_id", FILTER_SANITIZE_NUMBER_INT);
    $informacao_data = filter_input(INPUT_POST, "informacao_data", FILTER_SANITIZE_STRING);
    $informacao_titulo = filter_input(INPUT_POST, "informacao_titulo", FILTER_SANITIZE_STRING);
    $informacao_imagem = filter_input(INPUT_POST, "informacao_imagem", FILTER_SANITIZE_STRING);
    $informacao_texto = filter_input(INPUT_POST, "informacao_texto", FILTER_SANITIZE_STRING);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "UPDATE
            tb_informaçoes
        SET
            informacao_data = '".$informacao_data."',
            informacao_titulo = '".$informacao_titulo."',
            informacao_imagem = '".$informacao_imagem."',
            informacao_texto = '".$informacao_texto."'
        WHERE
        informacao_id = '".$informacao_id."'";

    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: InformaçoesCadastradas.php");
?>
