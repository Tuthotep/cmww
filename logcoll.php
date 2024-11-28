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


<?php 
$conn;
$query1 = "SELECT id_massa, ciudad, logo_massa FROM `t_massas` ORDER BY `ciudad` ASC";

$query2 = "SELECT id_massa, ciudad, logo_massa FROM `t_massas` WHERE `logo_massa` NOT LIKE '%gral%'";


if ($result = mysqli_query($conn, $query2)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
    
    
      echo " 
      

      <a href='./massa.php?massaid=".$row['id_massa']."' target='_blank'>
      <img src=".$row['logo_massa']." alt='".$row['ciudad']."' class ='w3-border w3-padding' style='width:150px;height:150px;margin:3px;'></a>";



}
        
    /* free result set */
    mysqli_free_result($result);
}
echo "</div>";
/* close connection */
mysqli_close($conn);

?>




</div>
<!-- End page content -->

<?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
