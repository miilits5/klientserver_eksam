<?php
 // Connects to your Database 
 $conn = mysqli_connect("localhost", "test", "t3st3r123") or die("ei saa yhendus"); 
 mysqli_select_db($conn, "test") or die ("ei saa valida baasi"); 
//Lisab yhe kylastuse counterile juurde

mysqli_query($conn, "UPDATE counter_ttihhano SET counter = counter + 1");
$tulemus = mysqli_query($conn, "SELECT counter FROM counter_ttihhano");

//V6tab numbri baasist

$count = mysqli_fetch_row($tulemus);

//N2itan palju kylastatud

print "$count[0]";

?>
