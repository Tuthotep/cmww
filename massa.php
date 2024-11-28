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


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-center" style="margin-left:40px;margin-right:40px" id="wcont">
<!-- Header -->
<div class="w3-container" id="header">
<h1 class="w3-xxlarge w3-center font-effect-shadow-multiple w3-text-black" style="font-family:Permanent Marker"><b>CRITICALMASS WORLDWIDE</b></h1>
<h2 class="w3-large w3-text-light-green w3-center" style="font-family:Rancho"><b>No bloqueamos el tráfico, ¡¡¡SOMOS TRÁFICO!!!</b><br><b>¡¡¡MENOS HUMOS!!!, quema grasa, no gasolina.</b></h2>
<hr style="width:100%;border:5px solid darkolivegreen" class="w3-round">
</div>
<!-- Body content -->


<?php 
$conn;
$query = "SELECT t_massas.*,t_paises.pais, t_contis.conti FROM t_massas LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti WHERE t_massas.id_massa = $_GET[massaid]";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
    
    
      echo " 
      <h4>".$row['ciudad']."</h4>
      <div class='w3-row w3-center'>
      <div class='w3-container w3-third w3-center'>
      <img src=".$row['logo_massa']." style='width:250px;height:250px'>
      </div>
      <div class='w3-container w3-third w3-center'>

      ";


      if(!empty ($row['web'])) {  

      echo " 
      
      <a href=".$row['web']." target='_blank'>
      <img src='./img/globe-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      
      ";
    }

    if(!empty ($row['face'])) {  

        echo " 
      <a href=".$row['face']." target='_blank'>
      <img src='./img/fb-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      ";
    }

    if(!empty ($row['twitter'])) {  

        echo " 
      <a href=".$row['twitter']." target='_blank'>
      <img src='./img/twitter-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      ";
    }

    if(!empty ($row['insta'])) {  

        echo " 
      <a href=".$row['insta']." target='_blank'><img src='../../img/instag-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      ";
    }

    if(!empty ($row['tiktok'])) {  

        echo " 

     <a href=".$row['tiktok']." target='_blank'>
      <img src='./img/tiktok-icon.png'class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      ";
    }

    if(!empty ($row['telegram'])) {  

        echo " 

      <a href=".$row['telegram']." target='_blank'>
      <img src='./img/telegram-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      ";
    }

    if(!empty ($row['vk'])) {  

      echo " 

    <a href=".$row['vk']." target='_blank'>
    <img src='./img/vk-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
    ";
  }

      if(!empty ($row['whatsapp'])) {  

        echo " 

      <a href=".$row['whatsapp']." target='_blank'>
      <img src='./img/whatsapp-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>

      ";
    }


    echo " 

      </div>
      <div class='w3-container w3-third w3-center'>
      <img src=".$row['img_lugar']." style='width:250px;height:250px'>
      </div>
      </div>
      <div class='w3-row'>
      <div class='w3-container w3-third w3-center'>
      <div class='w3-panel w3-border w3-blue-grey w3-round-large'>
      ".$row['hora']."
      </div>
      </div>
      <div class='w3-container w3-third w3-center'>
      <a href=".$row['coord']." target='_blank'>
      <img src='./img/map-icon.png' class='w3-round w3-opacity w3-hover-opacity-off w3-hover-shadow w3-margin' style='width:20%'></a>
      </div>
      ";
      

      echo " 
      <div class='w3-container w3-third w3-center'>
      <div class='w3-panel w3-border w3-blue-grey w3-round-large'>
        ".$row['lugar']."
      </div>
      </div>
     
          ";
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
