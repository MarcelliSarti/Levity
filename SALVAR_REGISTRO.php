<?php include 'header.php';

	include_once('conexao/conexao.php');

	$SQL = "select * from TAB_CONEXAO where FLG_CONEC <> 'N' ";
	$QUERY = mysqli_query($connection, $SQL);
	$registro = mysqli_num_rows($QUERY);

	if ($registro <> 1){
		echo "Conecte-se para cadastrar registros";
	}
	else {
	$COD_FUNCINARIO = $QUERY->fetch_object()->COD_FUNCINARIO;
	$DATA_REGISTRO = $_POST['DATA_REGISTRO'];
	$QUESTAO1 = $_POST['1'];
	$QUESTAO2 = $_POST['2'];
	$QUESTAO3 = $_POST['3']; 
	$QUESTAO4 = $_POST['4'];
	$QUESTAO5 = $_POST['5'];
	$QUESTAO6 = $_POST['6'];
	$QUESTAO7 = $_POST['7']; 
	$QUESTAO8 = $_POST['8'];
	$QUESTAO9 = $_POST['9'];
	$QUESTAO10 = $_POST['10'];
	$QUESTAO11 = $_POST['11']; 
	$QUESTAO12 = $_POST['12'];
	$QUESTAO13 = $_POST['13'];
	$QUESTAO14 = $_POST['14'];
	$QUESTAO15 = $_POST['15']; 
	$QUESTAO16 = $_POST['16'];
	$QUESTAO17 = $_POST['17'];
	$QUESTAO18 = $_POST['18'];
	$QUESTAO19 = $_POST['19']; 
	$QUESTAO20 = $_POST['20'];
	$FLG_PUBLICO = $_POST['FLG_PUBLICO'];
  
	$RESULTADO = $QUESTAO1 + $QUESTAO2 + $QUESTAO3 + $QUESTAO4 + $QUESTAO5 + $QUESTAO6 + $QUESTAO7 + $QUESTAO8 + $QUESTAO9 + $QUESTAO10 + $QUESTAO11 + $QUESTAO12 + $QUESTAO13 + $QUESTAO14 + $QUESTAO15 + $QUESTAO16 + $QUESTAO17 + $QUESTAO18 + $QUESTAO19+ $QUESTAO20;
	

	$SQL = "INSERT INTO tab_burnout(
		COD_FUNCIONARIO, 
		DATA_REGISTRO, 
		QUESTAO_1, 
		QUESTAO_2, 
		QUESTAO_3, 
		QUESTAO_4, 
		QUESTAO_5, 
		QUESTAO_6, 
		QUESTAO_7, 
		QUESTAO_8, 
		QUESTAO_9, 
		QUESTAO_10, 
		QUESTAO_11, 
		QUESTAO_12, 
		QUESTAO_13, 
		QUESTAO_14, 
		QUESTAO_15, 
		QUESTAO_16, 
		QUESTAO_17, 
		QUESTAO_18, 
		QUESTAO_19, 
		QUESTAO_20,
		RESULTADO,
		FLG_PUBLICO)
		values(
		'$COD_FUNCINARIO',
		'$DATA_REGISTRO',
		'$QUESTAO1',
		'$QUESTAO2',
		'$QUESTAO3', 
		'$QUESTAO4',
		'$QUESTAO5',
		'$QUESTAO6',
		'$QUESTAO7', 
		'$QUESTAO8',
		'$QUESTAO9',
		'$QUESTAO10',
		'$QUESTAO11', 
		'$QUESTAO12',
		'$QUESTAO13',
		'$QUESTAO14',
		'$QUESTAO15', 
		'$QUESTAO16',
		'$QUESTAO17',
		'$QUESTAO18',
		'$QUESTAO19', 
		'$QUESTAO20',
		'$RESULTADO',
		'$FLG_PUBLICO')";

	$QUERY = mysqli_query($connection, $SQL);

	$registro = mysqli_affected_rows($connection);
		if($registro!=1){
		echo "Erro ao inserir. <BR>. "; }
		///echo (mysqli_error($connection)); }
		else {
		echo "<h2> <font color = #1AC8ED> <b> <img src = 'logo2.png'> </b>  <br> <br>";

		if ($RESULTADO <= 20) {
			echo "Nenhum indício da Burnout. <BR> <BR>
			<img src='feliz.png'>";
		} elseif (($RESULTADO > 20) and ($RESULTADO <= 40)) {
			echo "Possibilidade de desenvolver Burnout, procure trabalhar as recomendações de prevenção da Síndrome. <BR> <BR>
			<img src='maisoumenos.png' <BR> ";
		} elseif (($RESULTADO > 41) and ($RESULTADO <= 60)) {
			echo "Fase inicial da Burnout, procure ajuda profissional para debelar os sintomas e garantir, assim,a qualidade no seu desempenho profissional e a sua qualidade de vida. <BR> <BR>
			<img src='triste.png'> <BR>";
		} elseif (($RESULTADO > 61) and ($RESULTADO <= 80)) {
			echo "A Burnout começa a se instalar. Procure ajuda profissional para prevenir o agravamento dos sintomas. <BR> <BR>
			<img src='triste.png'> <BR>";
		} elseif (($RESULTADO > 81) and ($RESULTADO <= 100)) {
			echo "Você pode estar em uma fase considerável da Burnout, mas esse quadro é perfeitamente reversível. Procure o profissional competente de sua confiança e inicie o quanto antes o tratamento. <BR> <BR>
			<img src='MUITOMAL.png'> <BR>";
		}

		echo"</h2> <BR>";
	} 


		mysqli_close($connection); }
		
	?>

	<?php include 'footer.php'; ?>

</body>
</html>