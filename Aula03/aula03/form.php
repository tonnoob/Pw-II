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
   <label for="nome">Nome: </label>
   <input type="text" id="nome" name="txNome">
</div>

<div>
  <label for="email">Email: </label>
  <input type="text" id="email" name="txEmail">
</div>

  <div>
   <label for="assunto">Assunto: </label>
   <input type="text" id="assunto" name="txAssunto">
  </div>

  <div>
   <label for="mensagem">Mensagem: </label>
   <input type="text" id="mensagem" name="txMensagem">
  </div>

  <div>
  <input type="submit" value="Enviar">
  </div>

</form>
    
</body>
</html>



