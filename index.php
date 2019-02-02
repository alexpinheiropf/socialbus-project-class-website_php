<!DOCTYPE html>
<html lang="pf-br">
<head>
	<?php include_once 'componentes/header.php';?>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="adm/valida_login.php">
					<span class="login100-form-title p-b-43">
						<img src="images/logo.png">
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Insira seu usuário por favor!!!">
						<input class="input100" type="text" name="login">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuário</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Insira sua Senha">
						<input class="input100" type="password" name="senha">
						<span class="focus-input100"></span>
						<span class="label-input100">Senha</span>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

				</form>
			
				<div class="capa">
					<img src="images/capa1.png">
				</div>
		</div>
		</div>
	</div>
	<?php include_once 'componentes/footer.php';?>

</body>
</html>