<?php
 // Connects to your Database 
 mysqli_connect("localhost", "test", "t3st3r123") or die(mysqli_error()); 
 mysqli_select_db("test"); 
//Lisab yhe kylastuse counterile juurde

mysqli_query("UPDATE counter_ttihhano SET counter = counter + 1");

//V6tab numbri baasist

$count = mysqli_fetch_row(mysqli_query("SELECT counter FROM counter"));

//N2itan palju kylastatud

print "$count[0]";

?>
