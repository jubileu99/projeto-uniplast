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

  $sql_code ="update produtos set ds_produto='$ds_produto',ds_linha='$ds_linha',ds_cor='$ds_cor',ds_material='$ds_material',ds_aplic_produto='$ds_aplic_produto',ds_detalhes='$ds_detalhes',imagem='$novo_nome' where cd_produto=$cod_prod";

  $executa = mysql_query($sql_code);

  if (isset($executa)) {
    echo "<script> alert('Dados inseridos com sucesso :)'); </script>";
    echo "<script> window.location='consulta_prod.php'; </script>";
  }
  else{
    echo "<script> alert('Ocorreu um erro, consulte o suporte técnico :('); </script>";
    echo "<script> window.location='consulta_prod.php'; </script>";
  }
}
// fim do upload de fotos + gravação no banco de dados.
?>
