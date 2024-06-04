<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Avaliacao.class.php');

    $avaliacao = new Avaliacao();
    $avaliacao->id_estabelecimento = $_POST['id_estabelecimento'];
    $avaliacao->id_usuario = $_SESSION['usuario']['id'];
    $avaliacao->nota = $_POST['nota'];
    $avaliacao->comentario = $_POST['comentario'];

    if($avaliacao->CadastrarAvaliacao() == 1){
        header('Location: ../index.php');
    }else{
       echo "Falha ao cadastrar!.";
    }


}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>