<?php
    
    $primeiroNumero = isset($_POST['primeiroNumero']) ? $_POST['primeiroNumero']: NULL;
    $segundoNumero = isset($_POST['segundoNumero']) ? $_POST['segundoNumero']: NULL;
    $simbol = isset($_POST['operacao']) ? $_POST['operacao']: NULL;


    if($simbol == "soma"){
        $result = $primeiroNumero + $segundoNumero;
    }else if($primeiroNumero > 0 && $segundoNumero > 0 && $simbol == "divisao"){
        $result = $primeiroNumero / $segundoNumero;
    }else if ($simbol == "sub"){
        $result =  $primeiroNumero - $segundoNumero;
    }else{
        $result =  $primeiroNumero * $segundoNumero;
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="../calculadora/style.css">
</head>
<body>
    <form method="POST" action="index.php" >
        <h1>Calculadora</h1>
        <div class="input">
            <label for="primeiroNumero">Primeiro Número:</label>
            <input type="number" id="primeiroNumero" name="primeiroNumero" placeholder="Digite um Número"/>
        </div>

        <div class="input">
            <label for="segundoNumero">Segundo Número:</label>
            <input type="number" id="segundoNumero" name="segundoNumero" placeholder="Digite um Número"/>
        </div>

        <div class="input-radio">
            <h2>
                Escolha uma operação:
            </h2>
            <input type="radio"  id="soma" name="operacao" value="soma"/>
            <label for="operacao">Soma</label>


            <input type="radio" id="sub"  name="operacao" value="sub"/>
            <label for="operacao">Subtração</label>

           
            <input type="radio" id="divisao"  name="operacao" value="divisao"/>
            <label  for="operacao">Divisão</label>

            <input type="radio" id="multiplicacao"  name="operacao" value="multiplicacao"/>
            <label  for="operacao">Multiplicação</label>

        </div>

        <div class="resultado">
        <?php
               echo "<h1>$result</h1>"
            ?>
        </div>
        <button>Calcular</button>
    </form>
</body>
</html>
