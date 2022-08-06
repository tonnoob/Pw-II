<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>   

    <header>
        <nav>
            <ul>
                <li> <a href="index.php"> Home </a> </li>
                <li> <a href="#"> Entrada/Saída </a> </li>
                <li> <a href="decisao.php"> Decisão </a> </li>
                <li> <a href="#"> Laço </a> </li>
            </ul>
        </nav>
    </header>



    <?php
        $nome = "Juarez";
        $idade =8;
        $email = "juarez@gmail.com";

        $status ="";

        //Operadores relacionais > < >= <= == !=
        // > maior
        // < menor
        // >= maior ou igual
        // <= menor ou igual
        // igual
        // diferente

        if($idade >= 18){
            //se a condição for verdadeira
            $status = "Maior de idade";
        }
        else{
            //se a condição for falsa
            $status = "Menor de idade";
        }


        /*
        echo "<p class='titNome'> $nome </p>";
       
        echo "<p class='titIdade'> $idade </p>";
       
        echo "<p class='titEmail'> $email </p>";       
        */

        echo "<h1> Nome: <span> $nome </span> </h1>";
        echo "<h2> $idade </h2>";
        echo "<h3> $email </h3>";
        echo "<h4> $status </h4>"; 
    ?>

   

    <footer>

    </footer>

    
</body>
</html>