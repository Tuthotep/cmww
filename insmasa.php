<!DOCTYPE html>
<html lang="es">
<?php include("./config.php"); ?>

<head>
  <?php include("./head.php"); ?>
</head>


<body>
<!-- Sidebar/menu -->

<button class="w3-button w3-circle w3-black w3-right" style="position: fixed;
  top: 0; right: 0;" onclick="window.close();">X</button> 

<?php include("./navi.php"); ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-center" style="margin-left:340px;margin-right:40px" id="wcont">
<!-- Header -->
<?php include("./header.php"); ?>
<!-- Body content -->




<?php 

$ciudad = $_POST['ciudad'];
$paisid = $_POST['id_pais'];
$logo_masa = $_POST['logo_masa'];
$img_lugar = $_POST['img_lugar'];

$conn;
$query = "INSERT INTO t_massas (id_massa, ciudad, paisid, logo_massa, img_lugar) VALUES (NULL, '$ciudad', '$paisid', '$logo_masa', '$img_lugar')";

print_r($query);

if(mysqli_query($conn, $query)) {
    echo '<p>Datos actualizados con éxito</p>';
  } else {
    echo '<p>Hubo un error al actualizar: ' . $conn->error . '</p>';
  }




echo "</div>";
/* close connection */
mysqli_close($conn);

?>


<div class="w3-bar">
<a href="http://bt.free.nf/estad.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Estad.</button></a>
<a href="http://bt.free.nf/update.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Update</button></a>
<a href="http://bt.free.nf/kins.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Insert</button></a>
</div>

</div>
<!-- End page content -->

<?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
