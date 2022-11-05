
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>

<section>
    <h1> Título </h1>
</section>

<section>
    <form action="inserir-palavra.php" method="post">
        <div>
            <input type="text" placeholder="Palavra" name="txPalavra" />
        </div>

        <div>
            <input type="text" placeholder="Descrição" name="txDescricao" />
        </div>

        <div>
            <input type="text" placeholder="Imagem" name="txImagem" />
        </div>

        <div>
            <input type="text" placeholder="Link" name="txLink" />
        </div>

        <div>
            <input type="submit" value="Salvar" />
        </div>
    </form>
</section>
  
</body>
</html>


<?php
    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbPalavra");	
    $stmt ->execute();
    
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){    
        echo "$row[0] ";
        echo utf8_encode($row[1]);        
        echo utf8_encode($row[2]);
        echo utf8_encode($row[3]);
        echo utf8_encode($row[4]);
        echo "<a href='excluir-palavra.php?id=". $row['idPalavra'] . "'> Excluir </a>";
        echo "<br />";        
    }	
?>