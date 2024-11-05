<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        h1 {text-align: center;
    font-weight: 50;
    
}

hr {
    margin: 16px;
}

ul {margin-left: 5rem;}

button {margin-left: 5rem;}

    </style>
</head>

<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
<?php 
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$fabricante = $_POST["fabricante"]
?>


<?php

if ( empty($produto) || empty($preco) || empty($descricao) || empty($fabricante) ){
?>

 <p style="color: red;">Voce DEVE preencher os <b>campos</b>!</p>

<?php
} else {
?>


<h2>Dados recebidos</h2>
<ul>
    <li><?=$produto?></li>
    <li>R$<?=number_format($preco, 2, ',', '.')?>  </li>
    <li><?=$descricao?></li>
    <li><?=$fabricante?></li>
</ul>

    <?php } ?>




</body>
</html>