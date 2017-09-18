<?php
 	include 'conexao.php';

 	$cod_prod = $_GET["id"];

 	$query = mysql_query("delete from produtos where cd_produto=$cod_prod");

 	if(mysql_affected_rows() >= 0){
            echo "<script>alert('Registro apagado com sucesso');</script>";
            echo "<script>window.location='consulta_prod.php'</script>";
    }
		else{
			echo "Ocorreu um erro " . mysql_error();
	}
?>