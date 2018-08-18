<div class="linha">
			<section>
				<div class="coluna col5 sidebar">
					<h3>Localização</h3>
					<img src="imgs/mapa.png" align="" />
					<ul class="sem-padding sem-marcador">
						<li>Av. Gov. Agamenon Magalhães</li>
						<li>Cavaleiro</li>
						<li>Jaboatão dos Guararapes - PE</li>
					</ul>
					<h3>Contato direto</h3>
					<ul class="sem-padding sem-marcador">
						<li><a href="https://www.facebook.com/pg/goldenfitacademia.com.br/photos/?ref=page_internal"><img src="imgs/face.png" alt="Not Found" class="ico"/></a>
						<a href="https://www.facebook.com/pg/goldenfitacademia.com.br/photos/?ref=page_internal"><img src="imgs/insta.png" alt="Not Found" class="ico"/></a></li>
						
						<li>Email: <strong> Academia@golden.com</strong></li>
						<li>Face: <strong> (81) 9854-63214</strong></li>
					</ul>

				</div>

				<div class="coluna col7 contato">
					<h2>Envie sua mensagem</h2>
					<form action="" method="post" onsubmit="return enviarDados();">
						<label for="nome">Seu nomes:</label>
						<input type="texte" name="nome" id="nome">
						<label for="email">Seu email:</label>
						<input type="texte" name="email" id="email">
						<label for="assunto">Assunto:</label>
						<input type="texte" name="assunto" id="assunto">
						<label for="mensagem">Mensagem:</label>
						<textarea name="mensagem" id="mensagem"></textarea>
						<input type="submit" name="enviar" value="Enviar Mensagem &raquo;"/>

					</form>
					<script>
						function enviarDados(){
							
							var nome = document.getElementById('nome');
							var email = document.getElementById('email');
							var assunto = document.getElementById('assunto');
							var mensagem = document.getElementById('mensagem');
							

							if(nome.value =="")
							{
								alert( "Preencha campo NOME corretamente!" );
								nome.focus();
								return false;
							}
							  
							  
							if( email.value.indexOf('@')==-1 || email.value.indexOf('.')==-1 )
							{
								alert( "Preencha campo E-MAIL corretamente!" );
								email.focus();
								return false;
							}


							if( assunto.value=="" || assunto.value.length < 4)
							{
								alert( "O campo ASSUNTO deve ter no mínimo 4 caracteres" );
								email.focus();
								return false;
							}
							if( mensagem.value=="" || mensagem.value.length < 10)
							{
								alert( "O campo MENSAGEM deve ser acima de 10 caracteres" );
								email.focus();
								return false;
							}
							  
							 
								return false ;
						}
						
						

					</script>



				</div>

			</section>

		</div>
		