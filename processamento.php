<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamneto</title>
</head>
<body>
    <h1>processamento dos dados vindos do formulario HTMl</h1>
<hr>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];


if ( empty($nome) || empty($email) ){
?>

 <p style="color: red;">Voce DEVE preencher o <b>nome</b> e <b>email</b>!</p>

<?php
} else {
?>


<h2>Dados recebidos</h2>
<ul>
    <li>nome <?=$nome?></li>
    <li>Email <?=$email?></li>

    <?php if( !empty($nascimento)){ ?>
    <li>Data de nascimento: <?=$nascimento?></li>
    <?php } ?>

    <?php if(!empty($mensagem)){ ?>
    <li> mensagem: <?=$mensagem?></li>
    <?php  } ?>
</ul>
    <?php } ?>




</body>
</html>