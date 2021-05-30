<?php include 'header.php';

	include_once('conexao/conexao.php');

	$NOME_FUNC = $_POST['NOME_FUNC']; 
	$CPF = $_POST['CPF'];
	$CELULAR = $_POST['CELULAR'];
	$EMAIL_FUNC = $_POST['EMAIL_FUNC'];
	$SENHA_FUNC1 = $_POST['SENHA_FUNC1']; 
	$COD_EMPRESA = $_POST['EMPRESA'];

	$SQL = "INSERT INTO TAB_FUNCIONARIO(
		NOME, 
		EMAIL, 
		SENHA, 
		CPF, 
		CELULAR, 
		COD_EMPRESA)
		values(
		'$NOME_FUNC',
		'$EMAIL_FUNC',
		'$SENHA_FUNC1',
		'$CPF',
		'$CELULAR', 
		'$COD_EMPRESA')";

	$QUERY = mysqli_query($connection, $SQL);

	$registro = mysqli_affected_rows($connection);
		if($registro!=1){
		echo "Erro ao inserir."; }
		else {
		echo "<br> <br> <br> <br> <br> <b> <h2> <font color = #1AC8ED> Agradecemos o seu cadastro! <b/> <br>  <b> <img src = 'logo/logo2.png'> </b> </h2> <A HREF='PRINCIPAL.PHP'> CLIQUE AQUI PARA VOLTAR Á PÁGINA INICIAL </A> <br> <br> <br> <br>";} 
		//header('location:index.php');}

		mysqli_close($connection); 
		
	?>

	<?php include 'footer.php'; ?>

</body>
</html>