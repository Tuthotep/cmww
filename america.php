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
<a href="./paisam.php?paisid=41"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Argentina</div></a>
<a href="./paisam.php?paisid=60"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Bolivia</div></a>
<a href="./paisam.php?paisid=42"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Brasil</div></a>
<a href="./paisam.php?paisid=43"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Canadá</div></a>
<a href="./paisam.php?paisid=44"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Chile</div></a>
<a href="./paisam.php?paisid=45"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Colombia</div></a>
<a href="./paisam.php?paisid=46"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Costa Rica</div></a>
<a href="./paisam.php?paisid=47"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Cuba</div></a>
<a href="./paisam.php?paisid=48"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Ecuador</div></a>
<a href="./paisam.php?paisid=49"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">El Salvador</div></a>
<a href="./paisam.php?paisid=50"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Estados Unidos</div></a>
<a href="./paisam.php?paisid=51"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Guatemala</div></a>
<a href="./paisam.php?paisid=52"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">México</div></a>
<a href="./paisam.php?paisid=53"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Nicaragua</div></a>
<a href="./paisam.php?paisid=54"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Paraguay</div></a>
<a href="./paisam.php?paisid=55"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Perú </div></a>
<a href="./paisam.php?paisid=56"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Puerto Rico</div></a>
<a href="./paisam.php?paisid=57"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Uruguay</div></a>
<a href="./paisam.php?paisid=58"><div class="w3-bar-item w3-text-light-green w3-hover-pale-green w3-hover-text-green">Venezuela</div></a>
</div>

<!-- Intro - massas x conti-->

<?php 
$conn;
$query = "SELECT t_massas.id_massa, t_massas.logo_massa, t_massas.ciudad, t_massas.hora, t_massas.lugar, t_paises.pais, t_contis.conti, t_massas.img_lugar FROM t_massas LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti WHERE t_contis.id_conti = 2 ORDER BY ciudad";

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





</div>



    <?php include("./footer.php"); ?>

   
</body>
</html>
