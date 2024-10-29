<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="container">

        <h1>Loops (ou laços de repetição)</h1>
        <hr>

        <h2>Tradicionais: while, for, do/while</h2>

        <h3>while</h3>

        <?php
        $i = 1;


        while ($i <= 3) {
        ?>
            <p>Senac penha - <?= $i ?></p>
        <?php

            $i++;
        }
        ?>

        <hr>

        <h3>for</h3>

        <?php
        for ($i = 1; $i <= 4; $i++) {
        ?>
            <div>
                <h4>Foto <?= $i ?></h4>
                <img src="https://picsum.photos/id/1/300/200" alt="">
            </div>
        <?php
        }
        ?>

        <hr>
        <h3>Loop tradicional para acessar arrays</h3>

        <?php
        $alunos = ["Roney", "Ribery", "lewadovisk", "kimmitch", "neymar", "messi"];

        for ($i = 0; $i < count($alunos); $i++) {
        ?>

            <P class="alert alert-success">
                <?= $alunos[$i] ?>
            </P>
        <?php
        }
        ?>


        <hr>
        <h2>Especifico: foreach</h2>

        <?php 
        foreach( $alunos as $aluno ){
            ?>

            <p class="alert alert-danger">
                <?=$aluno?>
        </p>
        <?php
        }
        ?>

    </div>




</body>

</html>