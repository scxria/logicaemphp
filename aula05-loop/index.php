<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, do while, for, foreach</title>
</head>
<body>
    <?php

    //while
    echo "while <br>";
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>"; //imprime o valor de $i e pula para a proxima linha
        $i++;
    }

    echo "<br>";
    $j = 2;
    while ($j <= 10) {
        echo $j . "<br>"; //imprime os numeros pares
        $j += 2; //incrementa de 2 em 2
    }
    
    //do while
    echo "<br> do while <br>";
    $m = 1;
    do {
        echo $m . "<br>";
        $m++;
    } while ($m <= 5);

    //for
    echo "<br> for <br>";
    for ($n = 1; $n <= 5; $n++) {
        echo $n . "<br>";
    }

    for ($p = 1 ; $p <= 5; $p++) {
        echo "o quadrado de $p é " . ($p * $p) . "<br>";
    }

    echo "<br>foreach<br>";
    $frutas = ["maçã", "banana", "laranja", "uva"];
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>"; //imprime o nome de cada fruta
    }

    echo "<br>";
    $idades = [
        "Jõao" => 25,
        "Maria" => 30,
        "Pedro" => 22
    ];

    foreach  ($idades as $nome => $idade) {
        echo "$nome tem $idade anos. <br>"; //exibe nome e idade
    }
    
    ?>
</body>
</html>