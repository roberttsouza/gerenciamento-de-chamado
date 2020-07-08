<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastros";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao) {
	print"falha na conexão com o banco de dados";
}


?>
