<?php

function exibirMensagem (){
    $mensagem = "Olá Mundo das Funções";

    echo $mensagem;
}

//executando uma função


exibirMensagem();
exibirMensagem();
exibirMensagem();
exibirMensagem();

echo"<br />";
echo"<br />";

function somar($a, $b){

    echo $a + $b;
}

echo"<br />";
echo"<br />";

somar(250,99);

echo"<br />";


function nomeFormatado ($primeiroNome, $ultimoNome){
    $nomeFormatado = $primeiroNome."" .$ultimoNome;


    return $nomeFormatado;
}

$nome = nomeFormatado("Alan", "Lucas");


echo $nome;

echo"<br />";
echo"<br />";

$nome = nomeFormatado("Thamires", "Amancio");


echo $nome;

echo"<br />";
echo"<br />";

// argumento opcionais
// parametros opcionais devem sempre ficar po ultimo na lista de argumentos
function formatarData ($dia,$mes,$ano){
    $dataFormatada = $dia . "/" .$mes . "/" . $ano;

    return $dataFormatada;
}

echo formatarData(11,03,2021);

//passando um vetores para argumento
function mostrarNome(array $nome){
    foreach($nome as $nome){
        echo $nome . "<br />";
    }
}

mostrarNome(["Thamires", "Gaudencio", "Amancio"]);

?>