<?php

require_once('Banco.class.php');
class Usuario{

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $id_tipo;

    //Métodos:

    public function Cadastrar()
    {
        $sql = "INSERT INTO usuarios(nome, email, senha, id_tipo) 
        VALUES (?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $hash = hash("sha256", $this->senha);

        $comando->execute([$this->nome, $this->email, $hash, $this->id_tipo]);
        Banco::desconectar();
        return $comando->rowCount();
    }

    public function Logar()
    {
        
        $sql = "SELECT * FROM usuarios WHERE email = ? and senha = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);

        $hash = hash("sha256", $this->senha);

        $comando->execute([$this->email, $hash]);

        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;



    }

}


?>