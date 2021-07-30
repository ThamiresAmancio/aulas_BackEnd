<?php

  //essa lista pode vir de um banco de dados
  $listaCarros = [
    1 => "Ferrari",
    2 => "Lamborghini",
    3 => "Porsche",
    4 => "Fusca",
    5 => "Brasilia",
    6 => "Opala",
    7 => "Uno Mille",
  ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SELECT - COMBO-BOX - DROPDOWN</title>
</head>

<body>
  <form method="POST" action="processa-carros.php">
    
    <!-- 

        EXEMPLO SELECT COM OPTGROUP
      
      <select id="carros" autofocus name="carros" required>
      <option value="">SELECIONE</option>
      <optgroup label="Carros de luxo">
        <option value="1">Ferrari</option>
        <option value="2">Lamborghini</option>
        <option value="3">Porsche</option>
      </optgroup>
      <optgroup label="Carros Antigos">
        <option value="4">Fusca</option>
        <option disabled value="5">Brasilia</option>
        <option value="6">Opala</option>
      </optgroup>
    </select> -->

    <label for="carros">Carros</label>
    <select id="carros" autofocus name="carros" required>
      <option value="">SELECIONE</option>
      <?php
        foreach($listaCarros as $chave => $carro) {
      ?>
          <option value="<?= $chave ?>"><?= $carro ?></option>
      <?php
        }
      ?>
    </select>
    <button>Enviar</button>
  </form>
</body>

</html>