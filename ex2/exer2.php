<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2°Questão</title>
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
    $ano_atual = date("Y");
    $idade = $ano_atual - $ano_nasc;

    
    if ($idade <=11) {
        $sit = "Criança";
    }
    elseif ($idade <=14) {
        $sit = "Adolescente";
    }
    elseif ($idade <=18) {
        $sit = "Jovem";
    }
    elseif ($idade <=64) {
        $sit = "Adulto";
    }
    else {
        $sit = "Idoso";
    }

    echo "Nome: $nome<br/>";
    echo "Sua idade é $idade<br/>";
    echo "Você é $sit";
    
    ?>
    <br/>
    <a href="exer2.html"><button>Voltar</button></a>


</div>
</body>
</html>