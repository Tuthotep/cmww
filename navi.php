<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-Dark gray w3-xlarge w3-padding">
<a href="javascript:void(0)" class="w3-button w3-margin-right" onclick="w3_open()">☰</a>
</header>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
</div>         

<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding w3-center" style="z-index:3;width:200px;font-weight:bold;" id="mySidebar"><br>
<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Cerrar</a>
<div class="w3-container w3-padding-36">
<a href="./index.php"><img src="../img/logo.jpg" style="width: 100px;"></a>
</div>
<div class="w3-bar-block w3-center w3-margin-top">
   
   <a class="w3-bar-item" href="./africa.php" style="font-size: small">África</a>
   <a class="w3-bar-item" href="./america.php" style="font-size: small">América</a>
   <a class="w3-bar-item" href="./asia.php" style="font-size: small">Asia</a>
   <a class="w3-bar-item" href="./europa.php" style="font-size: small">Europa</a>
   <a class="w3-bar-item" href="./oceania.php" style="font-size: small">Oceanía</a>
   <a class="w3-bar-item" href="./mipcoll.php" style="font-size: small">MC Interp.</a>
   <a class="w3-bar-item" href="./enlaces.php" style="font-size: small">Enlaces</a>
   <a class="w3-bar-item" href="./sponsors.php" style="font-size: small">Sponsors</a>
   <a class="w3-bar-item" href="./contact.php" style="font-size: small">Contacto</a>
   </div>
</nav>



<script>
// Script to open and close sidebar
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
document.getElementById("mySidebar").style.display = "none";
document.getElementById("myOverlay").style.display = "none";
}

</script>
                