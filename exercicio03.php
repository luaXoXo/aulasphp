<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio03</title>

    <style>

li:nth-child(even) {
    color: blue;
}

li:nth-child(odd){
    color: red;
}


    </style>
</head>

<body>
   <ol>
   
   <?php
$meses = [
    "Janeiro", "Fevereiro", "Março", "Abril", 
    "Maio", "Junho", "Julho", "Agosto", 
    "Setembro", "Outubro", "Novembro", "Dezembro"];

    foreach ($meses as $mes) { 
        ?>

        <li><?= $mes ?></li>
   
    
        
        <?php
    }

?>
</ol> 
</body>
</html>