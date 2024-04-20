<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3°Questão</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        span{
            color: blue;
        }
    </style>
</head>
<body>
<div>
    <?php
    $nota1 = $_GET["not1"];
    $nota2 = $_GET["not2"];
    $nota3 = $_GET["not3"];
    $nota4 = $_GET["not4"];
    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    
    if ($media <5) {
        $sit = "Reprovado";
    }
    elseif ($media <=6) {/*apesar de parecer certo, mas aqui precisava especificar de 05 a <7, usando 02 testes lógicos. */
        $sit = "Recuperação";
    }
    else {
        $sit = "Aprovado";
    }

    echo "Sua media é $media<br/>";
    echo "Sua situação é <span> $sit! </span>";
    
    ?>
    <br/>
    <a href="exer3.html"><button>Voltar</button></a>


</div>
</body>
</html>