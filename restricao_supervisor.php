<?php

//Iniciar sessão
if(!isset($_SESSION)){
  session_start();
}

//Verificar se não há a varíavel da sessão que identifique o usuário e o nível de acesso
if(!isset($_SESSION['usuario_id'])){
  //Voltar para a página inicial
  echo '<meta http-equiv="refresh" content="0;URL=/clinica_valinhos/Home.php">';

  //Finalizar sessão do script
  exit;

}elseif($_SESSION['usuario_tipo'] == "Comum"){
  //Voltar para página inicial
  echo "<script>alert('Sem autorização para acessar essa página.'); history.go(-1);</script>";
  
  //Finalizar execução do script
  exit;
}

?>