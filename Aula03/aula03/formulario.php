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

<h2>Cadastro de Alunos</h2>

<form action="armazenarDados.php" method="post">
    <div>
        <input type="text" placeholder="Nome:" name="txNome" />
    </div>

    <div>
        <input type="text" placeholder="E-mail:" name="txEmail" />
    </div>

    <div>
        <input type="text" placeholder="Assunto:" name="txAssunto" />
    </div>

    <div>
        <input type="text" placeholder="Mensagem:" name="txMensagem" />
    </div>

    <div>
        <input type="submit" value="Enviar" />
    </div>
</form>
   
</body>
</html>