<?php

include_once 'Controller/MoviesController.php';
include_once 'Controller/RegisterController.php';
include_once 'Controller/LoginController.php';
include_once 'Controller/AdminController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$MoviesController = new MoviesController();
$RegisterController = new RegisterController();
$LoginController = new LoginController();
$AdminController = new AdminController();

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $MoviesController->ShowHome();
        break;
    case 'verficha':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $MoviesController->ShowMovieById($id);
        break;
    case 'Registro':
        $RegisterController->ShowRegister();
        break;
    case 'Register':
        $RegisterController->RegisterUser();
        break;
    case 'Login':
        $LoginController->ShowLogin();
        break;
    case 'verify':
        $LoginController->verify();
        break;
    case 'Logout':
        $LoginController->LogOut();
        break;
    case 'newmovie':
        $AdminController->ShowAddForm();
        break;  
    case 'AddMovie':
        $AdminController->AddMovie();
        break;
    case 'adminmovies':
        $AdminController->AdminMovies();
        break;
    case 'Editmovie':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->EditMovie($id);
        break;
    case 'Updatemovie':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->UpdateMovie($id);    
        break;
    case 'Deletemovie':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->DeleteMovie($id); 
        break;
    case 'admingenres':
        $AdminController->AdminGenres();
        break;
    case 'Newgenre':
        $AdminController->AddGenre();
        break;
    case 'Deletegenre':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->DeleteGenre($id);
        break;
    case 'EditGenre':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->EditGenre($id);
        break; 
    case 'UpdateGenre':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $AdminController->UpdateGenre($id);
        break;
    case 'genero':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        $MoviesController->ShowMoviesByGenre($id);
        break;
    default:
        echo('404');
        break;
}
