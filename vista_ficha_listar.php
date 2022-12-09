<?php
include_once("header.php");
?>
<div class="row mt - 5">
    <div class="col-md-6">
        <div class="text-start">
        <h4>Listar ficha</h4>
    </div>
</div>
<div class="col-md-6">
  <div class="text-end">
  <a href="index.php?controlador=ficha&funcion=imprimir_pdf" class="btn btn-success">Imprimir</a>
  <a href="index.php?controlador=ficha&funcion=vista_ficha_crear" type="button" class="btn btn-primary">Nueva ficha</a>
  </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Nro</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Marca</th>
        <th scope="col">Tipo</th>
        <th scope="col">Responsable</th>
        <th scope="col">Acciones</th>
     </tr>
 </thead>
 <tbody>
    <?php foreach($ficha as $dato){?>
    <tr>
        <th scope="row"><?php echo $dato->id_ficha?></th>
        <td><?php echo $dato->descripcion?></td>
        <td><?php echo $dato->marca?></td>
        <td><?php echo $dato->tipo?></td>
        <td><?php echo $dato->responsable?></td>
        <td>
           <a href="index.php?controlador=ficha&funcion=vista_ficha_editar&id_ficha=<?php echo $dato->id_ficha?>" class="btn btn-outline-primary">Editar</a>
           <a href="index.php?controlador=ficha&funcion=ficha_eliminar&id_ficha=<?php echo $dato->id_ficha?>"class="btn btn-outline-danger">Eliminar</a>
           <a href="index.php?controlador=ficha&funcion=ficha_imprimir_registro&id_ficha=<?php echo $dato->id_ficha?>"class="btn btn-outline-success">Imprimir</a>
        </td>
    </tr>
    <?php }?>
   </tbody>
</table>
</div>

<?php
include_once("footer.php");
?>

