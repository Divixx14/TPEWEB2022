 {include file='assets/header.tpl'}
 <div class="container">
   <form action="UpdateGenre/{$genre->ID}" method="POST">
 <div class="form-group">
    <label>Editar Genero</label>
    <input type="text" class="form-control" name="Genero" value="{$genre->Genero }">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
{include file='assets/footer.tpl'}