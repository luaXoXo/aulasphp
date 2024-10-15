<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Variaveis e constantes</h1>;
    <hr>
    <h2> Declaração e saida usando echo</h2>;
    
    <?php
    //variaveis
    $curso = "Progrmador web";
    $ano = 2024;
    $area = "Back-end";


    echo "<p>Estamos no $curso em $ano.</p>";


    //Com aspas simples, o PHP NÃO interpreta variavel
    echo '<p>Estamos no $curso em $ano.</p>';


    //Constantes 
    define("AUTOR", "thiago"); //tradicional, antiga
    const EMPRESA = "ABC Tecnologia"; // nova, moderna 
    echo "<p>".AUTOR." trabalha na empresa ".EMPRESA."</p>";

    ?>

    <h2>saida de dados simplificada/direta</h2>
    <p class="alert alert-success">estamos  no <span class="text-bg-danger"> <?= $curso ?></span>  em  <span class="text-bg-primary" ><?= $ano ?> .</p></span>
    <p><?=AUTOR  ?> trabalha na  <?=EMPRESA  ?>    </p>


</html>