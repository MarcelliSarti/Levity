<html>
<head>
	<title> </title>
</head>
<body>
	<?php
	include_once ('conexao/conexao.php');
	
	$SQL = "UPDATE TAB_CONEXAO set  USUARIO = '', NOME = '', FLG_CONEC = 'N' where CODIGO = 1 ";

	$QUERY = mysqli_query($connection, $SQL);

	header('location:principal.php');
	
	?>
</body>
</html>