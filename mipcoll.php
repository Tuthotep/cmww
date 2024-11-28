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
$directorio = 'img/ips';


$ficheros = array_diff(scandir($directorio), array('..', '.'));

rsort($ficheros);

foreach($ficheros as $file)
{
  
echo "
<a href='../img/ips/".$file."' target='_blank'>
<img src=../img/ips/".$file." alt='".$file."' class ='w3-border w3-padding' style='width:200px;height:200px;margin:3px;'></a>";

};


?>



</div>
<!-- End page content -->

<?php include("./footer.php"); ?>

   
</body>
<!-- End body -->
</html>
