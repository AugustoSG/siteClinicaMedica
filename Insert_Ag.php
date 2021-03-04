<?php include_once("restricao_comum.php");?>

<?php
   //Filtrar dados trasmitidos por POST
    $ag_exame = filter_input(INPUT_POST, "ag_exame", FILTER_SANITIZE_STRING);
    $ag_data = filter_input(INPUT_POST, "ag_data", FILTER_SANITIZE_STRING);
    $ag_email = filter_input(INPUT_POST, "ag_email", FILTER_SANITIZE_STRING);
    $ag_pronturario = filter_input(INPUT_POST, "ag_pronturario", FILTER_SANITIZE_STRING);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "INSERT INTO
            tb_agendamento(
                ag_exame,
                ag_data,
                ag_email,
                ag_pronturario
                )
        VALUES(
            '".$ag_exame."',
            '".$ag_data."',
            '".$ag_email."',
            '".$ag_pronturario."'
            )";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: pg_Agendamento.php");
?>
