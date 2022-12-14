<?php

require_once 'libs/Smarty.class.php';

class AdminView{

	private $smarty;


	public function __construct(){

		$this->smarty = new Smarty();

	}

	//metodo solo para verificar si existe una sesion activa
	public function data_set(){
		$this->smarty->assign('session',false);
		if(isset($_SESSION['user'])){
			$this->smarty->assign('session',true);
		}

	}

	public function AdminMovies($movies){
			$this->data_set();
			$this->smarty->assign('movies',$movies);
			$this->smarty->display('templates/adminmovies.tpl');
	}

	public function AdminGenres($genres){
		$this->data_set();
		$this->smarty->assign('genres',$genres);
		$this->smarty->display('templates/admingenres.tpl');
	}


	public function ShowAddForm($genres){
		$this->data_set();
		$this->smarty->assign('genres',$genres);
		$this->smarty->display('templates/addmovie.tpl');

	}

	
	public function EditMovie($movie,$genres){
		$this->data_set();
		$this->smarty->assign('movie',$movie);
		$this->smarty->assign('genres',$genres);
		$this->smarty->display('templates/editmovie.tpl');
	}

	public function EditGenre($genre){
		$this->data_set();
		$this->smarty->assign('genre',$genre);
		$this->smarty->display('templates/editgenre.tpl');
	}

}

