<?php

$nome = $_GET['nome'];
$genero = $_GET['genero'];
$comentarios = $_GET['comentarios'];

	echo 'Bem-vindo(a), ' . $nome . "!<br>";
		if ($genero == 'masculino') {
				echo 'Gênero: Masculino' . "<br>";
		}else{
				echo 'Gênero: Feminino' . "<br>";
		}
	echo 'Seus comentários: "' . $comentarios . '"' . "<br>";
			
?>


