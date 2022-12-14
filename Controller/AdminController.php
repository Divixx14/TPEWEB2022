<?php

include_once 'Models/MoviesModel.php';
require_once 'Models/GenreModel.php';
require_once 'Views/AdminView.php';
require_once 'AuthHelper/AuthHelper.php';

class AdminController{

	private $Moviesmodel;
	private $GenreModel;
	private $view;
	private $Helper;

	public function __construct(){
		$this->Moviesmodel = new MoviesModel();
		$this->GenreModel = new GenreModel();
		$this->view = new AdminView();
		$this->Helper = new AuthHelper();

	}

	public function ShowAddForm(){
		$this->Helper->checkLoggedIn();
		$genres = $this->GenreModel->getGenres();
		$this->view->ShowAddForm($genres);
	}

	public function AdminMovies(){
		$this->Helper->checkLoggedIn();
		$movies = $this->Moviesmodel->getMovies();
		$this->view->AdminMovies($movies);

	}

	public function AdminGenres(){
		$this->Helper->checkLoggedIn();
		$genres = $this->GenreModel->getGenres();
		$this->view->AdminGenres($genres);
	}

	public function EditMovie($id){
		$this->Helper->checkLoggedIn();
		$movie = $this->Moviesmodel->getMoviesById($id);
		$genres = $this->GenreModel->getGenres();
		$this->view->EditMovie($movie,$genres);
	}

	public function EditGenre($id){
		$this->Helper->checkLoggedIn();
		$genre = $this->GenreModel->getGenreById($id);
		$this->view->EditGenre($genre);
	}

	public function DeleteMovie($id){
		$this->Helper->checkLoggedIn();
		$this->Moviesmodel->DeleteMovie($id);
		header('Location:'.BASE_URL.'adminmovies');
	}

	public function DeleteGenre($id){
		$this->Helper->checkLoggedIn();
		$this->GenreModel->DeleteGenre($id);
		header('Location:'.BASE_URL.'admingenres');
	}

	
	public function UploadImg(){
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png")
            return $_FILES['input_name']['tmp_name'];
        else{
            return null;
        }
    }

    //Requests
	public function AddMovie(){
		if(isset($_POST['Titulo'],$_POST['Fecha'],$_POST['Productor'],$_POST['Descripcion'],$_POST['Genero'])){
			$this->Moviesmodel->AddMovie($_POST['Titulo'],$_POST['Fecha'],$_POST['Productor'],$_POST['Descripcion'],$_POST['Genero'],$this->UploadImg());
		}
		header('Location:'.BASE_URL.'adminmovies');
	}

	public function UpdateMovie($id){
		if(isset($_POST['Titulo'],$_POST['Fecha'],$_POST['Productor'],$_POST['Descripcion'],$_POST['Genero'])){
			$this->Moviesmodel->UpdateMovie($_POST['Titulo'],$_POST['Fecha'],$_POST['Productor'],$_POST['Descripcion'],$_POST['Genero'],$this->UploadImg(),$id);
		}

		header('Location:'.BASE_URL.'adminmovies');

	}

	public function AddGenre(){
		if(isset($_POST['Genero'])){
			$this->GenreModel->AddGenre($_POST['Genero']);
		}
		header('Location:'.BASE_URL.'admingenres');
	}

	public function UpdateGenre($id){
		if(isset($_POST['Genero'])){
			$this->GenreModel->UpdateGenre($_POST['Genero'],$id);
		}
		header('Location:'.BASE_URL.'admingenres');
	}
}	
