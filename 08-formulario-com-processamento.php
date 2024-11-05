<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <h1>formulario e processamento juntos</h1>    
    <hr>
    
<?php
if ( isset($_POST['continuar']) ) {
    $nome = $_POST["nome"]
?>

    <h2>Bem-Vindo(a) <?=$nome?> </h2>

<?php
 } else {


include "formulario-boas-vindas.html";






    } ?>
 
</body>
</html>