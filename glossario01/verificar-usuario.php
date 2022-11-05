<?php

    $usu = $_POST['txUsuario'];
    $sen = $_POST['txSenha'];

    //echo "$usu $sen";

    
    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario
        where usuario='$usu' and senha='$sen';
    ");	
    $stmt ->execute();
    
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){    
        echo $row[0];
        echo $row[1];        
        echo $row[2];
        
        echo "<br />";        
    }
?>