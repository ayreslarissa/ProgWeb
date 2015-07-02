<?php

	$nome = $_GET['nome'];
	$genero = $_GET['genero'];
	$comentarios =  $_GET['comentarios'];

	$conexao = mysql_connect("localhost", "root","","");
	$banco = mysql_select_db("progweb", $conexao);


	
if (!$conexao) {
	die("<p>O servidor do banco está indisponível</p>"
	. "<p>Codigo de Erro " . mysqli_connect_errno(). ": " . mysqli_connect_error()) . "</p>";
}else{
	echo "Servidor Disponível";
}

if (!$banco) {
	die("<p>Banco de Dados não disponível.</p>"
		. "<p>Error code " . mysql_errno($conexao). ": " . mysql_error($conexao)) . "</p>";
}else{
	echo "<p>Banco de dados aberto com sucesso.</p>";	
}

	$sql = "INSERT INTO dados (nome,sexo,comentarios) VALUES('$nome','$genero','$comentarios')";
	if(mysql_query ($sql,$conexao)){
		echo "Dados salvos no banco!";
	}
	else{
		echo "Dados não foram salvos no banco!";
	}
			
?>


