<?php

require_once('Banco.class.php');
class Estabelecimento{

    public $id;
    public $id_categoria;
    public $id_usuario;
    public $nome;
    public $descricao;
    public $foto;
    
    //Métodos:

    public function Cadastrar()
    {
        $sql = "INSERT INTO usuarios(id_categoria, id_usuario, nome, descricao,foto) 
        VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $comando->execute([$this->id_categoria, $this->id_usuario, $this->nome, $this->descricao, $this->foto]);
        Banco::desconectar();
        return $comando->rowCount();
    }

   

}


?>