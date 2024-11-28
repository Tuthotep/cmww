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

echo 'Datos guardados:<br>';

$logo_massa = $_POST['logo_massa'];
echo $logo_massa,'<br>';


$ciudad = $_POST['ciudad'];
echo $ciudad,'<br>';

$id_massa = $_POST['id_massa'];
echo $id_massa,'<br>';

$paisid = $_POST['paisid'];
echo $paisid,'<br>';

$hora= $_POST['hora'];
echo $hora,'<br>';

$lugar = $_POST['lugar'];
echo $lugar,'<br>';

$coord = $_POST['coord'];
echo $coord,'<br>';

$web = $_POST['web'];
echo $web,'<br>';

$face = $_POST['face'];
echo $face,'<br>';

$twitter = $_POST['twitter'];
echo $twitter,'<br>';

$insta = $_POST['insta'];
echo $insta,'<br>';


$tiktok = $_POST['tiktok'];
echo $tiktok,'<br>';

$telegram = $_POST['telegram'];
echo $telegram,'<br>';

$whatsapp = $_POST['whatsapp'];
echo $whatsapp,'<br>';

$comentarios = $_POST['comentarios'];
echo $comentarios,'<br>';

$img_lugar = $_POST['img_lugar'];
echo $img_lugar,'<br>';





$sql = "UPDATE t_massas 
        SET 
        logo_massa = '$logo_massa',
        ciudad = '$ciudad',
        hora = '$hora',
        lugar = '$lugar',
        coord = '$coord',
        web = '$web',
        face = '$face',
        twitter= '$twitter',
        insta = '$insta',
        tiktok = '$tiktok',
        telegram = '$telegram',
        whatsapp = '$whatsapp',
        comentarios = '$comentarios',
        img_lugar = '$img_lugar'
         WHERE `t_massas`.`id_massa` = '$id_massa';";


echo $sql,'<br>';

$conn;

if(mysqli_query($conn, $sql)) {
    echo '<p>Datos actualizados con éxito</p>';
  } else {
    echo '<p>Hubo un error al actualizar: ' . $conn->error . '</p>';
  }





/* close connection */
mysqli_close($conn);
?>

<div class="w3-bar">
<a href="http://bt.free.nf/estad.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Estad.</button></a>
<a href="http://bt.free.nf/update.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Update</button></a>
<a href="http://bt.free.nf/kins.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Insert</button></a>
</div>

<!-- End page content -->
</div>

    <?php include("./footer.php"); ?>


</body>
</html>
