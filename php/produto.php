<?php
class Produto{
    include('conexao.php');
    private $pdo;
    public $dados;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }        
        catch(PDOException $e){
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $tipo, $descricao, $preco, $desconto, $quantidade, $imagem){
            global $pdo;
            $sql = $pdo->prepare("SELECT id FROM produto WHERE nome = :n");
            $sql->bindvalue(":n",$nome);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;   
            }
            else{
                $sql = $pdo->prepare("INSERT INTO produto (nome, tipo, descricao, preco, desconto, quantidade, imagem) VALUES 
                (:n, :t, :d, :p, :de, :q, :img)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $tipo);
                $sql->bindValue(":d", $descricao);
                $sql->bindValue(":p", $preco);
                $sql->bindValue(":de", $desconto);
                $sql->bindValue(":q", $quantidade);
                $sql->bindValue(":img", $imagem);
                $sql->execute();
                return true;
            }
    }
    public function listar(){
        global $pdo;
        global $dados:
        $sql = $pdo->prepare("SELECT * FROM produto");
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;   
        }
        else{
            $dados = $mysqli->query($sql);
            return true;
        }
    }
    public function excluir($id,$nome){

    }
}
?>