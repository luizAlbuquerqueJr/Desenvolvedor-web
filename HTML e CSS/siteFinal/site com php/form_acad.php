<!DOCTYPE html>
<html>
<head>
	<title>OK</title>
</head>
<body>
	<?php 
	if(isset($_POST['nome'])) $nome = $_POST['nome'];
	if(isset($_POST['email'])) $email = $_POST['email'];
	if(isset($_POST['assunto'])) $assunto = $_POST['assunto'];
	if(isset($_POST['mensagem'])) $mensagem = $_POST['mensagem'];


	$conteudo = "teste";
	 
	//$fp = fopen("Entrada_Academia.txt","a+");
	//fwrite($fp,"Nome: ".$nome."\n");
	//fwrite($fp,"Email: ".$email."\n");
	//fwrite($fp,"Assunto: ".$assunto."\n");
	 //fwrite($fp,"Mensagem: ".$mensagem."\n");
	//fwrite($fp,"Hora de envio: ".date('h:i:s')."\n\n\n");
	//fclose($fp);



	mail('laaj@cin.ufpe.br', $assunto, $mensagem,'from: '.$email) ;
	mail($email, 'Equipe Golden', 'Olá, infelizmente esta mensagem é apenas para teste.','from: laaj@cin.ufpe.br');


	 ?>
	<script >
		alert("Enviado com sucesso,entraremos em contato em breve!");
		window.location.href = "index.html";
	</script>


 
</body>
</html>
