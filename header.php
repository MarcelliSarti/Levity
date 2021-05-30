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
        function cadastroChange() {
          var VScliente = document.getElementById('Scliente');
          var VSempresa = document.getElementById('Sempresa');
          var Vselecionar = document.getElementById('selecionar');

          var VTabelaCadastroCliente = document.getElementById('TabelaCadastroCliente');
          var VTabelaCadastroEmpresa = document.getElementById('TabelaCadastroEmpresa');

          if (Vselecionar.value == "C") {
            VTabelaCadastroCliente.style.display = "block";
            VTabelaCadastroEmpresa.style.display = "none";
          } else if (Vselecionar.value == "E") {
            VTabelaCadastroCliente.style.display = "none";
            VTabelaCadastroEmpresa.style.display = "block";
          }
        }

        function confirmarSenha(){
                var senha1=document.getElementById('senha2');
                var senha2=document.getElementById('senha3');
            
                if (senha1.value != senha2.value) {
                  alert("As senhas não correspondem!");
                }
                else {
                     
                } 
            }

    		function clique(){
                var modalJ=document.getElementById('LoginModal');
                var modalT=document.getElementById('imgModal');
                var modalB=document.getElementById('btFechar');

                var modalJC=document.getElementById('CadastroModal');
                var modalBC=document.getElementById('btnCadastro');
                var modalBFC=document.getElementById('btFecharC');

                modalJ.style.display="block";

                modalB.onclick=function(){
                    modalJ.style.display="none"; 
                }

                modalBC.onclick=function(){
                    modalJ.style.display="none";
                    modalJC.style.display="block";

                }

                modalBFC.onclick=function(){
                    modalJC.style.display="none"; 
                }
            }

            function cliqueSenha1(){
                var naoVer1=document.getElementById('naoVer1');
                var ver1=document.getElementById('ver1');

                let input = document.querySelector('#senha1');

                if ( $('#senha1').attr('type') == 'password' ){
                naoVer1.style.display="block";
                ver1.style.display="none";
                input.setAttribute('type', 'text'); 
                }
                else {
                naoVer1.style.display="none";
                ver1.style.display="block";
                input.setAttribute('type', 'password'); 
                }
            }

            function cliqueSenha2(){
                var naoVer2=document.getElementById('naoVer2');
                var ver2=document.getElementById('ver2');

                let input = document.querySelector('#senha2');

                if ( $('#senha2').attr('type') == 'password' ){
                naoVer2.style.display="block";
                ver2.style.display="none";
                input.setAttribute('type', 'text'); 
                }
                else {
                naoVer2.style.display="none";
                ver2.style.display="block";
                input.setAttribute('type', 'password'); 
                }
            }

             function cliqueSenha3(){
                var naoVer3=document.getElementById('naoVer3');
                var ver3=document.getElementById('ver3');

                let input = document.querySelector('#senha3');

                if ( $('#senha3').attr('type') == 'password' ){
                naoVer3.style.display="block";
                ver3.style.display="none";
                input.setAttribute('type', 'text'); 
                }
                else {
                naoVer3.style.display="none";
                ver3.style.display="block";
                input.setAttribute('type', 'password'); 
                } }
     	</script>
	</head>
	<body>
		<center>
		<table width="100%" id="cabec">
				<td width="10%">
					<img src = "logo/logo.png" width="75px">
				</td>
        <td width="10%">
          <h2> <b> <img src = "logo/logo2.png" width="230px"> </b> </h2>
        </td>
        <td>
          <a href="principal.php"> <img src="icone/home.png"> </a>
        </td>
        <td width="2%"></td>
				<td width="47%">
				<div class="input-group mb-3">
					<input type="text" size="60" placeholder="Busque aqui" class="form-control">  
  					<span class="input-group-text" id="Pesq"> <img src = "Icone/pesq.png"> </span>
  				</div>  
					<nav class = "menu">
						<ul>
              <li> <a href="registro.php"> Registrar </a>
                <!-- <ul>
                  <li> <a href=""> Aniversário </a> </li> 
                  <li> <a href=""> Chá de bebê </a> </li>
                  <li> <a href=""> Dia das mães </a> </li>
                  <li> <a href=""> Outros </a></li>
                </ul> -->
              </li>
							<li> <a href="opcoes.php"> Recomendados </a> </li>
						 <li> <a href=""> Relatório </a>
                <ul>
                  <li> <a href="relatorioMes.php"> Mensal </a> </li> 
                  <li> <a href=""> Anual </a> </li>
                </ul>
              </li> 
						</ul>
					</nav>
				</td>
				<td width="3%"></td>
				<td width="3%">
          <?php
          include_once ('conexao/conexao.php');
          $SQL = "select * from TAB_CONEXAO where FLG_CONEC <> 'N' ";

          $QUERY = mysqli_query($connection, $SQL);

          $registro = mysqli_num_rows($QUERY);
          if ($registro == 1){
            echo "<img src='Icone/login.png' id='ver'>"; }
          else {
            echo "<img src='Icone/login.png' onclick='clique()' id='ver'>"; }
          ?>
				</td>
				<td width="8%">
					<b> 
        <?php
          if ($registro == 1){
          $NOME = $QUERY->fetch_object()->NOME;
          $QUERY = mysqli_query($connection, $SQL);
          echo "<label id='ver1'> Olá, ".$NOME." <br> <a href='sair.php'> Sair </a> </label> ";
          }
          else {
          echo "<label onclick='clique()' id='ver'> Faça seu login <br> ou cadastre-se </label>";
          }
          ?>
					</b>	
				</td>
				<td width="3%">
						
				</td>
				<td width="3%">
					
				</td>
		</table>

			<div id="LoginModal" class="modal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content" id="info">
						<div class="modal-header">
        					<h3 class="modal-title"> <b> Login </b> </h3> 
        					<span id="btFechar"> X </span>
      			</div>
             
						    <table id = "TabelaLogin">
                <form action="LOGIN.PHP" method="POST">
      						<tr> <td> <b> E-mail </b> </td> </tr> 
      						<tr> <td> <input type="text" class="form-control" name="USUARIO"> </td> </tr> 
      						<tr> <td> <b> Senha </b> </td> </tr>
      						<tr> 
      							<td> 	
      								<div class="input-group mb-3">
										    <input type="password" id="senha1" class="form-control" name="SENHA">  
  										  <span class="input-group-text" id="Pesq"> 
  											 <img src="icone/ver.png"    width="25px" height="25px" onclick='cliqueSenha1()' id="ver1"> 
      									 <img src="icone/NaoVer.png" width="25px" height="25px" onclick='cliqueSenha1()' id="naoVer1"> 
  										  </span>
  									  </div>
      							</td>      								
      						</tr>
      						<tr> <td> <a href=""> <b> Não sei a minha senha </b> </a> </td> </tr>
                
      					</table>
      					<div class="modal-footer">
        					<!-- Toogle to second dialog -->
							<button class="btn btn-primary" id="btn" type="submit"> Entrar </button>
              </form>
              <button class="btn btn-primary" id="btnCadastro"> Cadastrar-se </button>

      					</div>
          
      				</div>
      			</div>
			</div>			

		
			<div id="CadastroModal" class="modal">
				<div class="modal-dialog modal-dialog-centered modal-medium">
    				<div class="modal-content" id="info">
    				<div class="modal-header">
        				<h3 class="modal-title"> <b> Cadastro </b> </h3> 
        				<span id="btFecharC"> X </span>
      				</div>
              <select onchange ="cadastroChange()" id='selecionar' class="form-control">
                <option id="Scliente" value="C"> Cliente </option>
                <option id="Sempresa" value="E"> Empresa </option>
              </select>

            <form id="TabelaCadastroCliente" action="SALVAR_FUNC.php" method="POST">
      				<table>
      					<tr> <td width="100%" colspan="4"> Nome Completo </td> </tr> 
      					<tr> <td width="100%" colspan="4"> 
      						<input type="text" class="form-control" size="101" placeholder="Ex: Maria Dos Santos" required name="NOME_FUNC">
      					</td> </tr>
      					<tr>
      						<td width="50%" colspan="2"> CPF </td>
      						<td width="50%" colspan="2"> Celular </td>
      					</tr>
      					<tr>
      						<td width="50%" colspan="2"> 
      							<input type="text" class="form-control" size="47" placeholder="Ex: 123.456.789-12" maxlength="14" required name="CPF"> 
      						</td>
      						<td width="50%" colspan="2">
      							<input type="text" class="form-control" size="47" placeholder="Ex: (12) 93456-7891" maxlength="14" required name="CELULAR">  
      						</td>
      					</tr>
      					<tr> <td width="100%"  colspan="4"> E-mail </td> </tr>    
      					<tr> <td width="100%"  colspan="4"> 
      					<input type="text" class="form-control" size="47" placeholder="Ex: team1@patronos.com" maxlength="255" required name="EMAIL_FUNC">  	 
      					</td> </tr>
      					<tr>
      						<td width="50%" colspan="2"> Senha </td>
      						<td width="50%" colspan="2"> Confirmar Senha </td>
      					</tr>
      					<tr>
      						<td colspan="2" width="50%">
      							<div class="input-group mb-3">
									<input type="password" id="senha2" class="form-control" required name="SENHA_FUNC1">  
  										<span class="input-group-text" id="Pesq"> 
  											<img src="icone/ver.png"    width="25px" height="25px" onclick='cliqueSenha2()' id="ver2"> 
      									<img src="icone/NaoVer.png" width="25px" height="25px" onclick='cliqueSenha2()' id="naoVer2"> 
  										</span>
  								</div>
  							</td>
      						<td colspan="2" width="50%">
      							<div class="input-group mb-3">
									<input type="password" id="senha3" class="form-control" required name="SENHA_FUNC2">  
  										<span class="input-group-text" id="Pesq"> 
  											<img src="icone/ver.png"    width="25px" height="25px" onclick='cliqueSenha3()' id="ver3"> 
      									<img src="icone/NaoVer.png" width="25px" height="25px" onclick='cliqueSenha3()' id="naoVer3"> 
  										</span>
  								</div>
  							</td>     
      					</tr>
                <tr> <td width="100%"  colspan="4"> Empresa </td> </tr>    
                <tr> <td width="100%"  colspan="4">                     
                  <SELECT NAME = "EMPRESA" class="form-control" required>
                    <?PHP 
                    include_once('conexao/conexao.php');

                    $query = mysqli_query($connection, "SELECT count(*) as EMPRESAS from TAB_EMPRESA");
                    $resultado = mysqli_fetch_assoc($query);

                    for ($i=1; $i<=$resultado['EMPRESAS']; $i++) {
                      $query2 = mysqli_query($connection, "SELECT COD_EMPRESA, RAZAO_SOCIAL from TAB_EMPRESA WHERE COD_EMPRESA = '$i'");
                      $resultado2 = mysqli_fetch_assoc($query2);

                      echo "<option value=".$resultado2['COD_EMPRESA']."> ".$resultado2['RAZAO_SOCIAL']."</option>";  
                    } ?>
                  </SELECT>     
                </td> </tr>
      				</table>
      					<div class="modal-footer">
        					<!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
        					<button class="btn btn-primary" id="btn" onclick="confirmarSenha()"  name="inserir"> Salvar </button>
      					</div>
            </form>

             <form id = "TabelaCadastroEmpresa" action="SALVAR_EMP.php" method="POST">
              <table>
                <tr> <td width="100%" colspan="4"> Razão Social </td> </tr> 
                <tr> <td width="100%" colspan="4"> 
                  <input type="text" class="form-control" size="101" placeholder="Ex: Team 1" required name="RAZAO_SOCIAL">
                </td> </tr>
                <tr>
                  <td width="50%" colspan="2"> CNPJ </td>
                  <td width="50%" colspan="2"> Área de atuação </td>
                </tr>
                <tr>
                  <td width="50%" colspan="2"> 
                    <input type="text" class="form-control" size="47" placeholder="Ex: 30.066.684/0001-95" maxlength="18" required name="CNPJ"> 
                  </td>
                  <td width="50%" colspan="2">
                    <SELECT class="form-control" name="AREA" required>
                      <option value="Saúde"> Saúde </option> 
                      <option value="Educação"> Educação </option> 
                    </SELECT>  
                  </td>
                </tr>
              </table>
              <div class="modal-footer">
                  <button class="btn btn-primary" id="btn" onclick="confirmarSenha()"  name="inserir"> Salvar </button>
                </div>
              </form>

    				</div>
  				</div>
			</div>
	</body>
</html>