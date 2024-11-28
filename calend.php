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


/* http://php.net/manual/es/datetime.formats.relative.php */
function daysByPeriod($startDay,$endDay,$inter){
  $start    = new DateTime($startDay);
  $end      = new DateTime($endDay);

  // Arreglo para incluir la fecha fin al periodo
  $end->setTime(0,0,1);

  $interval = DateInterval::createFromDateString($inter);
  $period = new DatePeriod($start, $interval, $end);

  foreach ($period as $dt) {
    echo $dt->format("l Y-m-d") . "<br>";
  }
}



$dateStart1='20240105';
$dateEnd='20241231';
echo "<strong>Primer viernes</strong> del mes del $dateStart1 al $dateEnd <br>";
// Está incluyendo el día 2017-07-06 que no es viernes
// No está pintando el día 2017-07-07 que es viernes
daysByPeriod($dateStart1,$dateEnd,'first friday of next month');


$dateStart5='20240106';
echo "<strong>Primer Sábado</strong> del mes del $dateStart5 al $dateEnd<br>";
daysByPeriod($dateStart5,$dateEnd,'first saturday of next month');


$dateStart2='20240126';
$dateEnd2='20241231';
echo "<strong>Último viernes</strong> del mes del $dateStart2 al $dateEnd2<br>";
// Está incluyendo el día 2017-05-25 que no es viernes
// No está pintando el día 2017-05-26 que es viernes
daysByPeriod($dateStart2,$dateEnd2,'last friday of next month');

$dateStart3='20170805';
$dateEnd3='20241231';
echo "Cada <strong>mes</strong> del $dateStart3 al $dateEnd3<br>";
// Aquí incluye la fecha inicio sin problema dentro el rango
daysByPeriod($dateStart3,$dateEnd3,'1 month'); 

$dateStart4='20170622';
$dateEnd4='20241231';
echo "Los <strong>viernes</strong> del $dateStart4 al $dateEnd4<br>";
// Está incluyendo el día 2017-06-22 que no es viernes
// Aquí incluye la fecha inicio sin problema dentro el rango
daysByPeriod($dateStart4,$dateEnd4,'next friday'); 

?>


<!--/* close connection */  -->
<?php mysqli_close($conn);?>


<!-- End page content -->
</div>




    <?php include("./footer.php"); ?>


</body>
</html>


