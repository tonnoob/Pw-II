<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>

<!-- 4 - Criar uma tabela HTML com 10 linhas contendo as colunas Produto e Valor. 
Exiba apenas na tabela os produtos cujo valor seja inferior a 1000. -->

<table>
    <tr>
        <th>Produto</th>
        <th>Valor</th>
    </tr>
    <?php
    
    $valores = array();
    
    $valores[0] = 500;
    $valores[1] = 1000;
    $valores[2] = 1200;
    $valores[3] = 4500;
    $valores[4] = 1;
    $valores[5] = 2;
    $valores[6] = 3;
    $valores[7] = 15;
    $valores[8] = 1500;
    $valores[9] = 3;

    for($i = 0; $i<10; $i++){
        
        if($valores[$i] < 1000){
        echo "<tr>
            <td>bola</td>
            <td>" . $valores[$i] . " reais</td>
        </tr>";
        }
    }
        
    

    ?>
</table>

</body>
</html>