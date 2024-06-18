<?php
session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('classes/EstabelecimentoE.class.php');
 
    $estabelecimentose = new EstabelecimentoE();
    $estabelecimentose->id_categoria = strip_tags($_POST['id_categoria']);
    $estabelecimentose->id_usuario = $_SESSION['usuario']['id'];
    $estabelecimentose->nome = strip_tags($_POST['nome']);
    $estabelecimentose->descricao = strip_tags($_POST['descricao']);
 
    // Verificar se está chegando uma foto do formulário:
    if ($_FILES['foto']['size'] > 0) {
        $destino = "../fotos/";
 
        // Obter o hash do arquivo:
        $novo_nome = hash_file('md5', $_FILES['foto']['tmp_name']);
 
        // Obter a extensão do arquivo:
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
 
        // Montar o novo nome do arquivo:
        $novo_nome = $novo_nome . "." . $extensao;
        

        // Mover o arquivo para a pasta:
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino . $novo_nome)) {
            $estabelecimentose->foto = $novo_nome;
            print_r($estabelecimentose->CadastrarEnderecoE());
            // if ($estabelecimentose->CadastrarComFoto() == 1) {
            //     // Redirecionar:
            //    // header("Location: ../index.php");
            //     exit(); // Finalizar o script após redirecionamento
            // } else {
            //     echo "Falha ao cadastrar o produto.";
            // }
        } else {
            echo "Falha ao mover a imagem!";
        }
    } else {
        // Cadastro sem foto
        print_r($estabelecimentose->CadastrarSemFoto());
        // if ($estabelecimentose->CadastrarSemFoto() == 1) {
        //     // Redirecionar:
        //     //header("Location: ../index.php");
        //     //exit(); // Finalizar o script após redirecionamento
        // } else {
        //     echo "Falha ao cadastrar o produto.";
        // }
    }
}
?>