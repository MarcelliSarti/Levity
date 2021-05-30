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
    </head>
      <body>

      <?php include 'header.php';?>
      <center>
      <table width="50%" >
      <form action="salvar_registro.PHP" method="POST">
        <tr>  <td> <b> PARÂMETROS </b> </td> </tr>
        <tr>  <td> <b> 1: </b> NUNCA </td> </tr>
        <tr>  <td> <b> 2: </b> 1X NA SEMANA </td> </tr>
        <tr>  <td> <b> 3: </b> 3X NA SEMANA </td> </tr>
        <tr>  <td> <b> 4: </b> 5X NA SEMANA </td> </tr>
        <tr>  <td> <b> 5: </b> DIARIAMENTE </td> </tr>
      </table> <br>
      <table width="50%">
        <tr>  <td>
            <div>
                <label> <b>Data do registros:</b> </label> </td>
                <td> <input type="date" name="DATA_REGISTRO" class="form-control" width="100px" required>
            </div>
        </td> </tr> 
      </table> <br>
      <table width="50%" >
         <tr>
          <td width="5%"> <img src="circulo.png" width="20px"> </td>
          <td width="74%"> <b> Características psicofísicas em relação ao trabalho </b> </td>
          <td width="5%"> <b> 1 </b> </td>
          <td width="5%"> <b> 2 </b> </td>
          <td width="5%"> <b> 3 </b> </td>
          <td width="5%"> <b> 4 </b> </td>
          <td width="5%"> <b> 5 </b> </td>
        </tr>  
        <tr>
          <td> <img src="circulo.png" width="20px"></td> 
          <td> Sinto-me esgotado(a) emocionalmente em relação ao meu trabalho </td>
          <td> <input type="radio" name="1" value="1" required> </td>
          <td> <input type="radio" name="1" value="2" required> </td>
          <td> <input type="radio" name="1" value="3" required> </td>
          <td> <input type="radio" name="1" value="4" required> </td>
          <td> <input type="radio" name="1" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto-me excessivamente exausto ao final da minha jornada de trabalho </td>
          <td> <input type="radio" name="2" value="1" required> </td>
          <td> <input type="radio" name="2" value="2" required> </td>
          <td> <input type="radio" name="2" value="3" required> </td>
          <td> <input type="radio" name="2" value="4" required> </td>
          <td> <input type="radio" name="2" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Levanto-me cansado(a) e sem disposição para realizar o meu trabalho </td>
          <td> <input type="radio" name="3" value="1" required> </td>
          <td> <input type="radio" name="3" value="2" required> </td>
          <td> <input type="radio" name="3" value="3" required> </td>
          <td> <input type="radio" name="3" value="4" required> </td>
          <td> <input type="radio" name="3" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Envolvo-me com facilidade nos problemas dos outros </td>
          <td> <input type="radio" name="4" value="1" required> </td>
          <td> <input type="radio" name="4" value="2" required> </td>
          <td> <input type="radio" name="4" value="3" required> </td>
          <td> <input type="radio" name="4" value="4" required> </td>
          <td> <input type="radio" name="4" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto-me esgotado(a) emocionalmente em relação ao meu trabalho </td>
          <td> <input type="radio" name="5" value="1" required> </td>
          <td> <input type="radio" name="5" value="2" required> </td>
          <td> <input type="radio" name="5" value="3" required> </td>
          <td> <input type="radio" name="5" value="4" required> </td>
          <td> <input type="radio" name="5" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Tenho que desprender grande esforço para realizar minhas tarefas laborais </td>
          <td> <input type="radio" name="6" value="1" required> </td>
          <td> <input type="radio" name="6" value="2" required> </td>
          <td> <input type="radio" name="6" value="3" required> </td>
          <td> <input type="radio" name="6" value="4" required> </td>
          <td> <input type="radio" name="6" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Acredito que eu poderia fazer mais pelas pessoas assistidas por mim</td>
          <td> <input type="radio" name="7" value="1" required> </td>
          <td> <input type="radio" name="7" value="2" required> </td>
          <td> <input type="radio" name="7" value="3" required> </td>
          <td> <input type="radio" name="7" value="4" required> </td>
          <td> <input type="radio" name="7" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto que meu salário é desproporcional às funções que executo </td>
          <td> <input type="radio" name="8" value="1" required> </td>
          <td> <input type="radio" name="8" value="2" required> </td>
          <td> <input type="radio" name="8" value="3" required> </td>
          <td> <input type="radio" name="8" value="4" required> </td>
          <td> <input type="radio" name="8" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto que sou uma referência para as pessoas que lido diariamente </td>
          <td> <input type="radio" name="9" value="1" required> </td>
          <td> <input type="radio" name="9" value="2" required> </td>
          <td> <input type="radio" name="9" value="3" required> </td>
          <td> <input type="radio" name="9" value="4" required> </td>
          <td> <input type="radio" name="9" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto-me com pouca vitalidade, desanimado(a) </td>
          <td> <input type="radio" name="10" value="1" required> </td>
          <td> <input type="radio" name="10" value="2" required> </td>
          <td> <input type="radio" name="10" value="3" required> </td>
          <td> <input type="radio" name="10" value="4" required> </td>
          <td> <input type="radio" name="10" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Não me sinto realizado(a) com o meu trabalho </td>
          <td> <input type="radio" name="11" value="1" required> </td>
          <td> <input type="radio" name="11" value="2" required> </td>
          <td> <input type="radio" name="11" value="3" required> </td>
          <td> <input type="radio" name="11" value="4" required> </td>
          <td> <input type="radio" name="11" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Não sinto mais tanto amor pelo meu trabalho como antes </td>
          <td> <input type="radio" name="12" value="1" required> </td>
          <td> <input type="radio" name="12" value="2" required> </td>
          <td> <input type="radio" name="12" value="3" required> </td>
          <td> <input type="radio" name="12" value="4" required> </td>
          <td> <input type="radio" name="12" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Não acredito mais naquilo que realizo profissionalmente </td>
          <td> <input type="radio" name="13" value="1" required> </td>
          <td> <input type="radio" name="13" value="2" required> </td>
          <td> <input type="radio" name="13" value="3" required> </td>
          <td> <input type="radio" name="13" value="4" required> </td>
          <td> <input type="radio" name="13" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto-me sem forças para conseguir algum resultado significante </td>
          <td> <input type="radio" name="14" value="1" required> </td>
          <td> <input type="radio" name="14" value="2" required> </td>
          <td> <input type="radio" name="14" value="3" required> </td>
          <td> <input type="radio" name="14" value="4" required> </td>
          <td> <input type="radio" name="14" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto que estou no emprego apenas por causa do salário </td>
          <td> <input type="radio" name="15" value="1" required> </td>
          <td> <input type="radio" name="15" value="2" required> </td>
          <td> <input type="radio" name="15" value="3" required> </td>
          <td> <input type="radio" name="15" value="4" required> </td>
          <td> <input type="radio" name="15" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Tenho me sentido mais estressado(a) com as pessoas que atendo </td>
          <td> <input type="radio" name="16" value="1" required> </td>
          <td> <input type="radio" name="16" value="2" required> </td>
          <td> <input type="radio" name="16" value="3" required> </td>
          <td> <input type="radio" name="16" value="4" required> </td>
          <td> <input type="radio" name="16" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td>Sinto-me responsável pelos problemas das pessoas que atendo </td>
          <td> <input type="radio" name="17" value="1" required> </td>
          <td> <input type="radio" name="17" value="2" required> </td>
          <td> <input type="radio" name="17" value="3" required> </td>
          <td> <input type="radio" name="17" value="4" required> </td>
          <td> <input type="radio" name="17" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td>Sinto que as pessoas me culpam pelos seus problemas </td>
          <td> <input type="radio" name="18" value="1" required> </td>
          <td> <input type="radio" name="18" value="2" required> </td>
          <td> <input type="radio" name="18" value="3" required> </td>
          <td> <input type="radio" name="18" value="4" required> </td>
          <td> <input type="radio" name="18" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Penso que não importa o que eu faça, nada vai mudar no meu trabalho </td>
          <td> <input type="radio" name="19" value="1" required> </td>
          <td> <input type="radio" name="19" value="2" required> </td>
          <td> <input type="radio" name="19" value="3" required> </td>
          <td> <input type="radio" name="19" value="4" required> </td>
          <td> <input type="radio" name="19" value="5" required> </td>
        </tr>
        <tr>
          <td> <img src="circulo.png" width="20px"></td>
          <td> Sinto que não acredito mais na profissão que exerço </td>
          <td> <input type="radio" name="20" value="1" required> </td>
          <td> <input type="radio" name="20" value="2" required> </td>
          <td> <input type="radio" name="20" value="3" required> </td>
          <td> <input type="radio" name="20" value="4" required> </td>
          <td> <input type="radio" name="20" value="5" required> </td>
        </tr>
      </table> <BR>
      <TABLE width="50%">
        <TR >
          <td colspan="1"> <img src="circulo.png" width="20px"></td>
          <td colspan="2" width="74%"> Deseja compartilhar suas informações com a comunidade? </td>
          <td colspan="2"> <input type="radio" name="FLG_PUBLICO" value="S" required>SIM </td>
          <td colspan="2"> <input type="radio" name="FLG_PUBLICO" value="N" required>NÃO </td>
        </TR>
        <tr>
          <td colspan="5"> </td>
          <td colspan="2"> <input type="submit" name="salvar" value="Salvar" id="Pesq"> </td>
        </tr>
      </table>
      
      </form>    
      </center>   <br> <br>
    <?php include 'footer.php';?>

	</body>
</html>