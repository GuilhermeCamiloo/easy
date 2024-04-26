<?php

require_once('Banco.class.php');
class Categoria
{

    public $id;
    public $nome;


public function Listar()
{
    $sql = "SELECT * FROM categoria";
    $banco = Banco::conectar();
    $comando = $banco->prepare($sql);
    $comando->execute();

    $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    Banco::desconectar();
    return $arr_resultado;

}

public function Cadastrar()
{

    $sql = "INSERT INTO categoria(nome) 
    VALUES (?)";
    $banco = Banco::conectar();
    $comando = $banco->prepare($sql);
    $comando->execute([$this->nome]);
    Banco::desconectar();
    return $comando->rowCount();
    
}



}

?>