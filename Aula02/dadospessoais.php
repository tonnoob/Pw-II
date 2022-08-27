<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados pessoais</title>

    <link rel="stylesheet" href="css/dadospessoais.css">

</head>
<body>
    

    <!-- Criar um projeto chamado dadospesoais.
    O projeto deverá ter um arquivo chamado index.php
    Dentro da páginha index criar 3 variáveis: 
    nome com o valor Juarez
    idade com o valor 28
    e-mail com o valor juarez@gmail.com

    Exibir:
    o nome na cor azul 
    A idade na cor vermelha 
    O e-mail com a cor verde  -->

    <?php

        $nome = "Juarez";
        $idade = 28;
        $email = "juarez@gmail.com";

        echo "<h1> Nome:  <span class='nome'> $nome </span> </h1>";
        echo "<h1> idade: <span class='idade'> $idade </span> </h1>";
        echo "<h1> email: <span class='email'> $email </span> </h1>";

    ?>

</body>
</html>