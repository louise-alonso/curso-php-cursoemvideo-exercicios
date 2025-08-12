<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <!-- Importa o arquivo CSS para estilização -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <!-- Cabeçalho com título -->
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // $_GET guarda dados enviados pelo formulário via método GET (dados aparecem na URL)
            // Usamos '??' para dar um valor padrão se o dado não foi enviado
            $nome = $_GET['nome'] ?? 'Anônimo';       // Se não existir 'nome', usa 'Anônimo'
            $sobrenome = $_GET['sobrenome'] ?? 'Desconhecido'; // Se não existir 'sobrenome', usa 'Desconhecido'


            // $_POST guarda dados enviados via método POST (dados não aparecem na URL)
            // $_REQUEST junta dados de $_GET + $_POST + $_COOKIE (não muito usado para evitar confusão)

            // Mostra mensagem usando os dados recebidos
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é meu site.</p>";   

            // var_dump($_GET); // Use para ver o conteúdo enviado (debug)
        ?>
        
        <!-- Link para voltar para a página anterior -->
        <p><a href="javascript:history.go(-1)">Voltar para a página inicial</a></p>
    </main>
</body>
</html>
