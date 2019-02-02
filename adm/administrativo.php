<?php
	session_start ();
	include_once ("seguranca.php");
	include_once ("conexao.php");
	
	$result = mysqli_query ( $conectar, "SELECT l.*, u.nome nm_usuario
										 FROM log_usuarios l, usuarios u
										 WHERE l.usuario_id = u.id " );
?>
<!DOCTYPE html>
<html lang="pt-br">
	<?php include_once 'componentes/header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include_once 'componentes/menu.php';?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Log de Controle de Acesso</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Dado de Acesso de Usuário ao sistema</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>id</th>
										<th>Nome</th>
										<th>Data Acesso</th>
										<th>IP de Acesso</th>
									</tr>
								</thead>
								<?php 
											while ( $linhas = mysqli_fetch_array ( $result ) ) {
									 ?>
								<tbody>
									<tr class="odd gradeX">
										<td><?php echo $linhas['id'];?></td>
										<td><?php echo $linhas['nm_usuario'];?></td>
										<td><?php
											setlocale ( LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese" );
											date_default_timezone_set ( 'America/Sao_Paulo' );
											$date = $linhas['dt_acesso'];
											echo utf8_encode(strftime ( "%A, %d de %B de %Y as %r", strtotime ( $date )));
											?></td>
										<td class="center"><?php echo $linhas['ip_acesso'];?></td>
									</tr>
								</tbody>
								<?php }?>
							</table>
							<!-- /.table-responsive -->
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>

	</div>
	<!-- /#wrapper -->
  <?php include_once 'componentes/footer.php';?>
</body>

</html>