<?php

require_once('Banco.class.php');
class Avaliacao
{

    public $id;
    public $id_estabelecimento;
    public $id_usuario;
    public $nota;
    public $comentario;



public function CadastrarAvaliacao()
{

    $sql = "INSERT INTO avaliacao(id_estabelecimento, id_usuario, nota, comentario) 
    VALUES (?, ?, ?, ?)";
    $banco = Banco::conectar();
    $comando = $banco->prepare($sql);
    $comando->execute([$this->id_estabelecimento, $this->id_usuario, $this->nota, $this->comentario]);
    Banco::desconectar();
    return $comando->rowCount();
    
}


}


?>