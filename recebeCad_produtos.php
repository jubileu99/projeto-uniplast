<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	include 'conexao.php';
 	// declaração de variaveis
	$cod_prod = $_POST["cod_prod"];
	$ds_produto = $_POST["ds_produto"];
	$ds_linha = $_POST["ds_linha"];
	$ds_cor = $_POST["ds_cor"];
	$ds_material = $_POST["ds_material"];
	$ds_aplic_produto = $_POST["ds_aplic_produto"];
	$ds_detalhes = $_POST["ds_detalhes"];

	// upload das fotos

	$arquivo = $_FILES['img']['name'];

	if(isset($_FILES['img'])){
		$extensao = strtolower(substr($_FILES['img']['name'],-4));
		$novo_nome = md5(time()).$extensao;
		$diretorio = "fotos/";

		move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);

		$sql_code ="insert into produtos values('$cod_prod','$ds_produto','$ds_linha','$ds_cor','$ds_material','$ds_aplic_produto','$ds_detalhes','$novo_nome')";

		$executa = mysql_query($sql_code);

		if (isset($executa)) {
			echo "<script> alert('Dados inseridos com sucesso :)'); </script>";
			echo "<script> window.location='cad_produtos.php'; </script>";
		}
		else{
			echo "<script> alert('Ocorreu um erro, consulte o suporte técnico :('); </script>";
			echo "<script> window.location='cad_produtos.php'; </script>";
		}
	}
	// fim do upload de fotos + gravação no banco de dados.
	?>

</body>
</html>
