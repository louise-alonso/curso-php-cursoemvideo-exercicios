<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p> 
            <?php 
                $numero = $_GET['num'] ?? 0;
                $numero = (int) $numero;  // Converte para inteiro para garantir que é um número e evitar erros caso o usuário não insira nenhum dado.

                $antecessor= $numero - 1;
                $sucessor= $numero + 1;

                echo "O numero escolhido foi <strong>$numero</strong>";
                //echo "O numero antecessor de $numero é ". ($numero - 1)."";
                //echo "O numero sucessor de $numero é ". ($numero + 1)."";
                echo "<br>Seu <em>antecessor</em> é $antecessor";
                echo "<br>Seu <em>sucessor</em> é $sucessor";

            ?>
        </p>
                
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>
</body>
</html>