<?php

$cpf = $_GET("CPF");
 
$conteudo = " ";
 
$file = fopen("../tabela.csv", "r");

while($line = fgets($file));{
    $partes = explode(",", $line);
    if ($partes[0] != $cpf){
        $conteudo = $conteudo . $line;
    }
}

file_put_contents("../tabela.csv", $conteudo);

header("location: Lista.php");
?>