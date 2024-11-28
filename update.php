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
$conn;
$query = "SELECT id_massa, ciudad
FROM t_massas
ORDER BY ciudad ASC";

$result = mysqli_query($conn, $query);

echo "Seleccionar ciudad de la masa:
<br>

<form action='/update_page.php' method='post' name='upciumasa' class='position-static'>
<select id='id_massa' name='idciudad' style='margin-bottom: 10px;
font: revert;
outline: 0;
background: teal;
color: black;
border: 1px solid #9E9E9E;
padding: 4px;
border-radius: 10px;
box-sizing: content-box;
overflow: auto;'>";



    while ($cat = mysqli_fetch_array($result)) {
        //echo $cat;
      ?>
        <option value="<?php echo $cat['id_massa']?>"><?php echo $cat['ciudad'] ?></option>
        <?php
    }
    
    echo "</select> 
    <br>
    <input type='submit'>

    </form>";

 
    
    mysqli_free_result($result);

/* close connection */
mysqli_close($conn);
?>
<br><br>

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
