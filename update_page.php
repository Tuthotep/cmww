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





<?php 

$idciudad = $_POST['idciudad'];


$conn;
$query = "SELECT * FROM `t_massas` WHERE `id_massa` = $idciudad ORDER BY `ciudad` ASC";

$result = mysqli_query($conn, $query);

/* fetch associative array */
while ($row = mysqli_fetch_array($result)) {
    
    
  echo " <form action='/update_ciu.php' method='post' name='upmasa' class='position-static'><br>

  <div class='w3-row'>


  <div class='w3-half'>

 <a href='./massa.php?massaid=".$row['id_massa']."' target='_blank'><img class=tabimg src=".$row['logo_massa']."></a>
 </div>
 <div class='w3-half'>
Ruta al logo:<input type='text' name='logo_massa' value='".$row['logo_massa']."'><br>
</div>
</div>
<div class='w3-row'>
Ciudad:<input type='text' name='ciudad' style='min-width: 500px' value='".$row['ciudad']."'><br>
Id Masa:<input type='text' name='id_massa' readonly value='".$row['id_massa']."'><br>
Id Pais:<input type='text' name='paisid' readonly value='".$row['paisid']."'><br>

</div>
<div class='w3-row'>
Hora:<input type='text' name='hora' value='".$row['hora']."'><br>
Lugar:<input type='text' name='lugar' value='".$row['lugar']."'><br>
Mapa:<input type='text' name='coord' value='".$row['coord']."'><br>
</div>
<div class='w3-row'>
Web:<input type='text' name='web' value='".$row['web']."'><br>
Facebook<input type='text' name='face' value='".$row['face']."'><br>
Twitter<input type='text' name='twitter' value='".$row['twitter']."'><br>
Instagram<input type='text' name='insta' value='".$row['insta']."'><br>
TikTok<input type='text' name='tiktok' value='".$row['tiktok']."'><br>
Telegram<input type='text' name='telegram' value='".$row['telegram']."'><br>
Whatsapp<input type='text' name='whatsapp' value='".$row['whatsapp']."'><br>
</div>
<div class='w3-row'>
Comentarios:<input type='text' name='comentarios' value='".$row['comentarios']."'><br>
</div>
<div class='w3-row'>
<a href='./massa.php?massaid=".$row['id_massa']."' target='_blank'><img class=tabimg src=".$row['img_lugar']."></a>
Ruta img lugar:<input type='text' name='img_lugar' value='".$row['img_lugar']."'<br>

  ";
    }

    echo "<br>
    <input type='submit'>


    </div>
    </form>";
   
    mysqli_free_result($result);

/* close connection */
mysqli_close($conn);
?>

<!-- End page content -->
</div>

    <?php include("./footer.php"); ?>


</body>
</html>
