<?php
    //Variaveis para conectar ao banco de dados
    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = "";
    $banco_dados = "db_clinica";

    //Realizar conexão com o banco de dados
    $conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha_usuario, $banco_dados);

    //Verificar conexão com o banco de dados
    if (mysqli_connect_errno()){
        printf("Falha na conexão com o banco de dados: %s\n", mysqli_connect_error());
        exit();
    }

    //Fechar a conexão com o banco de dados
    //mysqli_close($conexao);
?>