<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php 
    //operadores aritiméticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = 90 - 8;
    $multiplicacao = 15 * 43;
    $potenciacao = 34 ** 3;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtracao <br>";
    echo "Resultado da multiplicação é $multiplicacao <br>";
    echo "Resultado da potenciação é $potenciacao <br>";
    echo "Resultado da divisão é $divisao <br>";
    echo "Resultado do resto da divisão é $restodivisao <br>";

    //operadores de atribuição
    $rua = "Rua amador bueno";
    $rua .= " na Cidade de São Paulo";
    
    $preço = 2.45;
    $preço += 2.30;
    $preço -= 1.30;
    
    // formatação pro valor com virgula
    $preço_formatado = number_format($preço, 2, ',', '.');
    
    // resultado
    echo "$rua, <br> Preço R$ $preço_formatado <br>";

    //operadores de comparação
    $c = 10;
    $d = "10";

    echo "<br> <h1> Comparação de igualdade </h1>";
    echo($c == $d) ? "$c e ''$d'' São iguais." : "$c e ''$d'' Não são iguais.";
    echo "<br>";
    echo($c === $d) ? "$c e ''$d'' São estritamente iguais." : "$c e ''$d'' Não são estritamente iguais";

    echo "<br> <h1> Comparação de diferença </h1>";
    echo($c != $d) ? "$c e ''$d'' São iguais." : "$c e ''$d'' Não são iguais.";
    echo "<br>";
    echo($c !== $d) ? "$c e ''$d'' São estritamente iguais." : "$c e ''$d'' Não são estritamente iguais";

    $teste = false;
    echo "<br> <h1> Negação </h1>";
    echo (!$teste) ? "É verdadeiro." : "É falso.";

    $e = 5;
    $f = 3;
    echo "<br> <h1> Maior que e Menor que </h1>";
    echo($e > $f) ? "$e é maior que $f." : "$e não é maior que $f.";
    echo "<br>";
    echo($e < $f) ? "$e é menor que $f." : "$e não é menor que $f.";

    $h = 4;
    $i = 4;
    $j = 2;
    echo "<br> <h1> Maior ou igual a, Menor ou igual a </h1>";
    echo ($h >= $i) ? "$h é maior ou iguai a $i" : "$h não é maior ou igual a $i";
    echo "<br>";
    echo ($i <= $j) ? "$i é menor ou igual a $j" : "$i não é menor ou igual a $j";

    //operadores lógicos
    $idade = 20;
    $tem_cnh = true;

    echo "<br> <h1> Operadores Lógicos </h1>";
    echo ($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir";

    $tem_ingresso = false;
    $tem_convitevip = true;
    echo "<br>";
    
    echo ($tem_ingresso or $tem_convitevip) ? "Você pode entrar na festa." : "Você não pode entrar na festa";
    echo "<br>";

    //&& para and e || para or

    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo ($sol && $sem_chuva || $feriado) ? "Você pode sair pra passear." : "Melhor ficar em casa";
    

    ?>
</body>
</html>