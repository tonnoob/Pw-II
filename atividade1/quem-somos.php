<?php include ("estrutura/cabecalho.php");?>

    <Section>
        <h1> Quem somos </h1>

    </section>

        <?php
        $nome = "<h2>Otton Sousa de Santana</h2>";
            echo "$nome";
        $idade = 18;
            echo "<h2>Idade - $idade Anos </h2>";
        $email = "<h2>ottonsouzanto@gmail.com</h2>";
            echo "$email";

        if ($idade >= 18) {
            echo "O aluno é maior de idade";
        }
        else {
            echo "O aluno é menor de idade";
        }

    ?>

    <br>
<?php include ("estrutura/rodape.php");?>