
<?php 
if(isset($_POST['campo1'])) $campo1 = $_POST['campo1'];
echo $campo1;

$conteudo = "teste";
 
$fp = fopen("novo.txt","wb");
 
fwrite($fp,$conteudo);
 
fclose($fp);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Envio de dados via GET e POST</title>
</head>
<body>
	
	<form action="" method="post">
		<p><input type="text" name="campo1"></p>
		<p><input type="submit" name="enviar"></p>


	</form>



</body>
</html>


	<?php 
	$acao = $_GET['acao'];
	$id = $_GET['id'];


	switch ($acao) {
		case 'excluir':
			echo "Excluir um registro de id:".$id;
			break;
		
		default:
			echo "acao padrao";
			# code...
			break;
	}



	 ?>