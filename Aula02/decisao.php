<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>

    <link rel="stylesheet" href="css/decisao.css">
</head>
<body>
    
    <!-- Criar uma página com 4 valores referentes 
    a quatro notas, calcular e exibir a média .
    Caso a média for maior que 6 exibir Aprovado com a 
    cor azul senão Reprovado com a cor vermelha. -->


    <?php

        $nota1 = 10;
        $nota2 = 5;
        $nota3 = 7;
        $nota4 = 10;
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo  "<h1> Média:   $media </h1>";
        if ($media > 6) {
            echo "<h1 class='aprovado'> Aprovado </h1>";
        }
        else {
            echo "<h1 class='reprovado'>Reprovado </h1>";
        }            
        



    ?>

</body>
</html>