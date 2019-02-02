<?php
ob_start();

if (($_SESSION ['usuarioId'] == "") 
 || ($_SESSION ['usuarioNome']) == "" 
 || ($_SESSION ['usuarioLogin']) == "" 
 || ($_SESSION ['usuarioSenha']) == ""){
	//Destrua todas essas sess�es
	unset($_SESSION['usuarioId'],
			$_SESSION['usuarioNome'],
			$_SESSION['usuarioLogin'],
			$_SESSION['usuarioSenha']);
	
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	
	//Manda o usuário para a tela de login
	
	header("Location:http://localhost/www.socialbus.com.br");
}	
	
?>