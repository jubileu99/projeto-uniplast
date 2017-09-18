<?php
	include_once 'conexao.php';
	session_start();

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	$_SESSION['user'] = $usuario;
	$_SESSION['pw'] = $senha;

	$sql = "select * from usuario where username='$usuario' and password='$senha'";
	$query = mysql_query($sql);

	if (mysql_num_rows($query) >= 1 ) {
		echo "<script>alert('Logado com sucesso!');";
		echo ("location.href='consulta_prod.php'</script>");
	}
    else{
		echo "<script>alert('Erro ao logar, tente novamente.');";
		echo ("location.href='login.php'</script>");
    }

?>
