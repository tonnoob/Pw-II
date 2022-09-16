<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    
<!-- 3 - Criar uma tabela HTML com 10 linhas contendo as colunas Produto e Valor.
Utilizando laço de repetição exiba as linha ímpares na cor azul e as pares na cor vermelha. -->
    
    <style>
        #par { background-color: pink}
    </style>
    
    <style>
        #impar { background-color: lightblue}
    </style>

<table>
    <tr>
        <th>Produto</th>
        <th>Valor</th>
    </tr>
    <?php
    
    for($i = 0; $i<=10; $i++){
        
        if($i % 2 == 0){
            echo "<tr id=\"par\">
            <td>bola</td>
            <td>5 reais</td>
        </tr>";
        
        }
        else{
            echo "<tr id=\"impar\">
            <td>bola</td>
            <td>5 reais</td>
        </tr>";
        
    }
        
    }

    ?>
</table>

</body>
</html>