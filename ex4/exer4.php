<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4°Questão</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div>
    <?php
    $nome = $_GET["nom"];
    $ano_nasc = $_GET["dat"];
    $ano_atual = date("Y",strtotime($ano_nasc));
    $idade = date("Y") - $ano_atual;
    $profissao = $_GET["prof"];

    echo "Nome: $nome<br/>";
    echo "Idade: $idade <br/>";
    echo "Profissão: $profissao"
    
    ?>
    <br/>
    <a href="exer4.html"><button>Voltar</button></a>


</div>
</body>
</html>