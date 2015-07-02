<?php 

	$login = $_GET['login'];
	$senha = $_GET['senha'];
		if ($login == "demo" && $senha == "demo") {
				header('Location: form_get.html');
		}else{
				echo 'Não entrou!' . "<br>";
		}
?>