<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>teste</title>
</head>
<body>
	<h1>teste php</h1>
	
	<?php

	/////////////////////////Variaveis
		//phpinfo();
		$idade = 30;
		$altura = 1.70;
		$nome = "Luiz";
		$casado = false;
		echo "o tipo da variavel idade é: ".gettype($idade)." ... <br>";
		echo "Meu nome é $nome e minha altura é \"$altura\"! <br>";
///////////////////Constantes
		define(PI, 3.14154784589);
		echo "Constante PI: ".PI."<br>";


		///////////////////////Array////////////////
		$cadastro = array('Cliente 1','cliente 2','Cliente 3');
		
		$cadastro1[] = 'luiz';
		$cadastro1[] = 'Felipe';
		$cadastro1[] = 'Thiago';
		$cadastro1[] = 'Josete';

		$cadastro2 = array('cliente1' => 'Luiz','cliente2'=>'Felipe' );



		$cadastro3  = array(
			'Cliente1' => array(
				'nome' => 'Luiz', 
				'idade' => 20,
				'sexo'=> 'M'
			),
			'Cliente2' => array(
				'nome' => 'Thiago', 
				'idade' => 20,
				'sexo'=> 'M'
			),
			'Cliente3' => array(
				'nome' => 'Felipe', 
				'idade' => 20,
				'sexo'=> 'M'
			)

		);


		var_dump($cadastro);
		echo "<br><br>";
		var_dump($cadastro1);
		echo "<br><br>";
		var_dump($cadastro2);
		echo "<br><br>";
		var_dump($cadastro3);
		echo "<br><br>";


		echo "<br>$cadastro[2]";
		echo "<br>$cadastro2[cliente2]";
		echo "<br>cadastro3['Cliente1']['nome']:". $cadastro3['Cliente1']['nome'] ."<br>";


		//Estruturas de controle

		$x=0;

		while ($x <= 10) {
			echo "<br>$x";
			if ($x>5) {
				echo " numero maior que cinco!";
			}
			$x++;
		}

		for ($i=2; $i <50 ; $i++) { 
			$i +=5 ;
			# code...
		}

		$cadastro = array('nome1' => 'Ricardo', 'nome2' => 'Thaynan','nome3' => 'Luiz');
		echo "<br>";
		foreach ($cadastro as $chave => $valor) {
			echo $chave." = ".$valor."<br>";
			# code...
		}

		//Manipulação de strings
		$mensagem = 'Olá pessoas, enviaremos uma resposta o mais rápido possível';
		echo "mensagem: ".$mensagem;
		echo "Uso do explode em mensagem: <br>"; 
		var_dump(explode(' ',$mensagem));//quebra a frase toda vez q encontrar um espaço

		echo $msgHTML = "<h1> tittulo1</h1><p>paragrafo</p>";
		echo $msgHTML = htmlentities($msgHTML);
		echo $msgHTML = html_entity_decode($msgHTML);

		echo implode('-', array( 'Luiz','Antonio','De','Albuquerque', 'Jnuior'));
		echo "<br>'minha senha' codificada por md5: ";
		echo md5("minha senha");//criptografia de mao unica

		$mensagem = 'Olá pessoas,
		 enviaremos uma resposta o mais rápido possível.
		 Estou um pouco ocupado
		 e dando entrer adoirdado
		 ?
		 !
		 sadsa asdsad asdas  fas 
		 sadas fasf as 
		 ';
		echo nl2br($mensagem);

		echo number_format(12345.6789,2,' , ','.');
		echo str_pad('<br>nome', 20,'-');
		echo str_repeat("<br>texto repetido ", 20);
		echo str_replace('google', 'You-Tube', '<br>Pesquise qlq coisa no google');
		echo "<br>conte quantas palavras tem aqui: ".str_word_count("conte quantas palavras tem aqui")."<br>";

		echo strip_tags("<h1>Tira as tags</h1>");

		echo strlen("umaSenhaCom8Digitos")."<br>";
		echo strpos("Isso é um texto simples demais", "texto");//posição de um texto
		echo substr("Isso é um texto simples demais", 11,6);//pega uma parte da string
		echo strtolower("TUDO MINUSCULO");
		echo strtoupper("tudo maisculo");

		
		$email = 'laaj@cin.ufpe.br';
		echo "<br>";

		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "email correto";
		}else{
			echo "email incorreto";
		}

		//datas e horas
		echo "<br>".time();// retorna o numero do primeiro dia 1970 até hoje
		var_dump(checkdate(4, 12, 2018)) ;//echo checkdate(month, day, year);
		var_dump(checkdate(2, 29, 2018));//echo checkdate(month, day, year);

		date_default_timezone_set('America/Recife');
		echo "<br>";
		echo date('d-m-Y H:i:s',time());

		var_dump(file_exists('teste.php'));
		echo "<br>";
		var_dump(file_exists('test2.php'));

		echo basename(__FILE__);
		echo dirname(__FILE__);

		var_dump(file('texte.txt'));
		echo file_get_contents('texte.txt');

		
		echo nl2br(file_get_contents('texte.txt'));

		echo file_put_contents('texte.txt', "\r\n".'linha a mais',FILE_APPEND);

		$arquivo = fopen('arquivo.txt', 'a');//se nao tiver cria arquivo
		fwrite($arquivo, 'Linha gravada via PHP'."\r\n");
		fclose($arquivo);

		//includes
		echo "<br>";
		include_once("abc.php");//inclui o arq apenas uma vez





	?>
	





</body>
</html>