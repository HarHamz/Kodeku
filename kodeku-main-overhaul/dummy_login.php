<?php
    echo 'ok';
    session_start();
    include('db_co.php');

    echo  "entering main page ... <br/>";   
    $_SESSION['username'] = 'Healm';
    $_SESSION['password'] = 'hmm';
    $_SESSION['email'] = 'goog@gmail.com';
    header('location:index.php');
?>