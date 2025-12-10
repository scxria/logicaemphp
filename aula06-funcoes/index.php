<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function saudacao() {
        echo "Olá, boas-vindas aos PHP";
    }

    saudacao(); //chamando função
    echo "<br>";

    function somar ($a, $b) {
        return $a + $b;
    }

    $resultado = somar(5, 3); //chamand função e passando os argumentos
    echo "resultado da soma: " . $resultado;

    echo "<br>";
    function saudacaopersonalizada ($nome = "visitante") {
        echo "olá, $nome! boas-vindas ao nosso site";
    }

    saudacaopersonalizada(); //chamada sem argumento, uas o valor padrão
    echo "<br>";
    saudacaopersonalizada("Carlos"); //chamada com argumento

    echo "<br>";
    function encontrarmaiorvalor($array) {
        return max($array); //função max() encontra o maior valor do array
    }

    $valores = [2, 5, 9, 1, 3];
    echo "o maior valor é: " . encontrarmaiorvalor($valores);
    ?>
</body>
</html>