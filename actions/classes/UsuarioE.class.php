<?php

require_once('Banco.class.php');
class UsuarioE{

    public $id;
    public $cidade;
    public $estado;
    public $cep;
    public $numero;
    public $endereco;
    public $complemento;

public function CadastrarEndereco()
    {
        $sql = "CALL cadastrarEndereco  
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $comando->execute([$this->cidade, $this->estado, $this->cep, $this->numero,$this->endereco,$this->complemento]);
        Banco::desconectar();
        return $comando->rowCount();
    }
}
    ?>