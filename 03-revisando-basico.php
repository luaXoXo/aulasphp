<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisao html e php</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <h1>Revisando o basico</h1>
    <hr>


    <?php
    /* criar duas variaveis e/ou constantes */
    const NOME = "chapolin colorado";
    $idade = 25;
    /* exibir no HTML duas frase da seguinte forma */

    echo "<p>Ola! Meu nome é <i>".NOME."<i> e eu tenho <span class='text-bg-danger'> $idade anos</span>"
    
    
    ?>
    <p>Olá! meu nome é <i class="text-danger"><?=NOME?></i> e tenho <span class=text-bg-danger ><?=$idade?> anos.</span></p>

    <p >Qualquer coisa </p>

    
</body>
</html>