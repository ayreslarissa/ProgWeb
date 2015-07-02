<?php

$nome = $_GET['nome'];
$genero = $_GET['genero'];
$comentarios = $_GET['comentarios'];

	echo 'Bem-vindo(a), ' . $_GET['nome'] . "!<br>";
		if ($_GET['genero'] == 'masculino') {
				echo 'Gênero: Masculino' . "<br>";
		}else{
				echo 'Gênero: Feminino' . "<br>";
		}
	echo 'Seus comentários: "' . $_GET['comentarios'] . '"' . "<br>";
			
?>


