<?php

    $palavra = $_POST['txPalavra'];
    $descr = $_POST['txDescricao'];
    $caminhoImagem = $_POST['txImagem'];
    $link = $_POST['txLink'];   

    echo "$palavra";
    echo "$descr";
    echo "$caminhoImagem";
    echo "$link";
    
    include("conexao.php");

    try{
        $stmt = $pdo->prepare("insert into tbpalavra values(null, '$palavra', '$descr', '$caminhoImagem', '$link')");
        $stmt ->execute();
    }

    catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
    
?>
