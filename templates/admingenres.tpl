{include file='assets/header.tpl'}

<div class="row mt-4">
  <div class="col-md-4">
<ul class="list-group pb-4">
  {foreach from=$genres item=genre}
  <li class="list-group-item">{$genre->Genero}<a href="EditGenre/{$genre->ID}" class="link-primary pl-2">Editar</a><a href="Deletegenre/{$genre->ID}" class="link-danger pl-2">Borrar</a>
</li>

  {/foreach}
</ul>
<form action="Newgenre" method="POST">
<div class="form-group mx-auto">
  <label>Ingrese un nuevo Genero</label>
    <input type="text" class="form-control mb-2" placeholder="Ingrese un Titulo" name="Genero">
     <button type="submit" class="btn btn-primary">Guardar</button>  
  </div>
</form>
</div>
</div>


{include file='assets/footer.tpl'}