<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Arrays no PHP</h1>
    <hr>
    <?php
    $bandas = ["Slayer", "Nightwish", "Pink Floyd", "Savatage"];
    $cursos = array("node.js", "desing", "nutrição")
    ?>

    <h2>Acessando os dados do array</h2>
    <p>Rock Progressivo: <?= $bandas[2] ?></p>
    <p>Otem estivemos com a turma de <?= $cursos[2] ?></p>




        <?php 
        
        
        $filme = [
            "titulo" => "star wars",
            "autor" => "george lucas",
            "lançamento" => "slakkkkk",
            "genero" => "ficção cientifica"
        ];
        ?>
        <h2>Acessando os dados do array associativo</h2>
        <p>O filme <?=$filme["titulo"]?> feito pelo mano <?=$filme["autor"] ?> em <?=$filme["lançamento"]?> qeu ano do genero <?=$filme["genero"] ?> </p>

        <h3>print_r(nomeArray)</h3>
        <pre><?=print_r($cursos) ?></pre>

        <h3>var_dump(nomeArray)</h3>
       <pre> <?=var_dump($cursos) ?></pre>

<?php include "redes-sociais.html "?>
</body>

</html>