<?php

$nome ="Thamires";
$idade = 17;
$Ano = date("Y")- $idade;
//Exemplos

/** Exibir na página o nome do usuário e o seu ano de nascimento
 * Exemplo : Olá, Fulano de tal, você nasceu em 1995
 */

 

 

 echo "<h1>Olá, $nome, você nasceu em $Ano</h1>";

 echo "Hoje é" .date("d/m/Y");