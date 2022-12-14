<!DOCTYPE html>
<html>
<head>
<base href={BASE_URL}>
  <link rel="stylesheet" type="text/css" href="static/styles.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Lista de peliculas</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Lista de peliculas</a>
  <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
</svg></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">Categorias</a>
      </li>-->
      
      {if $session eq true}
       <li class="nav-item  active">
        <a class="nav-link" href="newmovie">Nueva Pelicula</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="adminmovies">Admin Peliculas</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="admingenres">Admin Generos</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="Logout">Logout</a>
      </li>
      {else}
      <li class="nav-item  active">
        <a class="nav-link" href="Login">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro">Registrarse</a>
      </li>
      {/if}
    </ul>
  </div>
</nav>