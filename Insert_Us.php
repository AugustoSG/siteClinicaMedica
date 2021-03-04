<?php include_once("restricao_comum.php");?>

<?php
    //Filtrar dados trasmitidos por POST
    $usuario_nome = filter_input(INPUT_POST, "usuario_nome", FILTER_SANITIZE_STRING);
    $usuario_email = filter_input(INPUT_POST, "usuario_email", FILTER_SANITIZE_STRING);
    $usuario_senha = filter_input(INPUT_POST, "usuario_senha", FILTER_SANITIZE_STRING);
    $usuario_tipo = filter_input(INPUT_POST, "usuario_tipo", FILTER_SANITIZE_STRING);

    //Importar conexão com o banco
    require_once('C:\xampp\htdocs\clinica_valinhos\sc_conexao_banco.php');

    //Realizar cadastro no banco
    $consulta_sql =
        "INSERT INTO
            tb_usuarios(
                usuario_nome,
                usuario_email,
                usuario_senha,
                usuario_tipo
                )
        VALUES(
            '".$usuario_nome."',
            '".$usuario_email."',
            '".$usuario_senha."',
            '".$usuario_tipo."'
            )";
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Fechar conexão com o banco
    mysqli_close($conexao);

    header("Location: CadastrarUsuarios.php");
?>
