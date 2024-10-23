<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <h1>comandos condicionais no PHP</h1>
        <hr>
    <h2>condicional simples</h2>
    <?php
    $number = 500;

    if ($number >= 100){
    echo "<p>O valor da variavel é $number</p>";
    }
    ?>
    <hr>

    <h2>Condicional COMPOSTA</h2>

    <?php
    /* Controle de estoque*/

    $produto = 'Geladeira';
    $qtdemestoque = 5;
    $qtdcritica =2;

    ?>

<h3>produto: <?=$produto ?></h3>
<p><b>Estoque:</b> <?=$qtdemestoque?></p>


<?php
/* Se a quantidade em estoque for abaixo da quantidade critica, o sistema deve avisar e pedir pra repor.*/
if($qtdemestoque < $qtdcritica){
echo "<P class='alert alert-danger'>É necessario repor</p>";

}else{
/* Caso contrario, simplewsmente avisar que o estoque esta normal.*/
    echo "<p class='alert alert-success'>Estoque normal.</P>";
}

?>

<hr>

<?php

/* Verificando o produto e determinado diferentes periodos de garantia (em anos) */

if($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
}elseif($produto == "TV"){
    $garantia = 2;
}else {
    $garantia = 1;
}



?>

<p><?=$produto?> tem garantia de <b><?=$garantia?> anos</b></p>

<hr>


    <h2>Condicional ENCADEADA usando switch/case</h2>

    <?php
    switch($produto){
        case    "Ultrabook": $garantiaB = 5; break;
        case    "Geladeira": $garantiaB = 3; break;
        case    "TV": $garantiaB = 2; break;
        default: $garantiaB = 1; break;
    }
    ?>

    <p>Garantia de <?=$garantiaB?> anos.</p>


    </div>
</body>
</html>