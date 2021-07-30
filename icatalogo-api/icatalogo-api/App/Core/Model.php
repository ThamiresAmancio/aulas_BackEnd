<?php

namespace App\Core;

class Model {

    //vamos aplicar o padrão de projeto Singleton
    private static $conexao;

    public static function getConexao(){
        //se a conexão não estiver criada, criamos ela
        if(!isset(self::$conexao)){
            //self é usado para pegar um atributo estático desta classe
            self::$conexao = new \PDO("mysql:host=localhost;port=3306;dbname=icatalogo;", "root", "2607");
        }
        
        //retornamos a conexão
        return self::$conexao;
    }
}