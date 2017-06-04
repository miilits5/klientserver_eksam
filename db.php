<?php
 // Connects to your Database 
 mysqli_connect("localhost", "test", "t3st3r123") or die(mysql_error()); 
 mysql_select_db("test") or die(mysql_error()); 
//Lisab yhe kylastuse counterile juurde

mysqli_query("UPDATE counter_ttihhano SET counter = counter + 1");

//V6tab numbri baasist

$count = mysqli_fetch_row(mysql_query("SELECT counter FROM counter"));

//N2itan palju kylastatud

print "$count[0]";

?>
