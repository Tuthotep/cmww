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
<a href="./paisas.php?paisid=80"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Bangladesh</div></a>
<a href="./paisas.php?paisid=26"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">China</div></a>
<a href="./paisas.php?paisid=27"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Corea del Sur</div></a>
<a href="./paisas.php?paisid=28"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Filipinas</div></a>
<a href="./paisas.php?paisid=29"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">India</div></a>
<a href="./paisas.php?paisid=30"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Indonesia</div></a>
<a href="./paisas.php?paisid=31"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Israel</div></a>
<a href="./paisas.php?paisid=32"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Líbano</div></a>
<a href="./paisas.php?paisid=33"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Malasia</div></a>
<a href="./paisas.php?paisid=34"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Pakistán</div></a>
<a href="./paisas.php?paisid=35"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Singapur</div></a>
<a href="./paisas.php?paisid=36"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Tailandia</div></a>
<a href="./paisas.php?paisid=37"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Turquia</div></a>
</div>



<?php 
$conn;
$query = "SELECT t_massas.id_massa, t_massas.logo_massa, t_massas.ciudad, t_massas.hora, t_massas.lugar, t_paises.pais, t_contis.conti, t_massas.img_lugar FROM t_massas LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti WHERE t_contis.id_conti = 3 ORDER BY ciudad";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
    
    
      echo " <table>
      
      <tr>
      
      <td width=10em style='text-align:center'><a href='./massa.php?massaid=".$row['id_massa']."' target='_blank'><img class=tabimg src=".$row['logo_massa']."></a></td>
      <td width=100em>".$row['ciudad']."</td>
      <td width=200em>".$row['hora']."</td>
      <td width=100em>".$row['lugar']."</td>
      <td width=100em>".$row['pais']."</td>
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


<!-- End page content -->


</div>




    <?php include("./footer.php"); ?>

</body>
</html>
