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
    public $nome;
    public $email;
    public $senha;
    public $id_tipo;

public function CadastrarEndereco()
    {
        $sql = "CALL cadastrarEndereco (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $hash = hash("sha256", $this->senha);

        $comando->execute([$this->cidade, $this->estado, $this->cep, $this->numero,$this->endereco,$this->complemento,$this->nome,$this->email, $hash,$this->id_tipo]);
        Banco::desconectar();
        return $comando->rowCount();
    }
}
    ?>