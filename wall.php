<!DOCTYPE html>
<html lang="es">
<head>
<?php include("./head.php"); ?>

<style>

[data-title]:hover:after {
    opacity: 1;
    transition: all 0.1s ease 0.5s;
    visibility: visible;
}
[data-title]:after {
    content: attr(data-title);
    transition: all .25s ease;
    background-color: #333;
    color: #fff;
    font-size: 14px;
    font-family: Raleway;
    position: absolute;
    padding: 2px 10px;
    left: 1em;
    bottom: -1em;
    white-space: pre-line;
    box-shadow: 1px 1px 3px #222222;
    opacity: 0;
    border: 1px solid #111111;
    z-index: 99999;
    visibility: hidden;
    border-radius: 6px;
    
}
[data-title] {
    position: relative;
}
</style>

</head>
  


<body>

<div class="w3-main w3-center" id="wcont">

<?php 

include("./config.php");

$conn;
$query = "SELECT id_massa, ciudad, logo_massa FROM `t_massas` WHERE logo_massa NOT LIKE '%wcdi%' ORDER BY `ciudad` ASC";

if ($result = mysqli_query($conn, $query)) 

{



    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
    
    
      echo " 
     

      <a href='./massa.php?massaid=".$row['id_massa']."' data-title='".$row['ciudad']."'alt='".$row['ciudad']."' target='_blank' >
       <img src=".$row['logo_massa']." alt='".$row['ciudad']."' class ='w3-border' style='width:100px;height:100px;margin: 2px auto; opacity: 1;'></a>";



}



    /* free result set */
    mysqli_free_result($result);
}
/* close connection */
mysqli_close($conn);

?>
</div>



</body>
<!-- End body -->
</html>
