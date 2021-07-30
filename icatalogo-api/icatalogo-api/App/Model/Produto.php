<?php

use App\Core\Model;

class Produto {

    public $id;
    public $descricao;
    public $peso;
    public $tamanho;
    public $quantidade;
    public $cor;
    public $valor;
    public $desconto;
    public $imagem;

    public function listarTodos(){
        $sql = " SELECT p.*, c.descricao as categoria FROM tbl_produto p
                 INNER JOIN tbl_categoria c ON p.categoria_id = c.id ORDER BY p.id DESC ";

        //preparamos a consulta
        $stmt = Model::getConexao()->prepare($sql);
        //executamos a consulta
        $stmt->execute();

        //verificamos a quantidade de linhas
        if($stmt->rowCount() > 0){
            //pegamos os resultados em forma de lista de objetos
            $resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);

            //retornamos o resultado
            return $resultado;
        }else{
            return [];
        }
    }

    public function buscarPorId($id){
        $sql = " SELECT p.*, c.descricao as categoria FROM tbl_produto p
                 INNER JOIN tbl_categoria c ON p.categoria_id = c.id
                 WHERE p.id = ? ";

        //preparamos a consulta
        $stmt = Model::getConexao()->prepare($sql);
        $stmt->bindValue(1, $id);
        //executamos a consulta
        $stmt->execute();

        //verificamos a quantidade de linhas
        if($stmt->rowCount() > 0){
            //pegamos os resultados em forma de lista de objetos
            $resultado = $stmt->fetch(PDO::FETCH_OBJ);

            //retornamos o resultado
            return $resultado;
        }else{
            return null;
        }
    }

    public function deletar(){

        $sql = " DELETE FROM tbl_produto WHERE id = ? ";

        $stmt = Model::getConexao()->prepare($sql);
        $stmt->bindValue(1, $this->id);

        return $stmt->execute();

    }

    public function getProdutos(){

        $sql = " SELECT p.* FROM tbl_produto c
                INNER JOIN tbl_produto p ON p.categoria_id = c.id
                WHERE c.id = ? ";

        $stmt = Model::getConexao()->prepare($sql);
        $stmt->bindValue(1, $this->id);

        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $resultado;
        }else{
            return [];
        }
    }

}