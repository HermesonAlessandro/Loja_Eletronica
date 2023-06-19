<?php
public class Usuario{
    private $pdo;
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
            sql = $pdo->prepare("SELECT $nome FROM produto WHERE preco = :pr");
            sql->bindvalue(":pr",$preco);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;   
            }
            else{
                $sql = $pdo->prepare("INSERT INTO produto (nome, tipo, descricao, preco, desconto, quantidade, imagem) VALUES 
                (:n, :tp, :de, :pr, :ds, :qu, img)");
                $sql->bindValue(":n", $cpf);
                $sql->bindValue(":tp", $nome);
                $sql->bindValue("de", $sobrenome)
                $sql->bindValue(":pr", md5($numero));
                $sql->bindValue(":ds", $email);
                $sql->bindValue(":qu", $senha);
                $sql->bindValue(":img", $sexo);
                $sql->execute();
                return true;
            }
        }
}
?>