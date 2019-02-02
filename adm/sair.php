<?php
session_start();
session_destroy();

//Remover todas as Informa��es contidas nas Variais Globais
unset($_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioLogin'],
		$_SESSION['usuarioSenha']);

//Redirecionar para pagina de Login

header("Location:http://localhost/www.socialbus.com.br");
?>