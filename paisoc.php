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
<a href="./paisoc.php?paisid=38"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Australia</div></a>
<a href="./paisoc.php?paisid=39"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Nueva Zelanda</div></a>
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

