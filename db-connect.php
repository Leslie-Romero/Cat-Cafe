<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "wd_assignment_db";

    // Connect database
    $db_server = @mysqli_connect ($host, $user, $pass, $db) 
    OR die ('Connection to the database failed: ' . mysqli_connect_error());
?>