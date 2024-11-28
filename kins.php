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

Insertar pais:<br>



<form method='post' action='/inspais.php'>
<input type='text' name='pais'><br>
<select name='contiid' style='margin-bottom: 10px;
font: revert;
outline: 0;
background: teal;
color: black;
border: 1px solid #9E9E9E;
padding: 4px;
border-radius: 10px;
box-sizing: content-box;
overflow: auto;'>
    <option value='1'>Africa</option>
    <option value='2'>America</option>
    <option value='3'>Asia</option>
    <option value='4'>Europa</option>
    <option value='5'>Oceania</option>
</select><br>
<input type='submit'>
</form>


<hr>

<?php 
$conn;
$query = "SELECT id_pais, pais
FROM t_paises
ORDER BY pais ASC";

$result = mysqli_query($conn, $query);
?>
Insertar ciudad/masa:<br>
<form method='post' action='/insmasa.php'>
<input type='text' name='ciudad'><br>

<select id='id_pais' name='id_pais' style='margin-bottom: 10px;
font: revert;
outline: 0;
background: teal;
color: black;
border: 1px solid #9E9E9E;
padding: 4px;
border-radius: 10px;
box-sizing: content-box;
overflow: auto;'>

<?php 
    while ($cat = mysqli_fetch_array($result)) {
        //echo $cat;
      ?>
        <option value="<?php echo $cat['id_pais']?>"><?php echo $cat['pais'] ?></option>
        <?php
    }
    
    echo "</select> 
    <br>
    ";

    ?>

<input type='hidden' name='logo_masa' value='../img/wcdi.jpg' readonly>
<input type='hidden' name='img_lugar' value='../img/wcdi.jpg' readonly>
<input type='submit'>
</form>


<?php
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

</div>
<!-- End page content -->



<?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
