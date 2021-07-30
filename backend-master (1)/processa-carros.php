<?php

$listaCarros = [
  1 => "Ferrari",
  2 => "Lamborghini",
  3 => "Porsche",
  4 => "Fusca",
  5 => "Brasilia",
  6 => "Opala",
  7 => "Uno Mille",
];

$carroSelecionado = $_POST["carros"];

echo $carroSelecionado;


echo "Você selecionou o carro " . $listaCarros[$carroSelecionado];
