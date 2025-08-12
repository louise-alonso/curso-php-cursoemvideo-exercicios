<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes dos tipos primitivos em PHP</h1>
    <?php 
    // Declaração de variáveis simples
    //$nome = "Louise";       // String
    //$sobrenome = "Alonso";  // String

    // Declaração de constante
    //const PAIS = "Brasil";  // Constante não pode ser alterada depois

    // Variáveis são sensíveis a maiúsculas/minúsculas
    //$Nome = "Fernanda";
    //echo "Muito prazer, $Nome "; // Exibe: Muito prazer, Fernanda

    // Exemplo de concatenação e uso de constantes
    //$nome="Luiz"; 
    //$sobrenome="Felipe";
    //PAIS = "Eua"; // ERRO → não é possível alterar constante
    //echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

    // Tipo numérico inteiro
    // $salario = 2500;
    //echo "meu salário é R$ $salario ";

    // Convenções de nomenclatura
    //$nomeCompletoCliente = "Camel Case";   // camelCase
    //$telefone_contato = "Snake Case";      // snake_case

    // Representação hexadecimal
    //$enum=0x1A; // 0x1A em hexadecimal = 26 em decimal
    //echo "o valor da variavel é $enum";

    // Conversão de string para inteiro (casting)
    //$v= (int) "300"; // Converte string "300" para inteiro 300
    //var_dump($v); // Exibe o tipo e valor

    // Notação científica
    //$n=5e3; // 5 * 10³ = 5000
    //echo $n;

    // Vetor (array) misto
    //$vet= [6,2,9,3,"Maria",4,5];
    //var_dump($vet); // Mostra estrutura e tipos

    // Classe simples
    class Pessoa{
        private string $nome; // Atributo privado do tipo string
    }

    // Criando objeto e inspecionando
    $p = new Pessoa;
    var_dump($p); // Mostra detalhes do objeto

    // Exemplo de diferença entre aspas duplas e simples no PHP:

    //$nome = 'Maria';

    // 1. Aspas duplas + escapando as aspas internas
    //echo "1: Olá \"$nome\"\n"; // Interpola variável e exibe aspas duplas

    // 2. Aspas duplas + aspas simples internas (mais limpo)
    //echo "2: Olá '$nome'\n"; // Interpola variável e exibe aspas simples

    // 3. Concatenando com aspas
    //echo '3: Olá "' . $nome . '"' . "\n"; // Não interpola, concatena manualmente

    // Aspas simples → não interpola variáveis
    //$nome = 'Maria';
    //echo 'Olá $nome'; // Saída literal: Olá $nome

    // Aspas duplas → interpola variáveis
    //$nome = 'Maria';
    //echo "Olá $nome"; // Saída: Olá Maria

    ?>
</body>
</html>
