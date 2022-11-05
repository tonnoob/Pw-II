<?php

    $idPalavra = $_GET['id'];    

    include("conexao.php");

    try{
        $stmt = $pdo->prepare("delete from tbpalavra where idPalavra='$idPalavra'");
        $stmt ->execute();

        $pdo = null;
        
        header("Location:palavra.php");
    }

    catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
?>