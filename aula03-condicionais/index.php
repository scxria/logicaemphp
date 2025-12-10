<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php 
    //Condicionais if
    //Estrutura Condicional Simples
    if(1 < 2) {
        echo "O número 1 é menor que 2.<br>";
    }

    $idade = 19;

    if($idade >= 18){
        echo "Você é maior de idade.";
    }

    echo "<br>";

    //Condicional eslse
    //Estrutura Condicional Composta
    $a = 10;
    $b = 14;

    if($a == $b){
        echo "As variáveis são iguais.";
    } else {
        echo "As variáveis são diferentes.";
    }

    echo "<br>";
    
    //Condicional elseif
    //Estrutara Condicional Encadeiada

    $idadepessoa = 25;
    if ($idadepessoa <13) {
        echo "Você é uma Criança.";
    } else if ($idadepessoa >= 13 && $idadepessoa <= 19) {
        echo "Você é Adolecente.";
    } else if ($idadepessoa >= 20 && $idadepessoa <= 59) {
        echo "Você é Adulto.";
    } else {
        echo "Você é Idoso.";
    }

    echo "<br>";

    //Condicional Switch
    //Estrutura Multipla (Switch Case)
    $numero = 3;

    switch (true) {
        case($numero < 5):
        echo "O número é Menor que 5.";
        break;
        case ($numero == 5):
        echo "O número é Igual a 5.";
        break;
        case($numero > 5):
        echo "O número é Maior que 5.";
        break;
        default:
        echo "Número não Identificado.";
        break;
    }

    echo "<br>";

    $animal = "gato";

    switch ($animal) {
        case "cachorro":
            echo "É um Cachorro.";
            break;

        case "peixe":
            echo "É um Peixe.";
            break;

        default:
            //Só executa se nenhum case anterior bateu
            echo "Animal não Encontrado.";
            break;
    }
    ?>
</body>
</html>