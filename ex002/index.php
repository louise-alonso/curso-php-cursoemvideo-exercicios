<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        // Define o fuso horário para São Paulo (GMT -3)
        // Se não definir, o PHP pode usar o fuso padrão do servidor
        //date_default_timezone_set("America/Sao_Paulo"); 

        // Exibe a data atual no formato: dia/mês abreviado/ano
        // Exemplo: 12/Aug/2025
        echo "Hoje é dia " . date("d/M/Y");

        // Exibe a hora atual no formato: horas:minutos:segundos + fuso horário
        // "G" → horas no formato 0–23 (sem zero à esquerda)
        // "i" → minutos com zero à esquerda
        // "s" → segundos com zero à esquerda
        // "T" → abreviação do fuso horário
        echo " e a hora atual é: " . date("G:i:s T");
    ?>
</body>
</html>
