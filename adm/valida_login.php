<?php 
session_start ();
$usuariot = $_POST ['login'];
$senhat   = $_POST ['senha'];
include_once ("conexao.php");

$s_crip = base64_encode($senhat);

$result = mysqli_query ( $conectar, "SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1" );

$resultado = mysqli_fetch_assoc ( $result );
echo "Usuario: " . $resultado ['nome'];
if (empty ( $resultado )) {
	// Mensagem de Erro
	$_SESSION ['loginErro'] = "Usuário ou senha Inválido";
	
	// Manda o usuario para a tela de login
	header ( "Location:http://localhost/www.socialbus.com.br" );
}else{
	// Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] 			= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['nome'];
	$_SESSION['usuarioLogin'] 		= $resultado['login'];
	$_SESSION['usuarioSenha'] 		= $resultado['senha'];
	
	$id_pego   = $resultado['id'];
	$ip_acesso = $_SERVER['REMOTE_ADDR'];
	
	if($id_pego != null){
		$query = mysqli_query ($conectar, "INSERT INTO log_usuarios (
								dt_acesso, 			
								usuario_id,
								ip_acesso) VALUES(
								 NOW(),
								'$id_pego',
								'$ip_acesso')" );
		
		header("Location:administrativo.php");
	}else{
		header("Location:index.php");
	}
	
	
	
	
}
?>