<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
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

</html>