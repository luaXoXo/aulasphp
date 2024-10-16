<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade1</title>
</head>
<body>

    <?php
     $dados = [
        "nome" => "ana.banana",
        "senha" => "bananinha123",
        "idade" => "20",
        "cidade" => "São Paulo",
        "telefones" => ["11-2135-0300", "11-91234-5678"]
    ]
      
    ?>
    <h1>atividade 1</h1>
    <ol>
        <li>Nome de usuário: <?=  $dados["nome"]; ?></li>
        <li>Idade: <?=  $dados["idade"]; ?></li>
        <li>Cidade: <?=  $dados["cidade"]; ?></li>
        <li>Telefone1: <?= $dados["telefones"][1];?></li>
        
    </ol>
    <ol>
        <p>telefones</p>
        <ul><?= $dados["telefones"][1];?></ul>
        <ul><?= $dados["telefones"][0];?></ul>
    </ol>
</body>
</html>