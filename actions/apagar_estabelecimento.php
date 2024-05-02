<?php
 
// Verificar se a sessão não existe:
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Você não está logado!";
        die();
    }
 
 
if(isset($_GET['id'])){
    // Apagar:
    require_once('classes/Produto.class.php');
    $estabelecimento = new Estabelecimento();
    // Obtendo o id da URL:
    $estabelecimento->id = $_GET['id'];
    if($estabelecimento->Apagar() == 1){
        header('Location: ../meu_estabelecimento.php');
    }else{
        header('Location: ../meu_estabelecimento.php');
    }
}else{
    echo "Erro! Informe o ID a ser apagado!";
}
 
 
?>