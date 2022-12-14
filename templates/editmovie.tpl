{include file='assets/header.tpl'}
<div class="container">
<form action="Updatemovie/{$movie->ID}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" name="Titulo" value="{$movie->Titulo}">
  </div>
  <div class="form-group">
    <label>Fecha</label>
    <input type="number" class="form-control"name="Fecha" value="{$movie->Fecha}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Productor</label>
    <input type="text" class="form-control" name="Productor"value="{$movie->Productor}">
  </div>
  <div class="form-group">
    <label>Descripcion</label>
    <textarea class="form-control" rows="3" name="Descripcion">{$movie->Descripcion}</textarea>
  </div>
  <div class="form-group">
    <label>Genero</label>
    <select class="form-control" name="Genero">
      {foreach from=$genres item=genre}
        <option value="{$genre->ID}">{$genre->Genero}</option>
      {/foreach}
    </select>
  </div>
  <div class="form-group">
     <input type="file" name="input_name" id="imageToUpload">
  </div>
   <button type="submit" class="btn btn-primary">Guardar</button>  
</form>
</div>  
{include file='assets/footer.tpl'}