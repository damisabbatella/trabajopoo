<?php
//constructores de objetos
include"class/presupuesto.inc";
$presupuBasico=new presupuesto;
$presupuBasico->prec_metodo("20");
$presupuBasico->pag_metodo("Página básica");
$presupuBasico->host_metodo("DonWeb");
$presupuBasico->soport_metodo("13");

$presupuNormal=new Presupuesto;
$presupuNormal->prec_metodo("40");
$presupuNormal->pag_metodo("Páginas normal");
$presupuNormal->host_metodo("DonWeb");
$presupuNormal->soport_metodo("44");

$presupuPremium=new Presupuesto;
$presupuPremium->prec_metodo("1.000");
$presupuPremium->pag_metodo("Páginas con administrador de contenido");
$presupuPremium->host_metodo("DonWeb");
$presupuPremium->soport_metodo("89");


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilo.css">
	<title>Tabla compu</title>
</head>
<body>
<div class="container-fluid  mx-0">

<div class="row cf">
<div class="col-12">
	<p class="text-white display-4 h1 mx-auto"><b>Presupuestos de nuestro servicio</b></p>
	</div>
	<div class="col-12"><hr style="border:1px solid white;"></div>
</div>
	
	
<div class="row">
	
	<div class="offset-1 col-6 mb-4">
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>#</th>
      <th>Basico</th>
      <th>Normal</th>
      <th>Premium</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Precio</th>
      <td>$ <?php $presupuBasico -> imprimirprecio()?></td>
      <td>$ <?php $presupuNormal ->imprimirprecio()?></td>
      <td>$ <?php $presupuPremium -> imprimirprecio()?></td>
    </tr>
    <tr>
      <th scope="row">Paginas</th>
      <td><?php $presupuBasico -> imprimirpagina()?></td>
      <td><?php $presupuNormal -> imprimirpagina()?></td>
      <td><?php $presupuPremium ->imprimirpagina()?></td>
    </tr>
    <tr>
      <th scope="row">Hosting</th>
      <td><?php $presupuBasico -> imprimirhosting()?></td>
      <td><?php $presupuNormal -> imprimirhosting()?></td>
      <td><?php $presupuPremium -> imprimirhosting()?></td>
    </tr>
    <tr>
      <th scope="row">Soporte</th>
      <td><?php $presupuBasico ->imprimirsoporte()?></td>
      <td><?php $presupuNormal -> imprimirsoporte()?></td>
      <td><?php $presupuPremium -> imprimirsoporte()?></td>
    </tr>
  </tbody>
</table>
</div>
<div class="col-4">
	<img src="images/homer.png">
	</div>
</div>
</div>
<div class="container-fluid mx-0">

<div class="row ">
<div class="offset-2 col-8 bg-black py-3" style="border-radius: 50px;">
	<p class="h5 text-white text-center">Copyright © Todos los Derechos Reservados</p>
</div>
</div>
</div>
</body>
</html>
