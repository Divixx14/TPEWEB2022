<?php

require_once 'libs/Smarty.class.php';
require_once 'AuthHelper/AuthHelper.php';

class MoviesView{

	private $smarty;
	private $Helper;

	public function __construct(){
		$this->smarty = new Smarty();
		$this->Helper = new AuthHelper();
	}

	//metodo solo para verificar si existe una sesion activa
	public function data_set(){
		$this->smarty->assign('session',false);
		if(isset($_SESSION['session']) && $_SESSION['session'] == true){
			$this->smarty->assign('session',true);
		}

	}

	public function ShowHome($movies,$genres){
		$this->data_set();
		$this->smarty->assign('movies',$movies);
		$this->smarty->assign('genres',$genres);
		$this->smarty->display('templates/moviestemplate.tpl');

	}

	public function ShowMovieById($movie,$error=''){
		$this->data_set();
		$this->smarty->assign('movie',$movie);
		$this->smarty->assign('error',$error);
		$this->smarty->display('templates/moviedetails.tpl');
	}

	public function getMoviesByGenre($movies,$genres){
		$this->data_set();
		$this->smarty->assign('movies',$movies);
		$this->smarty->assign('genres',$genres);
		$this->smarty->display('templates/moviesbygenre.tpl');
	}
}