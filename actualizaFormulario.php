<?php

include 'segur.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>
<?php 
$_SESSION["CARRITO"][0]=$_POST;

print_r($_SESSION["CARRITO"]);


if($_POST){
$ID=$_POST["ID"];        
if (empty($_POST["escritura"])){$escritura=null;}
	else
		{$escritura=$_POST["escritura"];};




if (empty($_POST["folio"])){$folio=null;}
	else
		{$folio=$_POST["folio"];};
if (empty($_POST["objeto"])){$objeto=null;}
	else
		{$objeto=$_POST["objeto"];};
if (empty($_POST["iti"])){$iti=null;}
	else
		{$iti=$_POST["iti"];};
if (empty($_POST["ganancias"])){$ganancias=null;}
	else
		{$ganancias=$_POST["ganancias"];};
if (empty($_POST["comprobante"])){$comprobante=null;}
	else
		{$comprobante=$_POST["comprobante"];};
if (empty($_POST["escOAutorizante"])){$escOAutorizante=null;}
	else
		{$escOAutorizante=$_POST["escOAutorizante"];};

if (empty($_POST["impuestoFiscal"])){$impuestoFiscal=null;}
	else
		{$impuestoFiscal=$_POST["impuestoFiscal"];};

if (empty($_POST["sellos"])){$sellos=null;}
	else
		{$sellos=$_POST["sellos"];};

if (empty($_POST["monto"])){$monto=null;}
	else
		{$monto=$_POST["monto"];};
if (empty($_POST["vf"])){$vf=null;}
	else
		{$vf=$_POST["vf"];};

if (empty($_POST["partida"])){$partida=null;}
	else
		{$partida=$_POST["partida"];};

if (empty($_POST["catastro"])){$catastro=null;}
	else
		{$catastro=$_POST["catastro"];};

if (empty($_POST["testimonio"])){$testimonio=null;}
	else
		{$testimonio=$_POST["testimonio"];};
if (empty($_POST["inscFecha"])){$inscFecha=null;}
	else
		{$inscFecha=$_POST["inscFecha"];};
if (empty($_POST["retiro"])){$retiro=null;}
	else
		{$retiro=$_POST["retiro"];};
if (empty($_POST["estado"])){$estado=null;}
	else
		{$estado=$_POST["estado"];};


        
         
        foreach ($_SESSION['CARRITO'] as $indice => $producto){
            $sentencia=$pdo->prepare("UPDATE lorenzo SET  
            
`escritura`=:escritura,
`folio`=:folio,
`objeto`=:objeto,
`iti`=:iti,
`ganancias`=:ganancias,
`comprobante`=:comprobante,
`escOAutorizante`=:escOAutorizante,
`impuestoFiscal`=:impuestoFiscal,
`sellos`=:sellos,
`monto`=:monto,
`vf`=:vf,
`partida`=:partida,
`catastro`=:catastro,
`testimonio`=:testimonio,
`retiro`=:retiro,
`estado`=:estado WHERE `ID`=:ID ");            
            

 $sentencia->bindParam(":ID",$ID);
 $sentencia->bindParam(":escritura",$escritura);
 $sentencia->bindParam(":folio",$folio);
 $sentencia->bindParam(":objeto",$objeto);
 $sentencia->bindParam(":iti",$iti);
 $sentencia->bindParam(":ganancias",$ganancias);
 $sentencia->bindParam(":comprobante",$comprobante);
 $sentencia->bindParam(":escOAutorizante",$escOAutorizante);
 $sentencia->bindParam(":impuestoFiscal",$impuestoFiscal);
 $sentencia->bindParam(":sellos",$sellos);
 $sentencia->bindParam(":monto",$monto);
 $sentencia->bindParam(":vf",$vf);
 $sentencia->bindParam(":partida",$partida);
 $sentencia->bindParam(":catastro",$catastro);
 $sentencia->bindParam(":testimonio",$testimonio);
 
 $sentencia->bindParam(":retiro",$retiro);
 $sentencia->bindParam(":estado",$estado);




            $sentencia->execute();

        }    
            
       

    }

?>


<script> 
<!--
window.location.replace('menu2.php'); 
//-->
</script>

