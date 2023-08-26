<?php

include 'segur.php';
include 'carrito.php';
include 'templates/cabecera.php';




if (!empty($_SESSION['CARRITOVENTA'])) {

unset($_SESSION['CARRITOVENTA']);
}

if (!empty($_SESSION['CARRITOCOBRO'])) {
  

unset($_SESSION['CARRITOCOBRO']);
}

if (!empty($_SESSION['COBRO'])) {

unset($_SESSION['COBRO']);
}

?>
 <?php if(!empty($_SESSION['SEGUR'])) { ?>
    <?php $total=0; ?>
        <?php foreach($_SESSION['SEGUR'] as $indice=>$producto) { ?>   

   
 
<?php } ?>
  
<?php }else{ ?>



<?php } ?>






<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title">LISTADO DE ACCIONES NOTARIALES</h1>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>




<th scope="col">ID</th>
<th scope="col" >Escritura</th>
<th scope="col" >Folio N°</th>
<th scope="col" >FechaInicio</th>
<th scope="col" >ObjetoForm</th>
<th scope="col" >ITI</th>
<th scope="col" >Imp Gan</th>
<th scope="col" >Contratante</th>
<th scope="col" >N°Comp</th>
<th scope="col" >EscOAutorizante</th>
<th scope="col" >ImpuestoFiscal</th>

<th scope="col" >Sellos</th>
<th scope="col" >Monto</th>
<th scope="col" >VF</th>
<th scope="col" >Partida</th>
<th scope="col" >Catastro</th>
<th scope="col" >Testimonio</th>
<th scope="col" >InscFecha</th>
<th scope="col" >Retiro</th>
<th scope="col" >Estado</th>
         </tr>
         </thead>

           
                 <tbody class="buscar">   
                      
         <?php
            $sentencia=$pdo->prepare('SELECT * FROM lorenzo');
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);

         ?>
         <?php foreach($listaProductos as $producto) { ?>
         
    <tr>         
                            
                     
<td scope="row" width="5%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"> <?php echo $producto['ID'] ?></a></td>
<td scope="row" width="5%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if ($producto['escritura']==0) {echo ('---');}
else


    { echo $producto['escritura'];} ?></a></td>
<td scope="row" width="5%">
<a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>">



    <?php if (is_null($producto['folio'])) {echo ('---');}
else


    { echo $producto['folio'];} ?></a></td>






<td scope="row" width="10%" ><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php echo $producto['fecha'] ?></a></td>



<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php echo $producto['objeto'] ?></a></td>



<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['iti'])) {echo ('---');}
else


    {  echo "$".$producto['iti'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['ganancias'])) {echo ('---');}
else


    { echo "$".$producto['ganancias'] ;}?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php echo $producto['contratante'] ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['comprobante'])) {echo ('---');}
else


    { echo $producto['comprobante'];} ?></a></td>




<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['escOAutorizante'])) {echo ('Sin Asignar');}
else


    {  echo $producto['escOAutorizante'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['impuestoFiscal'])) {echo ('---');}
else


    { echo "$".$producto['impuestoFiscal'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['sellos'])) {echo ('---');}
else


    { echo "$".$producto['sellos'];} ?></a></td>








<td scope="row" width="5%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['monto'])) {echo ('---');}
else


    {  echo ("$".$producto['monto']);} ?></a></td>



<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php  if (is_null($producto['partida'])) {echo ('---');}
else


    {  echo "$".$producto['vf'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['partida'])) {echo ('---');}
else


    {  echo $producto['partida'] ;}?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['catastro'])) {echo ('---');}
else


    { echo $producto['catastro'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['testimonio'])) {echo ('---');}
else


    { echo $producto['testimonio'];} ?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['inscFecha'])) {echo ('---');}
else


    {  echo $producto['inscFecha'] ;}?></a></td>
<td scope="row" width="10%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php  if (is_null($producto['retiro'])) {echo ('No');}
else


    { echo $producto['retiro'];} ?></a></td>
<td scope="row" width="5%"><a href="formularioModificarFormulario2.php?id=<?php echo $producto['ID'];?>"><?php if (is_null($producto['estado'])) {echo ('---');}
else


    { echo $producto['estado'];} ?></a></td>
                           </tr>
                        <?php } ?>


                        
                    
                    </tbody>
                </table>   
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
       


       <?php include 'templates/pie.php'; ?>