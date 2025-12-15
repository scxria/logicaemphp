<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //declarando uma nova classe
    class carro {
        //atributos e visibilidade
        public $marca;
        public $modelo;
        public $ano;

        //método (função dentro da classe)
        public function exibirdetalhe() {
            echo "marca: " . $this->marca . "<br>";
            echo "modelo: " . $this->modelo . "<br>";
            echo "ano: " . $this->ano . "<br>";
        }
    }

    //objeto (instância)
    $meucarro = new carro();
    $meucarro->marca = "Toyota";
    $meucarro->modelo = "Corolla";
    $meucarro->ano = 2023;

    //chamar a função para exibir os detahles do carro
    $meucarro->exibirdetalhe();

    echo "<br>";
     
    //inctanciando novo carro
    $meunovocarro = new carro();
        $meunovocarro->marca = "BMW";
        $meunovocarro->modelo = "320i";
        $meunovocarro->ano = 2025;

        //exibindi a função para o novo modelo
        $meunovocarro->exibirdetalhe();

        class pessoa{
            //atributos (propriedades)
            public $nome;
            public $idade;

            //método
            public function sandacao() {
                echo "olá, meu nome é " . $this->nome . " e tenho " . $this-> idade . " anos.<br>";

            }
        }

        //instanciando uma nova pessoa
        $joao = new pessoa();
        $joao->nome = "João";
        $joao->idade = 30;

        //exibe a saudação com os dados de João
        $joao->sandacao();


    ?>
</body>
</html>