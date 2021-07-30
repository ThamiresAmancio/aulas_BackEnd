<?php


   $nome=$_GET["nome"];
   $idade=$_GET["idade"];
   $Ano= date("Y") - $idade;

   echo"<h1>Olá, $nome, você nasceu em $Ano</h1>";

   if($idade > 60){
       echo "<h2> Você é do grupo de risco! CUIDADO !!!</h2>";
   }