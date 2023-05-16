<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções de Texto</title>
</head>
<body>
    
    <h2>Função printF</h2>
<p>Mostra uma string formatada. É bem parecida ao <code> number_format</code>, que vimos quando falamos de funções com números</p>

<?php
$produto = "Caqui";
$preco = 3;
printf("O %s custa R$ %.2f", $produto, $preco)
?>
<hr>

<h2>Função str_replace</h2>
<p>Substitui caracteres que estão no conteúdo da variável por outros. Para isso é preciso especificar entre parênteses qual será o caractere substituído, qual caractere entrará no lugar e também qual variável está no conteúdo.</p>

<?php
$texto = "Nós*estamos*aprendendo*PHP";
$texto2 = str_replace("*", " ", $texto);
echo $texto2;
?>

<hr>

<h2>Função strlen</h2>
<p>Conta a quantidade de caracteres do conteúdo.</p>

<?php
$texto = "Nós estamos aprendendo PHP no IOS";
echo strlen($texto);
?>
<hr>
<h2>Função str_word_count</h2>
<p>Conta a quantidade de palavras do conteúdo.</p>
<?php
$texto = "Marco Antônio";
echo str_word_count($texto, 0, 'çãõéóúíáàô')
?>
<hr>

<h2>Função strtolower</h2>
<p>Transforma todas as letras da string em minúscula.</p>

<?php 
$texto = "CURSO DE PROGRAMAÇÃO WEB FULL-STACK";
$texto2 = mb_strtolower($texto);
echo $texto2;

?>

<hr>

<h2>Função strtoupper</h2>
<p>Transforma todas as letras da string em maísculas.</p>

<?php
$texto = "curso de programação web full stack";
$texto2 = mb_strtoupper($texto);
echo $texto2;
?>

<hr>

<h2>Função ucfirst e ucwords</h2>
<p>A primeira transforma em maíscula a primeira letra da primeira palavra de string enquanto a segunda função transforma em maíscula a primeira letra de todas as palavras da string.</p>

<?php
$texto = "curso de programação web full stack";
$texto2 = ucfirst($texto);
echo "$texto2<br>";

$texto = "curso de programação web full stack";
$texto2 = ucwords($texto);
echo $texto2;
?>

<hr>

<h2>Funções strpos e strrev</h2>
<p>A primeira encontra em qual posição determinada string aparece pela primeira vez enquanto a segunda inverte a ordem de uma string.</p>
<?php
$texto = "Eu estou aprendendo PHP no IOS";
$pos = strpos($texto, "IOS");
echo "$pos<br>";

$texto = "Instituto da Oportunidade Social";
$texto2 = strrev($texto);
echo $texto2;
?>
<hr>

<h2>Funções substr e str_pad</h2>

<p>A primeira função escreve a partir da posição indicada e a segunda função preenche a string com uma cadeia de caracteres.</p>

<?php
$texto = "Eu estou aprendendo PHP no IOS";
$texto2 = substr($texto, 9);
echo "$texto2<br>";

$textoa = "IOS";
$textob = str_pad($textoa, 10, "x", STR_PAD_LEFT);
echo "$textob";
?>
<hr>
<h2>Função trim, ltrim e rtrim</h2>
<p>Eliminam os espaços de uma string. O trim elimina o início e do fim. o ltrim elimina apenas os do início; e o rtrim apenas os do fim.</p>
<?php 
$texto = "  Aula De Programação   ";
$texto2 = trim($texto);
$texto3 = ltrim($texto);
$texto4 = rtrim($texto);

echo "<br>$texto2";
echo "<br>$texto3";
echo "<br>$texto4";
?>
</body>
</html>