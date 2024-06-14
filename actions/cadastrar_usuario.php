<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Usuario.class.php');
    

    $usuario = new Usuario();
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];

    require_once('classes/UsuarioE.class.php');
    $usuarioe = new UsuarioE();

    $usuarioe->cidade = $_POST['cidade'];
    $usuarioe->estado = $_POST['estado'];
    $usuarioe->cep = $_POST['cep'];
    $usuarioe->numero = $_POST['numero'];
    $usuarioe-> endereco= $_POST['endereco'];
    $usuarioe-> complemento= $_POST['complemento'];
    

    

  


    if($usuario->Cadastrar() == 1 && $usuarioe->CadastrarEndereco() == 1){
        header('Location: ../tela_login1.php');
    }else{
       echo "Falha ao cadastrar!.";
    }


}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>