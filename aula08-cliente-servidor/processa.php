<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados recebidos</title>

<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(https://i.imgur.com/CqFtYUV.png);
    padding: 0%;
    margin: 0%;
    }

    .container {
    width: 450px;
    margin: 50px auto;
    background: linear-gradient(to right, #fff495ff, #ff8989ff);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px #414141;
    }

    h2 {
        text-align: center;
        color: #414141;
    }

    .item {
  margin-bottom: 15px;
}

    .item span {
    font-weight: bold;
   }

    a {
    display: block;
    margin-top: 20px;
    text-align: center;
    padding: 12px;
    background: #4b0023ff;
    color: #c9c9c9ff;
    text-decoration: none;
    border-radius: 5px;
   }

a:hover {
    background: #4e4600ff;
}
    
</style>
</head>
<body>
    <div class="container"
    </h2>Dados recebidos</h2> 

    <?php 
    //recebendo os dados e filtrando
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <div class="item">
        <span> nome: </span> <?php echo "$nome"; ?>
    </div>

    <div class="item">
        <span> email: </span> <?php echo "$email"; ?>
    </div>

    <div class="item">
        <span> telefone: </span> <?php echo "$telefone"; ?>
    </div>

    <div class="item">
        <span mensagem: </span> <?php echo "$mensagem";?>
    </div>

    <a href="index.html">Voltar</a>

    </div>
</body>
</html>