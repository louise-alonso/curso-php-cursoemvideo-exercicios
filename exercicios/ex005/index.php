<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     // Concatenar strings "2" e "2" resulta em "22"
     $r = "2" . "2";  
     echo $r; // Saída: 22
    
     // Somar as strings "2" e "2" que são convertidas para números
     $m = "2" + "2";  
     echo $m; // Saída: 4

     // Ordem de precedência: parênteses, potência, multiplicação, divisão, resto, soma e subtração
     $total = 50 / (2 + 3) ** 2;  
     echo $total; // 50 / (5 ** 2) = 50 / 25 = 2

     // abs() retorna o valor absoluto (positivo) de um número
     $u = abs(-5);
     echo $u; // Saída: 5

     // base_convert() converte o número 254 da base 10 para a base 8 (octal)
     $q = base_convert(254, 10, 8);
     echo $q; // Saída: 376

     // intdiv() faz divisão inteira (sem resto)
     $y = intdiv(254, 10);
     echo $y; // Saída: 25

     // Constante PI com valor da constante M_PI do PHP
     const PI = M_PI;
     echo PI; // Saída: 3.1415926535898...

     // Comentários indicando outras funções matemáticas úteis:
     // ceil() arredonda para cima
     // floor() arredonda para baixo
     // round() arredonda para o inteiro mais próximo
     // hypot() calcula a hipotenusa de um triângulo retângulo
     // min() retorna o menor valor de uma lista
     // max() retorna o maior valor de uma lista
     // pi() ou constante M_PI retorna o valor de π
     // pow() faz potência, mas pode perder precedência, cuidado com parênteses
     // sin(), cos(), tan() funções trigonométricas
     // sqrt() ou usar **(1/2) para raiz quadrada
    
    ?>
</body>
</html>
