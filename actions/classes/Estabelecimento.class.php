<?php
require_once('Banco.class.php');
class Estabelecimento
{

    public $id;
    public $id_categoria;
    public $id_usuario;
    public $nome;
    public $descricao;
    public $foto;

    //Métodos:
    public function CadastrarSemFoto()
    {
        $sql = "INSERT INTO estabelecimentos(id_categoria, id_usuario, nome, descricao)
         VALUES (?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        try {
            $comando->execute([$this->id_categoria, $this->id_usuario, $this->nome, $this->descricao]);
            Banco::desconectar();
            return $comando->rowCount();
        } catch (PDOException $e) {
            Banco::desconectar();
            return 0;
        }
    }
    public function CadastrarComFoto()
    {
        $sql = "INSERT INTO estabelecimentos(id_categoria, id_usuario, nome, descricao, foto)
         VALUES (?, ?, ?, ?, ?)";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        try {
            $comando->execute([$this->id_categoria, $this->id_usuario, $this->nome, $this->descricao, $this->foto]);
            Banco::desconectar();
            return $comando->rowCount();
        } catch (PDOException $e) {
            Banco::desconectar();
            return 0;
        }
    }

    public function ListarTudo()
    {
        $sql = "SELECT * FROM view_estabelecimento";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }

    public function ListarPorId()
    {
        $sql = "SELECT * FROM view_estabelecimento";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute();
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    public function Editar(){
        $sql = "UPDATE estabelecimentos SET id_categoria=?, nome=?,  descricao=? WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id_categoria, $this->nome, $this->descricao, $this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
    public function Apagar(){
        $sql = "DELETE FROM estabelecimentos WHERE id = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id]);
        Banco::desconectar();
        return $comando->rowCount();
    }
    public function ListarPorUsuario()
    {
        $sql = "SELECT * FROM estabelecimentos WHERE id_usuario = ?";
        $banco = Banco::conectar();
        $comando = $banco->prepare($sql);
        $comando->execute([$this->id_usuario]);
        $arr_resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $arr_resultado;
    }
    
}
