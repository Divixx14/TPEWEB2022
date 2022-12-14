{include file = 'assets/header.tpl'}
<div class="container">
{if $error}
<h1>{$error}</h1>
{else}
<h1>{$movie->Titulo}</h1>
<h2>Producida por {$movie->Productor}</h2>
<hr style="width:75%;height: 10px;text-align:left;margin-left:0">
{if $movie->Img}
<img src="{$movie->Img}" width="600px" height="600px" class="object-fit: contain">
{/if}
<p>{$movie->Descripcion}</p>
<p>Genero: {$movie->Genero}</p>
</div>
{/if}
{include file = 'assets/footer.tpl'}