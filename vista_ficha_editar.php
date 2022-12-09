<?php
include_once("header.php");
?>
<div class="row mt - 5">
    <div class="col-md-6">
        <div class="text-start">
        <h4>Editar  ficha</h4>
    </div>
 </div>
</div>
<?php foreach($ficha as $dato) { ?>
<form action="index.php?controlador=ficha&funcion=editar_guardar&id_ficha=<?php echo $dato->id_ficha ?>" method="POST">


<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">numero_ficha</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="numero_ficha"name="numero_ficha" value="<?php echo $dato->numero_ficha?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">fecha</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="fecha"name="fecha" value="<?php echo $dato->fecha?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">descripcion</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" name="descripcion"value="<?php echo $dato->descripcion?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">marca</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="marca" name="marca"value="<?php echo $dato->marca?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">tipo</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="tipo" name="tipo"value="<?php echo $dato->tipo?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">edificio</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="edificio" name="edificio"value="<?php echo $dato->edificio?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">responsable</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="responsable" name="responsable"value="<?php echo $dato->responsable?>">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">cargo_responsable</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="cargo_responsable" name="cargo_responsable"value="<?php echo $dato->cargo_responsable?>">
     </div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button> 
<button type="submit" class="btn btn-secondary">Cancelar</button>
</form>
<?php } ?>
<?php
include_once("footer.php");
?>