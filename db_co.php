<?php
    $host = 'localhost';
    $dbname = 'id21661353_kodeku_user';
    $user = 'id21661353_root';
    $password = 'kodekuuser_Adm1n';
    $db = mysqli_connect($host, $user, $password, $dbname);
    mysqli_select_db($db, $dbname);

    if (!$db){
        echo 'error loading db.\n';
        exit;
    }
?>