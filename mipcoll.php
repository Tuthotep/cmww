<!DOCTYPE html>
<html lang="es">
<?php include("./config.php"); ?>

<head>
  <?php include("./head.php"); ?>
</head>


<body>
<!-- Sidebar/menu -->



<?php include("./navi.php"); ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-center" style="margin-left:340px;margin-right:40px" id="wcont">
<!-- Header -->
<?php include("./header.php"); ?>
<!-- Body content -->



<p>
La Criticona es un evento ciclista anual que se celebra cada vez en una ciudad española diferente, 
elegida por votación popular.
En él se reúnen miles de personas para celebrar y promover el uso de la bicicleta. 
Es un encuentro de Masas Críticas de todo el mundo,
 y si llegan de otros planetas —en bici, claro— también son bienvenidos.

La primera edición de la Criticona en España se realizó en Madrid en el 2009 y
 reunió a más de 4000 ciclistas. 
 Este evento se inspira en la Ciemmona de Roma, Italia, y es más que nada,
  una celebración ciclista para impulsar la movilidad sostenible.
</p>

<p>

La Criticona es un lugar de encuentro para los participantes
de las más diversas masas críticas del mundo y de ciclistas urbanos en general.
"Criticona" es el nombre que se le dá en España. 
En Italia, que también organizan su massacritica interplanetaria, se la conoce como "Ciemmona",
mientras que en Francia la llaman "Velorution Universelle"
</p>
<hr style="width:100%;border:2px solid darkolivegreen" class="w3-round">
<p>

<p class="w3-text-teal w3-large" style="font-family:Permanent Marker">
<a href="https://criticona.noblogs.org/" target="_blank">
España - Criticona 2025 - En Valladolid</a>
</p>

<p>Todavia no hay fechas decididas, pero están trabajando en ello.
    Apenas tengamos más info, se irá compartiendo
  </p>
  <br>

<p class="w3-text-teal w3-large" style="font-family:Permanent Marker">
<a href="https://ciemmona.noblogs.org/" target="_blank">
Italia - Ciemmona 2025 - </a>
</p>

<p>Todavia no hay fechas decididas, pero están trabajando en ello.
    Apenas tengamos más info, se irá compartiendo
</p>
<br>

<p class="w3-text-teal w3-large" style="font-family:Permanent Marker">
<a href="https://velorutionuniverselle.org/" target="_blank">
Francia - Velorution 2025 - </a>
</p>

<p>Todavia no hay fechas decididas, pero están trabajando en ello.
    Apenas tengamos más info, se irá compartiendo
</p>
<br>

</p>
<hr style="width:100%;border:2px solid darkolivegreen" class="w3-round">
<?php 
$directorio = 'img/ips';


$ficheros = array_diff(scandir($directorio), array('..', '.'));

rsort($ficheros);

foreach($ficheros as $file)
{
  
echo "
<a href='../img/ips/".$file."' target='_blank'>
<img src=../img/ips/".$file." alt='".$file."' class ='w3-border w3-padding' style='width:200px;height:200px;margin:3px;'></a>";

};


?>



</div>
<!-- End page content -->

<?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
