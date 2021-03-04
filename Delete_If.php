<?php include_once("restricao_comum.php");?>

<?php
    //Filtrar dados trasmitidos por POST
    $informacao_id = filter_input(INPUT_GET, "informacao_id", FILTER_SANITIZE_NUMBER_INT);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "DELETE FROM
            tb_informaçoes
        WHERE
        informacao_id = '".$informacao_id."'";

    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: InformaçoesCadastradas.php");
?>
