<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <?php 
        echo "<h1>Aula do dia 01/12/2025 no SENAC Largo Treze</h1>";
        //Criação de Vetor/Array indexado
        $array = [10, 20, 30, 40];

        //Exibindo o array
        echo "Array Original: ";
        print_r($array); //print_r() exibe o array de forma legível

        echo "<br>";
        //Adicionando um valor ao final do array
        $array[] = 50;

        //Exibindo o array atualizado
        echo "Array após Adicionar 50: ";
        print_r($array);

        echo "<br>";

        //Alterar o valor na posição 1 para 25
        $array[1] = 25;

        //Exibindo o array após a alteração
        echo "Array após Alterar o valor de 1 para 25: ";
        print_r($array);

        echo "<br>";

        //Removendo o valor na posição 2
        unset($array[2]);

        //Reorganizando os índices do array
        $array = array_values($array);

        //Exibindo o array após remover o valor
        echo "Array após Remover o valor na posição 2: ";
        print_r($array);

        echo "<br>";
        
        //Adicionando vários valores
        array_push($array, 60, 3, 22);
        echo "Array após adicionar Vários Valores: ";
        print_r($array);

        //Remover vários valores
        //$valoresParaRemover = []
        //array_diff_key($array[2]);
        //array_values($array);
        //print_r($array);

        echo"<br>";

        //Ordenando o vetor
        sort($array);

        //Exibindo o vetor ordenado
        echo "Array após Ordenar os valores: ";
        print_r($array);

        echo"<br>";

        //Criando um array Associativo
        $associativo = [
            "nome" => "João",
            "idade" => 30,
            "cidade" => "São Paulo"
        ];

        //Exibindo o array Associativo
        echo "Array Associativo: ";
        print_r($associativo);

        echo "<br>";

        //Criando um array Multidimensional (matrizes)

        $multidimensional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
        ];

        //Exibindo o valor na posição [1][2] (4, 5, 6) -> 6
        echo "Valor na Posição [1][2]: " . $multidimensional[1][2];

        echo"<br>";

        //Função "array_merge()"
        $array1 = [1, 2, 3];
        $array2 = [4, 5, 6];

        //Mesclando 2 arrays
        $novo_array = array_merge($array1, $array2);

        //Exibendo o array resultado
        echo "Array Mesclado: ";
        print_r($novo_array);

        echo "<br>";

        //Função "array_search()"
        $numeros = [2, 4, 6, 25, 30, 8];

        //Procurando o valor 30 no array
        $indice = array_search(30, $numeros);

        //Exibindo o índice onde o valor foi encontrado
        print_r($numeros);
        echo "<br>";
        echo "O índice do valor 30 é : " . $indice;
        
        echo "<br>";
        
        //Função "in_array()"
        //Verificar se o valor 25 está no array
        $existe = in_array(25, $numeros);

        //Exibindo se o valor existe ou não
        if($existe) {
            echo "O valor 25 Está no array.";
        } else {
            echo "O valor 25 Não está no array.";
        }

        echo "<br><br><br>";

        $arrayTeste = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        echo "Array Teste: ";
        print_r($arrayTeste);


    ?>
    
</body>
</html>