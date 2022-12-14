<?php

class GenreModel{

	private $db;

	public function __construct(){
		$this->db = new PDO('mysql:host=localhost;'.'dbname=peliculas_db;charset=utf8', 'root', '');
	}

	public function getGenres(){
		$query = $this->db->prepare('SELECT * FROM genero');
		$query->execute();
		$genres = $query->FetchAll(PDO::FETCH_OBJ);
		return $genres;
	}

	public function getGenreById($id){
		$query = $this->db->prepare('SELECT * FROM genero WHERE ID = ?');
		$query->execute([$id]);
		$genre = $query->Fetch(PDO::FETCH_OBJ);
		return $genre;
	}

	// Alta Baja Modificacion
	public function DeleteGenre($id){
		$query = $this->db->prepare('DELETE FROM genero WHERE ID = ?');
		$query->execute([$id]);
	}

	public function UpdateGenre($genero,$id){
		$query = $this->db->prepare('UPDATE genero SET Genero = ? WHERE ID = ?');
		$query->execute([$genero,$id]);
	}

	public function AddGenre($genero){
		$query = $this->db->prepare('INSERT INTO genero (Genero) VALUES(?)');
		$query->execute([$genero]);
	}
}