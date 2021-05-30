<?php include 'header.php';

	include_once('conexao.php');

	$RAZAO_SOCIAL = $_POST['RAZAO_SOCIAL']; 
	$CNPJ = $_POST['CNPJ'];
	$AREA = $_POST['AREA'];

	$SQL = "INSERT INTO TAB_EMPRESA(
		RAZAO_SOCIAL, 
		CNPJ, 
		AREA)
		values(
		'$RAZAO_SOCIAL',
		'$CNPJ',
		'$AREA')";

	$QUERY = mysqli_query($connection, $SQL);

	$registro = mysqli_affected_rows($connection);
		if($registro!=1){
		echo "Erro ao inserir."; }
		else {
		echo "<br> <br> <br> <br> <br> <b> <h2> <font color = #1AC8ED> Agradecemos o seu cadastro! <b/> <br>  <b> <img src = 'logo2.png'> </b> </h2> <A HREF='PRINCIPAL.PHP'> CLIQUE AQUI PARA VOLTAR Á PÁGINA INICIAL </A> <br> <br> <br> <br>";} 
		//header('location:index.php');}

		mysqli_close($connection); 
		
	?>

	<?php include 'footer.php'; ?>

</body>
</html>