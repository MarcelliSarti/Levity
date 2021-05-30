<html>
	<head> 
		<title> TEAM 1 </title>
		<meta charset="utf-8">
    <link href="css.css" rel="stylesheet">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script type="text/javascript" >
        function bem() {
          alert('Parabéns! Caso precise de ajuda volte aqui!');
        }
      </script>

    </head>
      <body>

      <?php include 'header.php';?>

      <br> <br> <br> <br> <br>
        <center>
          <table width="50%" id="emocao">
            <tr> <td colspan="4"> <b> <center> Como você está se sentindo hoje </center> </b> </td> </tr>
            <tr>
                <td> <center> BEM </center> </td>
                <td> <center> MAIS OU MENOS </center> </td>
                <td> <center> MAL </center> </td>
                <td> <center> MUITO MAL <br> PRECISO DE AJUDA </center> </td>
            </tr>
            <tr>
                <td> <center> <img src="feliz.png" onclick="bem()" id="ver1"> </center> </td>
                <td> <center> <a href="opcoes.php"> <img src="maisoumenos.png"  id="ver1"> </a> </center> </td>
                <td> <center> <a href="opcoes.php"> <img src="triste.png" onclick="outros()" id="ver1"> </a> </center> </td>
                <td> <center> <a href="opcoes.php"> <img src="muitomal.png" width="135px" onclick="outros()" id="ver1"> </a> </center> </td>
            </tr>
          </table>
	       	
        </center>
			<br> <br> <br> <br> <br>       
      
    <?php include 'footer.php';?>

	</body>
</html>