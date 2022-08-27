<?php 


    $i = 0;
    $n = $_POST["txNumero"];

    while ($i <= 10) {
        echo "$n * $i = " .($n * $i) . "<br />";
        $i++;
    }

?>