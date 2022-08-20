<?php

//$x = time();
//echo $x;

//echo time();

date_default_timezone_set('America/Sao_Paulo');

echo date('d/m/Y',time()) . "<br />"; //ordem para o usuário
echo date('d/m/Y H:i:s',time()) . "<br />"; //data e hora
echo date('d',time()) . "<br />"; //mostrar somente o dia
echo date('m',time()) . "<br />"; //mostrar somente o mês
echo date('Y',time()) . "<br />"; //mostrar somente o ano
echo date('H:i:s',time()) . "<br />"; //mostrar somente o hora 
echo date('Y/m/d',time()) . "<br />";  //essa é a ordem para usar no SQL

echo date('w') . "<br />"; //dia da semana onde domingo é 0 e 6 é sábado

$diaSemana = date('w');
echo $diaSemana;

?>