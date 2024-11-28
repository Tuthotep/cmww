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
<div class="w3-main" style="margin-left:340px;margin-right:40px" id="wcont">
<!-- Header -->
<?php include("./header.php"); ?>
<!-- Body content -->

<?php 

$pais = $_POST['pais'];
$contiid = $_POST['contiid'];

$conn;
$query = "INSERT INTO t_paises (id_pais, pais, contiid, comentp) VALUES (NULL, '$pais', '$contiid', '')";

if(mysqli_query($conn, $query)) {
    echo '<p>Pais insertado con éxito</p>';
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
