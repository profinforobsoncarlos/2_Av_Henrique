<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1°Questão</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<div>
    <?php
    $valor_rs = $_GET["val"];
    $valor_dol = ($valor_rs/5.20);
    echo "Você informou R$".number_format($valor_rs,2,",",".")."<br/>";
    echo "Esse valor em Dólar é"."<span> US$".number_format($valor_dol,2,",",".")."</span>";
    
    ?>
    <br/>
    <a href="exer1.html"><button>Voltar</button></a>


</div>
</body>
</html>