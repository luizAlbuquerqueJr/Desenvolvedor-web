<!DOCTYPE html>
<html lang="pt-br">
	<head>

		
			
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.png"/>

		<meta charset="utf-8"/>
		<title>Golden</title>
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>


	</head>

	<body>
		<div class="abc">
		<div class="header">
			<div class="linha">
				<header>
					<div class="coluna col3">
						<h1 class="logo"><img src="imgs/logo1.png"/></h1>
						

						
						<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR&amp;onload=onloadCallback&amp;render=explicit" async="" defer="">
						</script>


						 

						

					</div>

					<div class="coluna col9">
						<nav>
							<ul class="menu inline sem-marcador">
								<li><a href="?p=index">Home</a></li>
								<li><a href="?p=clientes">Equipe de Professores</a></li>
								<li><a href="?p=servicos">Serviços</a></li>
								<li><a href="?p=contatos">Contatos</a></li>
								<li><a href="?p=dieta">IMC</a></li>
							</ul>
						</nav>
					</div>
						<div class="coluna col9">
						<P id="stringHora"></P>
						<script>
								        hoje = new Date()
								        dia = hoje.getDate()
								        dias = hoje.getDay()
								        mes = hoje.getMonth()
								        ano = hoje.getYear()

								        hora = hoje.getHours()
								        minuto = hoje.getMinutes()

								        if (dia < 10)
								                dia = "0" + dia
								        if (ano < 2000)
								                ano = 1900 + ano
								        function CriaArray (n) {this.length = n }
								        NomeDia = new CriaArray(7)
								        NomeDia[0] = "Domingo"
								        NomeDia[1] = "Segunda-feira"
								        NomeDia[2] = "Terça-feira"
								        NomeDia[3] = "Quarta-feira"
								        NomeDia[4] = "Quinta-feira"
								        NomeDia[5] = "Sexta-feira"
								        NomeDia[6] = "Sábado"
								        //
								        NomeMes = new CriaArray(12)
								        NomeMes[0] = "Janeiro"
								        NomeMes[1] = "Fevereiro"
								        NomeMes[2] = "Março"
								        NomeMes[3] = "Abril"
								        NomeMes[4] = "Maio"
								        NomeMes[5] = "Junho"
								        NomeMes[6] = "Julho"
								        NomeMes[7] = "Agosto"
								        NomeMes[8] = "Setembro"
								        NomeMes[9] = "Outubro"
								        NomeMes[10] = "Novembro"
								        NomeMes[11] = "Dezembro"
								       
							//	        document.write ("<font color='black'  face='Arial' size=4 >"+hora+":"+minuto+ " </font>")
										document.getElementById('stringHora').innerHTML = NomeDia[dias] + ", " + dia + " de " + NomeMes[mes] + " de " + ano;
										document.getElementById("stringHora").style.color="black";
										

							 </script>						
					 </div>



				</header>
			</div>
		</div>
