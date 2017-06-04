<?php

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
            $sql = "UPDATE counter_ttihhano SET counter = counter + 1";
            $result = $l->query($sql);
    //V6tab numbri baasist

$count = mysqli_fetch_row(mysql_query("SELECT counter FROM counter"));

//N2itan palju kylastatud

print "$count[0]";

    mysqli_close($l);


?>
