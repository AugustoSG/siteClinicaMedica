<?php
    //Pegar e filtrar os valores transmitidos via Post ou Get
    $logout = filter_input(INPUT_GET, 'logout', FILTER_VALIDATE_BOOLEAN);
    $restrito = filter_input(INPUT_GET, 'restrito', FILTER_VALIDATE_BOOLEAN);
    $usuario_email = filter_input(INPUT_POST, 'usuario_email', FILTER_SANITIZE_STRING);
    $usuario_senha = filter_input(INPUT_POST, 'usuario_senha', FILTER_SANITIZE_STRING);

    if($logout == true){
        //Iniciar a sessão
        if(!isset($_SESSION)){
            session_start();
        }
        //Limpar as váriaveis da sessão
        session_unset();

        //Finalizar a sessão
        session_destroy();

        //Fechar todas as sessões
        session_write_close();

        //Limpar os cookies da sessão
        setcookie(session_name(),'',0,'/');

        //Exibir mensagem em Javascript se o processo foi concluido com sucesso
        echo "<script>alert('Você saiu com sucesso');</script>";

        if($restrito == false){
            //Voltar a página anterior
            echo "<script>history.go(-1);</script>";
        }else{
            //Voltar para a página inicial
            echo '<meta http-equiv="refresh" content="0;URL=Home.php" />';
        }
        
    }

    //Verficar se houve submit no formulário
    if (!empty($_POST['entrar'])){
        //liberar o Post para não executar a operação novamente
        unset($_POST['entrar']);
        //Verificar se o usuário e a senha estão vazios
        if(empty($usuario_email) OR empty($usuario_senha)){
            //Mensagem de erros quando os dados não foram digitados pelo usuário e retornar para página anterior
            echo"<script>alert('Os dados para entrar não foram informados.'); history.go(-1);</script>";
            //Finalizar execução do script
            exit;
        }

    //Consulta a ser realizada no banco de dados
    $consulta_sql=
        "SELECT
            usuario_id,
            usuario_nome,
            usuario_email,
            usuario_tipo
        FROM
            tb_usuarios
        WHERE
            usuario_email = '$usuario_email'
        AND
            usuario_senha = '$usuario_senha'
        LIMIT 1";

    //Importar conexão com o banco de dados
    require_once('sc_conexao_banco.php');

    //Realizar operação no banco de dados
    $resultado_consulta_sql = mysqli_query($conexao, $consulta_sql);

    //Validar o usuário e senha digitados
    if(mysqli_num_rows($resultado_consulta_sql) != 1) {
        //Mensagem de erro quando os dados são inválidados e/ou o usuário não foi encontrado e retornar para a página anterior
        echo"<script>alert('E-mail e/ou senha inválidos.'); history.go(-1);</script>";
        //Finalizar execução do script
        exit;
    }else{
        //Salvar as informações do banco de dados na váriavel registro
        $registro = mysqli_fetch_array($resultado_consulta_sql);

        //Se a sessão não existir, iniciar uma
        if(!isset($_SESSION)){
            //Iniciar a sessão
            session_start();
        }

        //Salva as informações do banco de dados na sessão
        $_SESSION['usuario_id'] = $registro['usuario_id'];
        $_SESSION['usuario_nome'] = $registro['usuario_nome'];
        $_SESSION['usuario_email'] = $registro['usuario_email'];
        $_SESSION['usuario_tipo'] = $registro['usuario_tipo'];
        
        //Redirecionar para outra página
        header("Location: Administrativo.php");

        //Finalizar execução do script
        exit;
    }
}
?>