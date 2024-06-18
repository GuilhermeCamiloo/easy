<?php

require_once('Banco.class.php');
class EstabelecimentoE{

    public $id;
    public $cidade;
    public $estado;
    public $cep;
    public $numero;
    public $endereco;
    public $complemento;
    public $id_categoria;
    public $id_usuario;
    public $nome;
    public $descricao;
    public $foto;

public function CadastrarEnderecoE()
    {
        $sql = "CALL cadastrarEnderecoE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->cidade, $this->estado, $this->cep, $this->numero,$this->endereco,$this->complemento,$this->id_categoria, $this->id_usuario, $this->nome, $this->descricao, $this->foto]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function CadastrarSemFoto()
    {
        $sql = "CALL cadastrarEnderecoESF (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        // try {
            $comando->execute([$this->cidade, $this->estado, $this->cep, $this->numero,$this->endereco,$this->complemento,$this->id_categoria, $this->id_usuario, $this->nome, $this->descricao]);
            Banco::desconectar();
            return $comando->rowCount();
        // } catch (PDOException $e) {
        //     Banco::desconectar();
        //     return 0;
        // }
    }
}
    ?>