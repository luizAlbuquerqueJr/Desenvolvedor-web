<?php 


function carrega_header(){

	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina ='index';
	if(file_exists('page_'.$pagina.'.php') &&  $pagina!= 'index'){
		require_once('header.php');
	}else{
		require_once('header_index.php');
		
	}




}


function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina ='index';
	if(file_exists('page_'.$pagina.'.php')){
		require_once('page_'.$pagina.'.php');
	}else{
		require_once('page_home.php');
		
	}


}



function gera_titulos(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina ='index';
	switch ($pagina) {
		case 'index':
			$titulo = 'Golden Fit';
			break;
		
		case 'clientes':
			$titulo = 'Equipe Golden';
			break;

		case 'servicos':
			$titulo = 'Nossos serviços';
			break;

		case 'dieta':
			$titulo = 'Sua saúde';
			break;

		case 'contatos':
			$titulo = 'Fale conosco';
			break;


		default:
			$titulo = 'Golden Fit';
			break;
	}

	return $titulo;
}


 ?>


