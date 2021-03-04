<?php include_once("restricao_comum.php");?>

<?php
    //Filtrar dados trasmitidos por POST
    $feed_nome = filter_input(INPUT_POST, "feed_nome", FILTER_SANITIZE_STRING);
    $feed_email = filter_input(INPUT_POST, "feed_email", FILTER_SANITIZE_STRING);
    $feed_telefone = filter_input(INPUT_POST, "feed_telefone", FILTER_SANITIZE_STRING);
    $feed_assunto = filter_input(INPUT_POST, "feed_assunto", FILTER_SANITIZE_STRING);
    $feed_mensagem = filter_input(INPUT_POST, "feed_mensagem", FILTER_SANITIZE_STRING);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "INSERT INTO
            tb_feedback(
                feed_nome,
                feed_email,
                feed_telefone,
                feed_assunto,
                feed_mensagem
                )
        VALUES(
            '".$feed_nome."',
            '".$feed_email."',
            '".$feed_telefone."',
            '".$feed_assunto."',
            '".$feed_mensagem."'
            )";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: pg_Feedback.php");
?>
