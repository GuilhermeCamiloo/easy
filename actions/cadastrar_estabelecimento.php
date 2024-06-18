<?php
session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('classes/EstabelecimentoE.class.php');
 
    $estabelecimentose = new EstabelecimentoE();
    $estabelecimentose->id_categoria = strip_tags($_POST['id_categoria']);
    $estabelecimentose->id_usuario = $_SESSION['usuario']['id'];
    $estabelecimentose->nome = strip_tags($_POST['nome']);
    $estabelecimentose->descricao = strip_tags($_POST['descricao']);
    $estabelecimentose->telefone = strip_tags($_POST['telefone']);
    $estabelecimentose->endereco= strip_tags($_POST['endereco']);
    $estabelecimentose->numero= strip_tags($_POST['numero']);
    $estabelecimentose->cidade = strip_tags($_POST['cidade']);
    $estabelecimentose->estado = strip_tags($_POST['estado']);
    $estabelecimentose->cep = strip_tags($_POST['cep']);
    $estabelecimentose->complemento = strip_tags($_POST['complemento']);

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
          
            if ($estabelecimentose->CadastrarEnderecoE() == 3) {
                // Redirecionar:
               header("Location: ../index.php");
                exit(); // Finalizar o script após redirecionamento
            } else {
                echo "Falha ao cadastrar o produto.";
            }
        } else {
            echo "Falha ao mover a imagem!";
        }
    } else {
        // Cadastro sem foto
        
        if ($estabelecimentose->CadastrarSemFoto() == 2) {
            // Redirecionar:
            header("Location: ../index.php");
            exit(); // Finalizar o script após redirecionamento
        } else {
            echo "Falha ao cadastrar o produto.";
        }
    }
}
?>