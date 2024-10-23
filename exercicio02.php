<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>
<body>

<?php
$salario = 1000;

$salario_reajustado = 1000;
 
?>

<?php



 if ($salario < 500) {
    $salario *= 1.15;  
} elseif ($salario <= 1000) {
    $salario *= 1.10;  
} else {
    $salario *= 1.05;  
}

?>


   
<?php

echo  "Salário reajustado: " . number_format($salario, 2, ',', '.') . "<br>";
echo "Salário antigo: " . number_format($salario_reajustado, 2, ',', '.');

?>

</body>
</html>