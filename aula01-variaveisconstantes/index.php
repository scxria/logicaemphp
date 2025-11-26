<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro php cabulozissimo!</title>
</head>
<body>
    <h2>
    <?php //os emojis são necessários
        echo "meu first php goddamn!!!! \u{1F923} \u{1F62D} \u{1F480} \u{1F480} \u{1F480}";

        echo "<br> <br>";

        //váriavel ta aqui bobão
        $nome = "Ana";
        $sobrenome = "Cunha";

        //a váriavel pode mudar tbm blz?
        $nome = "Ana Claudia";
        echo "Seja bem-vinda, $nome $sobrenome";

        echo "<br> <br>";

        //quem falou que flamengo é time?
        const time = "FLAMENGO";
        
        echo "MEU TIME É O " . time;
        echo "<br> <br>";
        echo "Seja bem-vinda, $nome $sobrenome, seu time é " . time;

        echo "<br> <br>";

        //tipos de dados
        $sobrenome2 = "Reinaldo"; //string
        $idade = 70; //int
        $peso = 78.8; // float
        $casado = true; // boolean

        echo "$sobrenome2 $idade $peso";
        echo "<br> <br>";

        //método 1: usando var_dump para exibir o valor booleano
        var_dump($casado);
        echo "<br> <br>";

        //método 2: usando uma conversão para string
        echo ($casado ? "Casado" : "não é casado");
        echo "<br> <br>";

        //tipos primitivos
        var_dump($sobrenome2);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($peso);
        echo "<br>";

        const time2 = "VASCO DA GAMA";
        $frase = "meu time de futebas é " . time2;
        $frase2 = "meu nome é $nome e o meu sobrenome é $sobrenome";
        echo ($frase);
        echo "<br>";
        echo ($frase2);


    ?>

    </h2>
    <p>o primeiro parágrafo holy shii!</p>

</body>
</html>