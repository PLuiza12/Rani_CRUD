<?php
$cpf = $_POST["CPF"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$idade = $_POST["idade"];
$matricula = $_POST["matricula"];

$file = fopen("../tabela.csv", "r");

while ($line = fgets($file)){
   $partes = explode(",", $line);
   if ($partes[0] == $cpf){
       echo "CPF já existente";
       exit();
   } 
}
 
$file = fopen("../tabela.csv", "a");
fwrite($file, "$cpf,$nome,$sobrenome,$idade,$matricula\n");

?>

<h2>Dados Inseridos</h2>

<p>Nome: <?= $nome ?></p>
<p>Sobrenome: <?= $sobrenome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Matricula: <?= $matricula ?></p>
<p>CPF: <?= $cpf ?></p>


<a href="Lista.php"> Voltar </a>