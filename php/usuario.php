<?php
class Usuario{
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
    
    public function cadastrar($cpf, $nome, $sobrenome, $telefone, $email, $senha, $sexo, $endereco){
        global $pdo;
        $sql = $pdo->prepare("SELECT cpf FROM cliente WHERE email = :e");
        $sql->bindvalue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;   
        }
        else{
            $sql = $pdo->prepare("INSERT INTO cliente (cpf, nome, sobrenome, numero, email, senha, sexo, endereco) VALUES 
            (:c, :n, :sn, :tel, :e, :sen, :s, :en)");
            $sql->bindValue(":c", $cpf);
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":sn", $sobrenome);
            $sql->bindValue(":tel", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":sen", md5($senha));
            $sql->bindValue(":s", $sexo);
            $sql->bindValue(":en", $endereco);
            $sql->execute();
            return true;
        }   
    }
    public function logar($email, $senha, $tipoUso){
        global $pdo;
        if($tipoUso == "cliente"){
            $sql = $pdo->prepare("SELECT cpf FROM cliente WHERE email = :e AND senha = :sen");
        }else{
            $sql = $pdo->prepare("SELECT cpf FROM administrador WHERE email = :e AND senha = :sen");
        }
        $sql->bindValue(":e", $email);
        $sql->bindValue(":sen", $senha);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            session_start();
            $_SESSION['cpf'] = $dado['cpf'];
            return true;
        }
        else{
            return false;
        }
    }
}
?>