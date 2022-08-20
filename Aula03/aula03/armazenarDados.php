<?php

echo "Dados do formulário";

$nome = $_POST ['txNome'];
$email = $_POST ['txEmail'];
$assunto = $_POST ['txAssunto'];
$mensagem = $_POST ['txMensagem'];

echo "<br /><br />Nome: " .$nome . "<br />E-mail: " .$email . "<br />Assunto: " .$assunto . "<br />Mensagem: " .$mensagem;

?>