<?php

    $dbname = 'kodeku_user';
    $user = 'postgres';
    $password = 'admin';
    $db = pg_connect("host=localhost dbname=kodeku_user user=postgres password=admin");
    if (!$db){
        echo 'error loading db.\n';
        exit;
    }
?>