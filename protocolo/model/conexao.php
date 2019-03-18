<?php 
$conexao = mysql_connect('localhost', 'admin', '') or print (mysql_error());
mysql_select_db("protocolo", $conexao) or print(mysql_error());  
?>