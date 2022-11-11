<section>

<?php 
        include("conexao.php"); 

        $sql = "SELECT COUNT(*) FROM tbPalavra";
        $res = $pdo->query($sql);
        $totalPalavras = $res->fetchColumn();

        $sql2 = "SELECT COUNT(*) FROM tbUsuario";
        $res2 = $pdo->query($sql2);
        $totalUsuario = $res2->fetchColumn();
        
    ?>

    <h1> Total de palavras: <?php echo "$totalPalavras"; ?></h1>
    <h1> Total de Usuários: <?php echo "$totalUsuario"; ?></h1>

</section>