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

<div class="w3-row-padding w3-center w3-margin-left">
  <div class="w3-col s4 w3-center">

<h5>Massas X Paises</h5>
<!-- Intro - massas x conti-->

<?php 
$conn;
$query1 = "SELECT p.pais, COUNT(m.id_massa) AS massas FROM t_paises p LEFT JOIN t_massas m ON p.id_pais = m.paisid GROUP BY p.pais ORDER BY massas DESC";


echo " <table>";

if ($result1 = mysqli_query($conn, $query1)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result1)) {
    
    
      echo "<tr>
      
   
      <td width=200px>".$row['pais']."</td>
      <td width=10em>".$row['massas']."</td>
      
    
      </tr>
    
      ";
        }
        
    /* free result set */
    mysqli_free_result($result1);
}

echo "</table> <br>
</div>
  <div class='w3-col s4 w3-center'>
  <h5>Massas X Contis</h5>
";



$query2 = "SELECT c.conti, COUNT(m.id_massa) AS massas FROM t_paises p LEFT JOIN t_massas m ON p.id_pais = m.paisid LEFT JOIN t_contis c ON p.contiid = c.id_conti GROUP BY c.conti ORDER BY massas DESC";


echo " <table>";

if ($result2 = mysqli_query($conn, $query2)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result2)) {
    
    
      echo "<tr>
      
   
      <td width=200px>".$row['conti']."</td>
      <td width=10em>".$row['massas']."</td>
      
    
      </tr>
    
      ";
        }
        
    /* free result set */
    mysqli_free_result($result2);
}

echo "</table>
<br>
<br>

<h5>Paises X Contis</h5>
";

$query3 = "SELECT c.conti, COUNT(p.id_pais) AS paises FROM t_paises p LEFT JOIN t_contis c ON p.contiid = c.id_conti GROUP BY c.conti ORDER BY paises DESC";


echo " <table>";

if ($result3 = mysqli_query($conn, $query3)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result3)) {
    
    
      echo "<tr>
      
   
      <td width=200px>".$row['conti']."</td>
      <td width=10em>".$row['paises']."</td>
      
    
      </tr>
    
      ";
        }
        
    /* free result set */
    mysqli_free_result($result3);
}

echo "</table>

</div>
</div>
";

/* close connection */
mysqli_close($conn);


?>
<br><br>

<div class="w3-bar">
<a href="http://bt.free.nf/estad.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Estad.</button></a>
<a href="http://bt.free.nf/update.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Update</button></a>
<a href="http://bt.free.nf/kins.php"><button class="w3-bar-item w3-button w3-border w3-black w3-hover-teal w3-round-large" style="width:33.3%">Insert</button></a>
</div>



</div>


<?php include("./footer.php"); ?>
   
</body>
</html>
