<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/UsuarioE.class.php');

    $usuarioe = new Usuarioe();

    $usuarioe->nome = $_POST['nome'];
    $usuarioe->email = $_POST['email'];
    $usuarioe->senha = $_POST['senha'];

    $usuarioe->cidade = $_POST['cidade'];
    $usuarioe->estado = $_POST['estado'];
    $usuarioe->cep = $_POST['cep'];
    $usuarioe->numero = $_POST['numero'];
    $usuarioe->endereco= $_POST['endereco'];
    $usuarioe->complemento= $_POST['complemento'];  

    $usuarioe->id_tipo= $_POST['id_tipo'];


    if($usuarioe->CadastrarEndereco() == 2){
        header('Location: ../tela_login1.php');
    }else{
       echo "Falha ao cadastrar!.";
    }


}else{
    echo 'Erro. A página deve ser carregada por POST';
}

?>