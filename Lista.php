<?php
$file = fopen("../tabela.csv", "r");
var_dump($file);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>
</head>
<body>
    <h1>Lista de dados</h1>
    <table>
        <?php while ($line = fgets($file)): ?>
            <tr>
                <?php $partes = explode(",", $line) ?>
                <?php foreach($partes as $dado): ?>
                    <td><?= $dado ?></td>
                <?php endforeach ?>
                <td>
                    <a href="delete.php?cpf=<?= $partes[0]?>"> remover </a>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
    <a href="index.html"> Adicionar </a>
</body>
</html>