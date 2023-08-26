<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
require("class.phpmailer.php");
require("class.smtp.php");
?>

<hr>
 

<?php 
//print_r ($_SESSION['FORMULARIO']);


$personas[0]=$_SESSION['FORMULARIO'][0];


$tit[0]=$_SESSION['FORMULARIO'][0];

foreach( $tit as $indice=>$product) {


  $saraza=$product['Apellido']." ".$product['Nombres'];
 //print_r($saraza)  ;
 $sentencia=$pdo->prepare("INSERT INTO `lorenzo` (`objeto`,`fecha`, `contratante`) 
           VALUES (:formulario,now(),:contratante);");

 
$sentencia->bindParam(":formulario",$product['Formulario']);
$sentencia->bindParam(":contratante",$saraza);
$sentencia->execute();

  


  };



 $idVenta=$pdo->lastInsertID();

 


foreach( $_SESSION['FORMULARIO'] as $indice=>$product) {
$sentencia=$pdo->prepare("INSERT INTO `Personas` ( `idOperacion`,`Apellido`,  `Nombre`,
           `Nacionalidad`,  `Nacimiento`,   `CUIL` , `DNI` ,  `EstadoCivil`,
              `NombreApellidoConyuge`,  `NombreApellidoPadre`,   `NombreApellidoMadre`,   `Domicilio`,   `Localidad` ,  `Partido`,   `WhatsApp`,  `Observaciones`   ) 
            VALUES (:o,:u,:d,:t,:cua,:cin,:sei,:sie,:och,:nue,:onc,:doc,:trec,:cato,:quin,:diesi);");




           
//$sentencia->bindParam(":o",$idVenta);



$sentencia->bindParam(":o",$idVenta);
$sentencia->bindParam(":u",$product['Apellido']);
$sentencia->bindParam(":d",$product['Nombres']);
$sentencia->bindParam(":t",$product['Nacionalidad']);
$sentencia->bindParam(":cua",$product['Nacimiento']);
$sentencia->bindParam(":cin",$product['CUIL']);
$sentencia->bindParam(":sei",$product['DNI']);
$sentencia->bindParam(":sie",$product['Estado']);
$sentencia->bindParam(":och",$product['Conyugue']);
$sentencia->bindParam(":nue",$product['Padre']);
$sentencia->bindParam(":onc",$product['Madre']);
$sentencia->bindParam(":doc",$product['Domicilio']);
$sentencia->bindParam(":trec",$product['Localidad']);
$sentencia->bindParam(":cato",$product['Partido']);
$sentencia->bindParam(":quin",$product['Whatsapp']);
$sentencia->bindParam(":diesi",$product['Observaciones']);




$sentencia->execute();



//(:u,:d,:t,:cua,:cin,:sei,:sie,:och,:nue,:onc,:doc,:trec,:cato,:quin,:diesi)
//$sentencia->bindParam(":o",$idVenta);
//$sentencia->bindParam(":u",$product['Apellido']);
//$sentencia->bindParam(":d",$product['Nombres']);
//$sentencia->bindParam(":t",$product['Nacionalidad']);
//$sentencia->bindParam(":cua",$product['Nacimiento']);
//$sentencia->bindParam(":cin",$product['CUIL']);
//$sentencia->bindParam(":sei",$product['DNI']);
//$sentencia->bindParam(":sie",$product['Estado']);
//$sentencia->bindParam(":och",$product['Conyugue']);
//$sentencia->bindParam(":nue",$product['Padre']);
//$sentencia->bindParam(":onc",$product['Madre']);
//$sentencia->bindParam(":doc",$product['Domicilio']);
//$sentencia->bindParam(":trec",$product['Localidad']);
//$sentencia->bindParam(":cato",$product['Partido']);
//$sentencia->bindParam(":quin",$product['Whatsapp']);
//$sentencia->bindParam(":diesi",$product['Observaciones']);


}



 
?>

<!--  Mandar pedido por mail -->

<?php
/**
 * @version 1.0
 */


// Valores enviados desde el formulario

$cabecera[0]=$_SESSION['FORMULARIO'][0];

foreach( $cabecera as $indice=>$product) {
    $nombre= "Pedido de ".$product['Formulario']." para ".$product['Apellido']." ".$product['Nombres'];


  };

$requiriente=1;

$email = "info@cumar.com.ar";




$mensaje = '<html><head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><style type="text/css">;ol{margin:0;padding:0}table td,table th{padding:0}.c3{-webkit-text-decoration-skip:none;color:#000000;font-weight:400;text-decoration:underline;vertical-align:baseline;text-decoration-skip-ink:none;font-size:12pt;font-family:"Arial Narrow";font-style:normal}.c0{-webkit-text-decoration-skip:none;color:#000000;font-weight:700;text-decoration:underline;vertical-align:baseline;text-decoration-skip-ink:none;font-size:12pt;font-family:"Arial Narrow";font-style:normal}.c5{color:#000000;font-weight:700;text-decoration:none;vertical-align:baseline;font-size:12pt;font-family:"Arial Narrow";font-style:normal}.c2{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:12pt;font-family:"Arial Narrow";font-style:normal}.c1{padding-top:0pt;padding-bottom:0pt;line-height:1.0;text-align:justify}.c4{background-color:#ffffff;max-width:408.2pt;padding:102pt 51pt 40pt 136.1pt}.title{padding-top:24pt;color:#000000;font-weight:700;font-size:36pt;padding-bottom:6pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:18pt;color:#666666;font-size:24pt;padding-bottom:4pt;font-family:"Georgia";line-height:1.0;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:10pt;font-family:"Times New Roman"}p{margin:0;color:#000000;font-size:10pt;font-family:"Times New Roman"}h1{padding-top:24pt;color:#000000;font-weight:700;font-size:24pt;padding-bottom:6pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-weight:700;font-size:18pt;padding-bottom:4pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:14pt;color:#000000;font-weight:700;font-size:14pt;padding-bottom:4pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:12pt;color:#000000;font-weight:700;font-size:12pt;padding-bottom:2pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:11pt;color:#000000;font-weight:700;font-size:11pt;padding-bottom:2pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:10pt;color:#000000;font-weight:700;font-size:10pt;padding-bottom:2pt;font-family:"Times New Roman";line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}</style></head><body class="c4">'; 
    foreach( $cabecera as $indice=>$producto) {
      $mensaje .= "<br>";
      $mensaje .= '<p class="c1"><span class="c2"> Se ha generado una solicitud de: '.$producto['Formulario'].'</span>';
      $mensaje .= '<p class="c1"><span class="c2"> Solicitud generada por :'.$producto['Apellido'].' '.$producto['Nombres'].'</span>';
      $mensaje .= '<p class="c1"><span class="c2"> Whatsapp: '.$producto['Whatsapp'] .'</span>';
      $mensaje .= '<p class="c1"><span class="c2"> Observaciones: '.$producto['Observaciones'] .'</span>';      
     
      

     
      };
 
      foreach( $_SESSION['FORMULARIO'] as $indice=>$producto) {
       
      $mensaje .= '<p class="c1"><span class="c2"> Requirente Nº:'.$requiriente.' </span>';
      $mensaje .= '<p class="c1"><span class="c2"> '.$producto['Nombres'].' '.$producto['Apellido'].',de nacionalidad'.$producto['Nacionalidad'].' , nacido el '.$producto['Nacimiento'].', quien manifiesta</span>';
      $mensaje .= '<p class="c1"><span class="c2"> ser casado en primeras nupcias con '.$producto['Conyugue'].', justificando su identidad con la  </span>';
      $mensaje .= '<p class="c1"><span class="c2"> exhibición del Documento Nacional de Identidad número '.$producto['DNI'].', que en copia acompaño, </span>';
      $mensaje .= '<p class="c1"><span class="c2"> domiciliado en '.$producto['Domicilio'].', '.$producto['Localidad'].', Partido de '.$producto['Partido'];
      $mensaje .= "</tr>";
      $requiriente++;
    };






// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1370141.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "info@cumar.com.ar";  // Mi cuenta de correo
$smtpClave = "Rosales1864";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "info@lorenzomendy.com.ar";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Solicitud desde Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br /><br />Solicitud desde Web <br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Lorenzo Mendy "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 


?>

<!--<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js">
Mercadopago.setPublishableKey("TEST-98638d24-eb00-4dd5-82d8-4e573fac6a80");
</script> -->
<div class="jumbotron text-center">
    <!-- Set up a container element for the button -->
    
    <h1 class="display-4">¡Enviado!</h1>
    <hr class="my-4">
    <div id="paypal-button-container"></div>
    <p class="lead">Cargaste el formulario n° : <?php echo ($idVenta); ?>
        
        



    </p>
    
   
        <strong>(Si te equivocaste : cunier@gmail.com )</strong>
    </p>
</div>











<?php
unset($_SESSION['FORMULARIO']);



include 'templates/pie.php';
?>