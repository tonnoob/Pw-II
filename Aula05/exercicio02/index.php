<?php

    //Fazer a média de 4 valores com estruturas de repetição.

    $nota = array ();
    $nota[0] = 8;
    $nota[1] = 2;
    $nota[2] = 9;
    $nota[3] = 1;


    $media = ($nota[0] + $nota[1] + $nota[2] + $nota[3]) / 4;

    echo "Em uma váriavel só: " . $media . "</br> ";
?>

<?php
    $nota = array ();
    $nota[0] = 8;
    $nota[1] = 2;
    $nota[2] = 9;
    $nota[3] = 1;
    $media = 0;

    for($i = 0; $i<count($nota); $i++){
        $media = $media + $nota[$i];
    }
    
    $media = $media / $i;
    echo "Usando for: " . $media . "</br> ";
?>

<?php
    $nota = array ();
    $nota[0] = 8;
    $nota[1] = 2;
    $nota[2] = 9;
    $nota[3] = 1;
    $media = 0;
    $i = 0;
    while($i<count($nota)){
        $media = $media + $nota[$i];
        $i++;
    }
    
    $media = $media / $i;
    echo "Usando while: " . $media . "</br> ";
?>

<?php
    $nota = array ();
    $nota[0] = 8;
    $nota[1] = 2;
    $nota[2] = 9;
    $nota[3] = 1;
    $i=0;
    $media = 0;
    do{
        $media = $media + $nota[$i];
        $i++;
    }while($i<count($nota));

    $media = $media / $i;
    echo "Usando do while: " . $media;
?>