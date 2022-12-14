<?php

include_once 'Models/MoviesModel.php';
include_once 'Models/GenreModel.php';
include_once 'Views/MoviesView.php';
include_once 'AuthHelper/AuthHelper.php';

class MoviesController{
	private $ModelMovies;
	private $ModelGenres;
	private $view;
	private $Helper;


	public function __construct(){

		$this->ModelMovies = new MoviesModel();
		$this->ModelGenres = new GenreModel();
		$this->view = new MoviesView();
		$this->Helper = new AuthHelper();
	}

	public function ShowHome(){
		$this->Helper->getSession();
		$movies = $this->ModelMovies->getMoviesJOIN();
		$genres = $this->ModelGenres->getGenres();
		$this->view->ShowHome($movies,$genres);
	}

	public function ShowMovieById($id){
		$this->Helper->getSession();
		$movie = $this->ModelMovies->getMoviesByIdJOIN($id);
		if($movie){
			$this->view->ShowMovieById($movie);
		}else{
			$this->view->ShowMovieById($movie,'404');
		}

	}

	public function ShowMoviesByGenre($id_fk){
		$this->Helper->getSession();
		$movies = $this->ModelMovies->getMoviesByGenre($id_fk);
		$genres = $this->ModelGenres->getGenres();
		$this->view->getMoviesByGenre($movies,$genres);
	}



}

?>