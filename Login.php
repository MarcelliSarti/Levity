<?php
include_once ('conexao/conexao.php');

$EMAIL = $_POST['USUARIO'];
$SENHA = $_POST['SENHA'];
$SQL = "select * from TAB_FUNCIONARIO where EMAIL = '$EMAIL' and SENHA = '$SENHA' ";

$QUERY = mysqli_query($connection, $SQL);

$registro = mysqli_num_rows($QUERY);
if ($registro == 1){
	$NOME = $QUERY->fetch_object()->NOME;
	$COD_FUNC = $QUERY->fetch_object()->COD_FUNCINARIO;
	$SQL = "UPDATE TAB_CONEXAO set  USUARIO = '$EMAIL', NOME = '$NOME', FLG_CONEC = 'S', COD_FUNCINARIO = '$COD_FUNC' where CODIGO = 1 ";
	$QUERY = mysqli_query($connection, $SQL);
	header('location:principal.php');
}
else{ 
	echo "Erro <br>";
	echo (mysqli_error($connection));
}

mysqli_close($connection); 
?>