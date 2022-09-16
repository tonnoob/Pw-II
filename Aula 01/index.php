<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <h1> Primeira aula de PHP! </h1>

    <?php

        $nome = "Otton";
        $idade = 17;
        $peso = 53;
        echo "Olá mundo!" . "<br>";
        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . " anos <br>";
        echo "Peso: " . $peso . " kg <br>";

        //Operações aritméticas: + - * / %

        //Entrada
        $n1 = 8;
        $n2 = 2;

        //Processamento
        $soma = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        $divisao = $n1 / $n2;

        //Saida
        echo "<p> $n1 + $n2 = $soma </p>";
        echo "<p> $n1 - $n2 = $subtracao </p>";
        echo "<p> $n1 * $n2 = $multiplicacao </p>";
        echo "<p> $n1 / $n2 = $divisao </p>";

    ?>
    
    
</body>
</html>