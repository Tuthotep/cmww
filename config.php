<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "sql308.infinityfree.com";
$database = "if0_36505604_db_cmbt";
$username = "if0_36505604";
$password = "9VBN1hy9G6ku";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//include '../config.php';



/* 


mysqli_data_seek ($result,1);

$extraido= mysqli_fetch_array($result);

echo "- Id: ".$extraido[0]."<br/>";

echo "- Ciudad: ".$extraido[1]."<br/>";

echo "- Pais: ".$extraido[2]."<br/>";

echo "- Cont.: ".$extraido[3]."<br/>";

echo "- Hora: ".$extraido[4]."<br/>";

echo "- Lugar: ".$extraido[5]."<br/>";

echo "- Logo: ".$extraido[6]."<br/>";

echo "- Punto: ".$extraido[7]."<br/>";


*/



?>