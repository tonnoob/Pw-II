<?php
    session_start();  
     
    include("conexao.php");

    //Recuperando os valores digitador no login
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    //variaveis para verificação com o bd
    $usuarioBanco='';
    $senhaBanco='';

    try{
        $stmt = $pdo -> prepare("select usuario,senha from tbUsuario where usuario='$usuario' and senha'$senha'");

        $stmt ->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            $usuarioBanco = $row['usuario'];
            $senhaBanco = $row['senha'];
        }
    }
    catch(PDOException $e){
        echo "Erro: " . $e ->getMessege();
    }

    //veficacação para a autorização
    if($email == $emailBanco && $senha == $senhaBanco){
         //echo "Dados são validos";
         $_SESSION['autorização'] = true;
         header("Location:../palavra.php");
    }
    else{
        //echo "Usuário e/ou senha incorreto(s)";
        $_SESSION['autorização'] = false;
        unset($_SESSION['autorização']);
        session_destroy();
        header("Location:../login.php");
    }

?>