<?php
include_once("header.php");
?>
<div class="row mt - 5">
    <div class="col-md-6">
        <div class="text-start">
        <h4>Crear nuevo ficha</h4>
    </div>
 </div>
</div>
<form action="index.php?controlador=ficha&funcion=crear_guardar" method="POST">
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">numero_ficha</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="numero_ficha" name="numero_ficha"> 
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">fecha</label>
     <div class="col-sm-10">
        <input type="date" class="form-control" id="fecha" name="fecha">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">descripcion</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" name="descripcion">
     </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">marca</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="marca" name="marca">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">tipo</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="tipo" name="tipo">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">edificio</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="edificio" name="edificio">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">responsable</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="responsable" name="responsable">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">cargo_responsable</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="cargo_responsable" name="cargo_responsable">
    </div>
</div>    

<button type="submil" class="btn btn-primary">Guardar</button>
<button type="button" class="btn btn-secondary">Cancelar</button>
</from>
<?php
include_once("footer.php");
?>