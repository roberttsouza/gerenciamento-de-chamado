<?php

include_once ("conexao.php");


$palavra_chave = $_POST['palavra_chave'];
$protocolo = $_POST['protocolo'];
$titulo_1 = $_POST['titulo_1'];
$conteudo = $_POST['conteudo'];


$sql = "insert into chamados (palavra_chave, protocolo, titulo_1, conteudo) values ('$palavra_chave', '$protocolo', '$titulo_1', '$conteudo')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);



mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrado</title>
</head>
<body>

<div class="voltarC">
		<?php

		if ($linhas == 1) {

			print"Cadastro efetuado com sucesso!";
		}else{
			print "Cadastro NÃO efetuado. <br>Já existe um registro com esse protocolo!";
		}

	?>
	<br>
	<a href="index.html">Voltar</a>
	
</div>

</body>
</html>