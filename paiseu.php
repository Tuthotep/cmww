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
<div class="w3-main" style="margin-left:340px;margin-right:40px" id="wcont">
<!-- Header -->
<?php include("./header.php"); ?>
<!-- Body content -->

<!-- Menu Countries -->
<div class="w3-bar w3-black w3-margin-bottom">
<a href="./paiseu.php?paisid=73"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Albania</div></a>
<a href="./paiseu.php?paisid=5"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Alemania</div></a>
<a href="./paiseu.php?paisid=6"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Austria</div></a>
<a href="./paiseu.php?paisid=23"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Bélgica</div></a>
<a href="./paiseu.php?paisid=7"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Bielorrusia</div></a>
<a href="./paiseu.php?paisid=59"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Bulgaria</div></a>
<a href="./paiseu.php?paisid=8"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Eslovaquia</div></a>
<a href="./paiseu.php?paisid=1"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">España</div></a>
<a href="./paiseu.php?paisid=9"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Finlandia</div></a>
<a href="./paiseu.php?paisid=10"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Francia</div></a>
<a href="./paiseu.php?paisid=11"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Grecia</div></a>
<a href="./paiseu.php?paisid=12"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Hungría</div></a>
<a href="./paiseu.php?paisid=13"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Irlanda</div></a>
<a href="./paiseu.php?paisid=14"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Italia</div></a>
<a href="./paiseu.php?paisid=15"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Lituania</div></a>
<a href="./paiseu.php?paisid=71"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Luxemburgo</div></a>
<a href="./paiseu.php?paisid=72"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Moldavia</div></a>
<a href="./paiseu.php?paisid=16"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Polonia</div></a>
<a href="./paiseu.php?paisid=4"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Portugal</div></a>
<a href="./paiseu.php?paisid=17"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Reino Unido</div></a>
<a href="./paiseu.php?paisid=18"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Rumania</div></a>
<a href="./paiseu.php?paisid=19"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">República Checa</div></a>
<a href="./paiseu.php?paisid=20"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Rusia</div></a>
<a href="./paiseu.php?paisid=21"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Suecia</div></a>
<a href="./paiseu.php?paisid=22"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Suiza</div></a>
<a href="./paiseu.php?paisid=81"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Ucrania</div></a>
</div>

<!-- Intro - massas x pais-->

<?php 

$conn;
$query = "SELECT t_massas.id_massa, t_massas.logo_massa, t_massas.ciudad, t_massas.hora, t_massas.lugar, t_paises.pais, t_contis.conti, t_massas.img_lugar FROM t_massas LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti WHERE t_paises.id_pais = $_GET[paisid] ORDER BY ciudad";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
    
    
      echo " <table>
      <tr>

      
      <td width=10em style='text-align:center'><a href='./massa.php?massaid=".$row['id_massa']."' target='_blank'><img class=tabimg src=".$row['logo_massa']."></a></td>
      <td width=300em>".$row['ciudad']."</td>
      <td width=200em>".$row['hora']."</td>
      <td width=100em>".$row['lugar']."</td>
      <td width=10em style='text-align:center'><img class=tabimg src=".$row['img_lugar']."></td>
      </tr>
      
      ";
        }
    /* free result set */
    mysqli_free_result($result);
}

echo "</table>";
/* close connection */
mysqli_close($conn);




?>









</div>
<!-- End page content -->


    <?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
