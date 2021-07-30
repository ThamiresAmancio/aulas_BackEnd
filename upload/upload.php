<?php

function validarCampos (){
    $erros = [];


    if ($_FILES["foto"]["error"] == UPLOAD_ERR_NO_FILE) {
        $erros[] = "O campo foto é obrigatório";

    }else if(isset($_POST["foto"])|| $_FILES["foto"]["error"] !=UPLOAD_ERR_OK){
        $erros[] = "Ops, houve um erro inesperado.Verifique o arquivo e tente novamente";

    }else{
        $imagemInfo =  getimagesize($_FILES["foto"]["tmp_name"]);

    }if(!$imagemInfo){
        $erros[] = "Este arquivo não é uma imagem.";
    }
    if($_FILES["foto"]["size"] > 1024 * 1024){
        $erros[] = "O arquivo não pode ser amior que 1  MB";
    }
    return $erros;
}
 $erros = validarCampos();
 if(count ($erros) > 0) {
     echo $erros[0];

     exit();
 }



 $fileName = $_FILES["foto"]["name"];

 $extensao = pathinfo($fileName, PATHINFO_EXTENSION);

 $newFileName = md5(microtime()) . ".$extensao";

  move_uploaded_file($_FILES["foto"]["tmp_name"], "imagens/$newFileName");

  //Podemos salavr no banco de dados o nome novo do arquivo $newFileName

  // para que podemos mostrar eçe para o usuário futuramente

  // da seguinte forma
?>

<img src="imagens/<?$newFileName?>"/>



if ($_FILES["foto"]["error"] == UPLOAD_ERR_NO_FILE) {
        $erros[] = "Você precisa enviar uma imagem";
    } else {
        //se o arquivo é uma imagem
        $imagemInfo =  getimagesize($_FILES["foto"]["tmp_name"]);

    }if(!$imagemInfo){
        $erros[] = "Este arquivo não é uma imagem.";
    }
    if($_FILES["foto"]["size"] > 1024*1024*2){
        $erros[] = "O arquivo não pode ser maior que 2 MB";
    }
    //retorna os erros
    return $erros;
}
require("../database/conexao.php");

$erros = validarCampos();

if (count($erros) > 0) {
    //incluimos um campo erro na sessão e atribuímos o vetor de erros
    $_SESSION["erros"] = $erros;
    
    header("location:index.php");

}

 $fileName = $_FILES["foto"]["name"];

 $extensao = pathinfo($fileName, PATHINFO_EXTENSION);

 $newFileName = md5(microtime()) . ".$extensao";

 move_uploaded_file($_FILES["foto"]["tmp_name"], "produto/$newFileName");