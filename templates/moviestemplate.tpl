{include file='assets/header.tpl'}
<div class="container-alt">
  <ul class="list-group pt-4">
  <h3>Peliculas por categoria</h3>
  {foreach from=$genres item=genre}
  <li class="list-group-item"><a href="genero/{$genre->ID}">{$genre->Genero}</a></li>
  {/foreach}
</ul>
	<div class="row pt-4">
{foreach from=$movies  item=movie}

<div class="card" style="width: 18rem;  margin: 10px;">
  {if $movie->Img}
  <img class="cardpic" src="{$movie->Img}" alt="Card image cap">
  {else}
  <img class="cardpic" src="static/notfound.jpg" alt="Card image cap">
  {/if}
  <div class="card-body">
    <h5 class="card-title">{$movie->Titulo}</h5>
    <p class="card-text">{$movie->Descripcion|truncate:150}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Fecha: {$movie->Fecha}</li>
    <li class="list-group-item">Genero: {$movie->Genero}</li>
  </ul>
  <div class="card-body">
    <a href="verficha/{$movie->ID}" class="card-link">Ver ficha</a>
   <!--<a href="#" class="card-link">Another link</a> -->
  </div>
</div>
{/foreach}
</div>
</div>
{include file = 'assets/footer.tpl'}
