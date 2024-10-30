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
?>

<h2>Dados recebidos</h2>
<ul>
    <li>nome <?=$nome?></li>
    <li>Email <?=$email?></li>
    <li>Data de nascimento <?=$nascimento?></li>
    <li> mensagem: <?=$mensagem
    ?></li>
</ul>




</body>
</html>