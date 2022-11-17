<!--
1<html>
<body>

    <section>
        <h1> Consulta </h1>
    </section>

    <section>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scape="col">ID></th>
                <th scape="col">Gênero</th>
            </tr>
        </thead>
        <tbody>
            <?php
                try{
                $stmt = $conn -> prepare("select * from tbGenero");
                $stmt -> execute();

                while ($row = $stmt -> fetch(PDO::FETCH_BOTH)){ 
                    echo $row["idGenero"] . " ";
                    echo $row["genero"] ;
                    echo "<br />";

                }
                
                }
                catch(PDOExeption $e){
                    echo "Erro" . $e -> getMessage();
                }
            ?>
        </tbody> 
</table>        
</body>
 -->