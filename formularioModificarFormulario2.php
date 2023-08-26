<?php

include 'segur.php';
include 'carrito.php';
include 'templates/cabecera.php';




if (isset($_GET['id'])){
$filtro=$_GET['id'];
}else
{}





?>





<?php
            $sentencia=$pdo->prepare("SELECT * FROM lorenzo where ID='$filtro' ");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
    
         ?>




<div class="main-panel">
        <div class="content-wrapper">
        
             
                        
                        
     <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">

                <div class="card-body">
                  



    <?php foreach($listaProductos as $producto) { ?>
        <h4 class="card-title">DATOS DE  :   <?php echo $producto['objeto']."  de ".$producto['contratante'] ?>  </h4>
    <?php } ?>  
         <?php
         
                    

            $sentencia=$pdo->prepare("SELECT * FROM lorenzo where ID='$filtro'");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
            
         ?>
         <?php foreach($listaProductos as $producto) { ?>

            <form class="cmxform" id="commentForm"  action="actualizaFormulario.php" method="post">


                <div class="form-group row"> 
                <!--    <div class="col-sm-2"><label>ID</label></div>-->
                   <input type="hidden" class="form-control" name="ID" placeholder="ID" value="<?php echo ( $producto['ID']);?>">

<div class="col-sm-2"><label>Contratante:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="contratante" placeholder="ingrese n° de escritura" value="<?php echo ( $producto['contratante']);?>"></div>

<div class="col-sm-2"><label>Escritura N°:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="escritura" placeholder="ingrese n° de escritura" value="<?php echo ( $producto['escritura']);?>"></div>
<div class="col-sm-2"><label>Folio N°:</label></div><div class="col-sm-10"><input type="text" class="form-control" name="folio" placeholder="ingrese n° de folio" value="<?php echo ( $producto['folio']);?>"></div>
<input type="hidden" class="form-control" name="fecha" placeholder="fecha" value="<?php echo ( $producto['fecha']);?>">
<input type="hidden" class="form-control" name="objeto" placeholder="objeto" value="<?php echo ( $producto['objeto']);?>">


<div class="col-sm-2"><label>ITI N°:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="iti" placeholder="ingrese n° de ITI" value="<?php echo ( $producto['iti']);?>"></div>
<div class="col-sm-2"><label>Ganancias:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="ganancias" placeholder="ingrese ganancias" value="<?php echo ( $producto['ganancias']);?>"></div>

<div class="col-sm-2"><label>Comprobante N°:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="comprobante" placeholder="ingrese n° de comprobante" value="<?php echo ( $producto['comprobante']);?>"></div>

<div class="col-sm-2"><label>Esc o Autorizante:</label>
 
</div>
<div class="col-sm-10">
<select id="Pago" class="form-control" name="escOAutorizante" >
                    <option value="Sin Asignar" 
    <?php if ($producto['escOAutorizante']=="Sin Asignar") {?>
selected="true" 
<?php }
else {}; ?>>Sin Asignar</option>

 <option value="Sebastián" <?php if ($producto['escOAutorizante']=="Sebastián") {?>
selected="true" 
<?php }
                    else {}; ?>>Sebastián</option>
                    <option value="Fernanda"  <?php if ($producto['escOAutorizante']=="Fernanda") {?>
selected="true" 
<?php }
else {}; ?>>Fernanda</option>
                     
                   </select></div>



<div class="col-sm-2"><label>Impuesto Fiscal:</label></div><div class="col-sm-10">
<input type="currency" class="form-control" name="impuestoFiscal" placeholder="ingrese impuesto Fiscal" value="<?php echo ( $producto['impuestoFiscal']);?>"></div>
<div class="col-sm-2"><label>Sellos :</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="sellos" placeholder="ingrese sellos" value="<?php echo ( $producto['sellos']);?>"></div>
<div class="col-sm-2"><label>Monto :</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="monto" placeholder="ingrese monto" value="<?php echo ( $producto['monto']);?>"></div>
<div class="col-sm-2"><label>VF:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="vf" placeholder="ingrese vf" value="<?php echo ( $producto['vf']);?>"></div>
<div class="col-sm-2"><label>Partida N°:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="partida" placeholder="ingrese partida" value="<?php echo ( $producto['partida']);?>"></div>
<div class="col-sm-2"><label>Catastro N°:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="catastro" placeholder="ingrese catastro" value="<?php echo ( $producto['catastro']);?>"></div>
<div class="col-sm-2"><label>Testimonio:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="testimonio" placeholder=" ingrese testimonio" value="<?php echo ( $producto['testimonio']);?>"></div>
<div class="col-sm-2"><label>Fecha de Inscripción:</label></div><div class="col-sm-10">
<input type="date" class="form-control" name="inscFecha" placeholder="inscFecha" value="<?php echo ( $producto['inscFecha']);?>"></div>



<div class="col-sm-2"><label>Retiro:</label></div>



<div class="col-sm-10">
<select id="Pago" class="form-control" name="retiro" >
                    <option value="Si" 
    <?php if ($producto['retiro']=="Si") {?>
selected="true" 
<?php }
else {}; ?>>Si</option>

 <option value="No" <?php if ($producto['retiro']=="No") {?>
selected="true" 
<?php }
                    else {}; ?>>No</option>
 
                   </select></div>






<div class="col-sm-2"><label>Estado:</label></div><div class="col-sm-10">
<input type="text" class="form-control" name="estado" placeholder="ingrese estado" value="<?php echo ( $producto['estado']);?>">
            
 <?php } ?>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="Proceder">Modificar</button>
            </form>
        </div>
    </div>
</div>
    <script>
        $(function () {
  $('[data-toggle="popover"]').popover()
})
    </script>
  
<?php

include 'templates/pie.php';
?>