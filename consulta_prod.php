<?php
	session_start();
	if (!isset($_SESSION['user']) && !isset($_SESSION['pw'])) {
		echo "<script>location.href='login.php';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta produtos.</title>
		<!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <!-- Fonts by googleApi's -->
        <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 		<script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<meta charset="UTF-8">
</head>
	<script>

	function apagar(id) {
            if (window.confirm("Confirma a exclusão ?")) {
                window.location = 'excluir_prod.php?id=' + id;
            }
        }
  </script>

	<?php
		include 'navbar.html';
		include 'conexao.php';
		$sql = mysql_query("select * from produtos");
	?>

<body>
	<div class="container" style="margin-top: 100px;margin-left: 25px;">
	  	<h2 style="font-family: Rubik mono one; font-size: 25px;">Consulta aos produtos</h2>
	  	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Código</th>
	        <th>Nome</th>
	        <th>Linha</th>
	        <th>Cor</th>
	        <th>Material</th>
	        <th>Aplicação</th>
	        <th>Detalhes</th>
	        <th>Imagem</th>
	        <th>Alterar</th>
	        <th>Excluir</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			while ($consulta = mysql_fetch_array($sql)) {
				$cd_produto       = $consulta["cd_produto"];
				$ds_produto       = $consulta["ds_produto"];
				$ds_linha         = $consulta["ds_linha"];
				$ds_cor           = $consulta["ds_cor"];
				$ds_material      = $consulta["ds_material"];
				$ds_aplic_produto = $consulta["ds_aplic_produto"];
				$ds_detalhes      = $consulta["ds_detalhes"];
				$ds_imagem        = $consulta["imagem"];
	    ?>
	    	<tr>
	    		<td><?php echo $cd_produto ?></td>
	    		<td><?php echo $ds_produto ?></td>
	    		<td><?php echo $ds_linha  ?></td>
	    		<td><?php echo $ds_cor ?></td>
	    		<td><?php echo $ds_material ?></td>
	    		<td><?php echo $ds_aplic_produto ?></td>
	    		<td><button class="btn btn" data-toggle="modal" data-target="#modal_detalhes<?php echo $cd_produto ?>">+Detalhes</button></td>
	    		<td><button class="btn btn" data-toggle="modal" data-target="#modal_fotos<?php echo $cd_produto ?>">+Imagem</button></td>
	    		<td align="center"><button class="btn btn-primary" onclick="window.location='editar_prod.php?id=<?php echo $cd_produto ?>';">Alterar</button></td>
	    		<td align="center"><button class="btn btn-danger" onclick="apagar('<?php echo $consulta["cd_produto"];?>');" href="#">Excluir</button></td>
			</tr>
			<!-- Inicio do modal detalhes  -->
				<div class="modal fade" id="modal_detalhes<?php echo $cd_produto ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel"><?php echo $cd_produto ?></h4>
								</div>
								<div class="modal-body">
									<p><span>Detalhes:</span><br><br><?php echo $ds_detalhes ?></p>
								</div>
						</div>
					</div>
				</div>
				<!-- Fim do modal detalhes -->
				<!-- Inicio do modal das fotos -->
				<div class="modal fade" id="modal_fotos<?php echo $cd_produto ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel"><?php echo $cd_produto ?></h4>
								</div>
								<div class="modal-body">
									<img src="fotos/<?php echo $ds_imagem ?>" width="550px;" height="300px;">
								</div>
						</div>
					</div>
				</div>
				<!-- Fim do modal das fotos -->
		<?php
			}
		?>
	    </tbody>
	  </table>
	</div>
</body>
</html>
