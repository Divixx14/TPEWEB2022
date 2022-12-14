{include file='assets/header.tpl'}
<div class="container">
<form action="AddMovie" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Titulo</label>
    <input type="text" class="form-control" placeholder="Ingrese un Titulo" name="Titulo">
  </div>
  <div class="form-group">
    <label>Fecha</label>
    <input type="number" class="form-control" placeholder="Fecha de estreno (Max 4 digitos)" name="Fecha">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Productor</label>
    <input type="text" class="form-control" placeholder="Nombre del Productor" name="Productor">
  </div>
  <div class="form-group">
    <label>Descripcion</label>
    <textarea class="form-control" rows="3" placeholder="Ingrese una descripcion max 250 caracteres." name="Descripcion"></textarea>
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