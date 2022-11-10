<?php

require_once 'PrimeiroDesafio.php';
require_once 'SegundoDesafio.php';
require_once 'TerceiroDesafio.php';

// Passar a velocidade do veículo como parâmetro
$velocidade = new PrimeiroDesafio(77);
// Retorna o valor da multa já convertido para moeda brasileira
echo $velocidade->calcularMulta();

echo "<br>";

$arrayNumeros = new SegundoDesafio();
// Exibe os itens ordenados do array Z
var_dump($arrayNumeros->ordenar());
// Exibe a quantidade de itens dentro do array Z
echo $arrayNumeros->contar();

echo "<br>";

// Passar uma frase como parâmetro
$caracteres = new TerceiroDesafio("JFAZLFD AZFFLRAZKF FSAAAZZZFLF ALFAZAAZZKF");
// Remove os caracteres "AZ" e retorna a quantidade de passos necessários
echo $caracteres->remover();

?>