<?php

//declarando um vetor
$vetorDeInteiros = [1, 10, 2, 5, 50, 9, 100];

$vetorDeStrings = ["Fulano", "Ciclano", "Beltrano de Tal", "Jucicleison"];

//a função print_r é voltada a exibir vetores
print_r($vetorDeInteiros);

echo "<br/ ><br />";

print_r($vetorDeStrings);

echo "<br/ ><br />";

//a função var_dump exibe as informações sobre uma variável
var_dump($vetorDeInteiros);
echo "<br/ ><br />";
var_dump($vetorDeStrings[1]);

echo "<br/ ><br />";

echo $vetorDeStrings[3] . " , " . $vetorDeStrings[0];

$vetorComChavesDefinidas = [
  "nome" => "Fulano",
  "idade" => 32,
  "sexo" => "M",
  "renda" => 2550.50,
  "estaTrabalhando" => true,
  10 => "alguma coisa",
  "endereco" => [
    "rua" => "Av Tal",
    "numero" => 5001,
    "bairro" => "Centro"
  ]
];

//em php, true == 1 e false == 0

echo "<br/ ><br />";

print_r($vetorComChavesDefinidas);

echo "<br/ ><br />";

echo "O nome do usuário é: " . $vetorComChavesDefinidas["nome"];
echo ", e a idade dele é: " . $vetorComChavesDefinidas["idade"];
echo ", e ele mora na rua: " . $vetorComChavesDefinidas["endereco"]["rua"];

echo "<br/ ><br />";

print_r($vetorComChavesDefinidas["endereco"]);

$vetorComChavesDefinidas["endereco"]["numero"] = "5001";

echo "<br/ ><br />";

var_dump($vetorComChavesDefinidas["endereco"]);

echo "<br/ ><br />";

$rua = $vetorComChavesDefinidas["endereco"]["rua"];

//verificar se o fulano mora na Av Tal e numero 5001
if (
  $rua == "Av Tal" &&
  $vetorComChavesDefinidas["endereco"]["numero"] == 5001
) {
  echo "Sim";
}

echo "<br/ ><br />";

//count retorna o tamanho do vetor (count = contar)
echo count($vetorComChavesDefinidas["endereco"]);

echo "<br/ ><br />";

print_r($_GET["nome"]);

echo "<br/ ><br />";

/**
 * Percorrer vetores
 * Utilizando laços de repetição while, for, foreach
 */

//somar os valores do vetor de inteiros
$soma = 0;
for($i = 0; $i < count($vetorDeInteiros); $i++){
  $soma = $soma +  $vetorDeInteiros[$i];
}

echo $soma;

echo "<br/ ><br />";

$soma = 0;
$i = 0;
while($i < count($vetorDeInteiros)){
  $soma = $soma +  $vetorDeInteiros[$i];
  $i++;
}

echo $soma;

echo "<br/ ><br />";

//encontrar um nome "Ciclano" dentro do vetor, se encontrar exibir "encontrado"
foreach($vetorDeStrings as $nome){
  if($nome == "Jucicleison") echo "Encontrado";
}