{include file='assets/header.tpl'}
<div class='container'>
<ul class="list-group">
  {foreach from=$movies item=movie}
  <li class="list-group-item">{$movie->Titulo}<a href="Editmovie/{$movie->ID}" class="link-primary pl-2">Editar</a><a href="Deletemovie/{$movie->ID}" class="link-danger pl-2">Borrar</a>
</li>

  {/foreach}
</ul>
</div>
{include file='assets/footer.tpl'}