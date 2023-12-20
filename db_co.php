<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'id21661353_kodeku_user';
    $db = mysqli_connect($host, $user, $password, $dbname);
    mysqli_select_db($db, $dbname);

    if (!$db){
        echo 'error loading db.\n';
        exit;
    }
?>