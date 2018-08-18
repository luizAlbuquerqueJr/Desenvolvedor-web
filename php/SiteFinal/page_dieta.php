<div class="linha">
			<section>
				<div class="coluna col5 sidebar">
					<h3>Sua Calculadora GoldenFit</h3>
					<img src="imgs/fita.png" align=""  class="fita" />
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
					<h2>Calcule seu índice de Massa Corporal</h2>

						<!-- opcao sexo-->
						<label for ="opcao_sexo">Sexo:</label>

						<label for ="opcao_sexo" class = "labelFormulario">M: <br/></label><input type="radio" name="opcao_sexo" value "M" checked="cheked" id="sexo_M" />
						<label for ="opcao_sexo" class = "labelFormulario">H: </label><input type="radio" name="opcao_sexo" value "F"/>
			
						<label for="altura">Sua altura em centimetros:</label>
						<input type="texte" name="altura" id="alt">
						<label for="peso">Seu peso em quilogramas:</label>
						<input type="texte" name="nome" id="pes">

						<button onclick="calcula()"> Verificar</button>


						<p id="resultado">Seu resultado</p>
						<script >




							function calcula() {

								try{
									var alt = document.getElementById('alt').value;
									if( alt == '') throw 'Informe um valor para altura';
									if(isNaN(alt)) throw 'Voce precisa informar um numero para altura';


									alt = Number(alt);
									if(alt <= 0 || alt>210) throw 'Informe um valor para altura maior que zero e menor que 210';


									var pes = document.getElementById('pes').value;
									var mulher = document.getElementById('sexo_M');
							
									//$("elem").prop("checked");
									
									if( pes == '') throw 'Informe um valor para peso';
									if(isNaN(pes)) throw 'Voce precisa informar um numero para peso';
									if(alt <= 0 || alt>500) throw 'Informe um valor para peso maior que zero e menor que 500';
									alt = alt/100;

									var res = pes/(alt*alt);
						 			if(mulher.checked){//mulheres
										if(res < 19.1)document.getElementById('resultado').innerHTML = 'Abaixo do Peso';
										else if(res<25.8)document.getElementById('resultado').innerHTML = 'Peso Ideal';
										else if(res<27.3)document.getElementById('resultado').innerHTML = 'Acima do Peso Ideal';
										else if(res<32.3)document.getElementById('resultado').innerHTML = 'Obesidade';
										else document.getElementById('resultado').innerHTML = 'Obesidade Mórbida';
									}else{//homens
										if(res < 20.7)document.getElementById('resultado').innerHTML = 'Abaixo do Peso';
										else if(res<26.4)document.getElementById('resultado').innerHTML = 'Peso Ideal';
										else if(res<27.8)document.getElementById('resultado').innerHTML = 'Acima do Peso Ideal';
										else if(res<31.1)document.getElementById('resultado').innerHTML = 'Obesidade';
										else document.getElementById('resultado').innerHTML = 'Obesidade Mórbida';
									}
						 			




						 		}catch(erro){
						 			document.getElementById('resultado').innerHTML = 'Erro:' + erro
						 		}	

							}
							
						</script>






				</div>

			</section>

		</div>
		