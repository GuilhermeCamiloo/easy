<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Estabelecimento.class.php');

    $estabelecimento = new Estabelecimento();
    $estabelecimento->id_categoria = $_POST['id_categoria'];
    $estabelecimento->id_usuario = $_POST['id_usuario'];
    $estabelecimento->nome = $_POST['nome'];
    $estabelecimento->descricao= $_POST['descricao'];
    $estabelecimento->foto= $_POST['foto'];

    


    if($estabelecimento->Cadastrar() == 1){
        header('Location: ../index.php');
    }else{
       echo "Falha ao cadastrar!.";
    }


}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>