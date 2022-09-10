<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizando vetores e laços de repetição, crie uma página que exiba a imagem referente a um país, seu nome e o seu continente.</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <?php
        $imagemPais = array();
        $nomePais = array();
        $continente = array();        

        $imagemPais[0] = "img/brasil.png";
        $nomePais[0] = "Brasil";
        $continente[0] = "América-Sul";

        $imagemPais[1] = "img/japao.png";
        $nomePais[1] = "Japão";
        $continente[1] = "Ásia";

        $imagemPais[2] = "img/canada.png";
        $nomePais[2] = "Canadá";
        $continente[2] = "América-Norte";

        $imagemPais[3] = "img/turquia.png";
        $nomePais[3] = "Turquia";
        $continente[3] = "Europa";

        $imagemPais[4] = "img/australia.png";
        $nomePais[4] = "Austrália";
        $continente[4] = "Oceania";

        $imagemPais[5] = "img/africa_do_sul.png";
        $nomePais[5] = "África-Sul";
        $continente[5] = "África";



        for($i=0;$i<count($nomePais);$i++){            
            echo "<h1> $nomePais[$i] </h1>";            
            echo "<img src='$imagemPais[$i]' />";
            echo "<p> $continente[$i] </p>";              
        }    
    ?>
</body>
</html>