<section>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A1 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A2 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A3 </a>
        </figcaption>
    </figure>

</section>

<?php
    include("conexao.php");

    $letter = $_GET['letra'];

    echo "<h1> $letter </h1>";

    //$stmt = $pdo->prepare("select * from tbPalavra");	

    $stmt = $pdo->prepare("select * from tbPalavra
     where tituloPalavra like '$letter%'");	
    $stmt ->execute();
    
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){    
        echo "$row[0] ";
        echo "$row[1] ";        
        echo "$row[2] ";
        echo "<img src='$row[3]' />";
        echo "<a href='$row[4]'> Saiba mais </a>";
        echo "<br />";        
    }
    	
?>