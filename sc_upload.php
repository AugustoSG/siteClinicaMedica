<?php
    //Iniciar a sessão
    require_once('restricao_comum.php');
         
    //Pegar e filtrar valores tranmitidos via GET ou POST  
    $arquivo = $_FILES['file']['tmp_name'];
    $arquivo_nome = $_FILES['file']['name'];
    $arquivo_tipo = $_FILES['file']['type'];
    $arquivo_tamanho = $_FILES['file']['size'];

    //Pegar a extensão do arquivo e converter para minusculo
    $arquivo_extensao = strtolower(strrchr($arquivo_nome, '.'));

    //Permitir somente imagens, .jpg;.jpeg;.gif;.png
    if(strstr('.jpg;.jpeg;.gif;.png', $arquivo_extensao)){

        //Criar um nome único para evitar que as imagens sejam duplicadas no servidor.
        $arquivo_nome = md5(microtime()) . $arquivo_extensao;

        //Definir o caminho para salvar a imagem
        $arquivo_caminho = $caminho . $arquivo_nome; 
    }else{
        $mensagem_erro = "Só são aceitas imagens do tipo: .jpg, .jpeg, .gif ou .png)";
    }
?>