<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Usuario.class.php');

    $usuario = new Usuario();
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];
    $usuario->id_tipo = $_POST['id_tipo'];

    

  


    if($usuario->Cadastrar() == 1){
        header('Location: ../tela_login1.php');
    }else{
       echo "Falha ao cadastrar!.";
    }


}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>