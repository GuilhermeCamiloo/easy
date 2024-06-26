<?php

// Incluir o arquivom com a conexão com banco de dados
include_once './conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Listar as Avaliacoes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <!-- Criar menu básico -->
    <a href="index.php">Avaliar</a><br>
    <a href="listar_avaliacoes.php">Listar</a><br><br>

    <h1>Avaliações dos Usuários</h1>

    <?php

    // Recuperar as avaliações do banco de dados
    $query_avaliacoes = "SELECT id, qtd_estrela, mensagem 
                        FROM avaliacoes
                        ORDER BY id DESC";

    // Preparar a QUERY
    $result_avaliacoes = $conn->prepare($query_avaliacoes);

    // Executar a QUERY
    $result_avaliacoes->execute();

    // Percorrer a lista de registros recuperada do banco de dados
    while ($row_avaliacao = $result_avaliacoes->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_avaliacao);

        // Extrair o array para imprimir pelo nome do elemento do array
        extract($row_avaliacao);

        echo "<p>Avaliação: $id</p>";

        // Criar o for para percorrer as 5 estrelas
        for ($i = 1; $i <= 5; $i++) {

            // Acessa o IF quando a quantidade de estrelas selecionadas é menor a quantidade de estrela percorrida e imprime a estrela preenchida
            if ($i <= $qtd_estrela) {
                echo '<i class="estrela-preenchida fa-solid fa-star"></i>';
            } else {
                echo '<i class="estrela-vazia fa-solid fa-star"></i>';
            }
        }

        echo "<p>Mensagem: $mensagem</p><hr>";
    }
    ?>

</body>

</html>