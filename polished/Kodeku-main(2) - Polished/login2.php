<?php 
    // echo $_POST['username'];
    echo 'ok', '<br/>';
    echo $_POST['email']    , '<br/>';
    echo $_POST['username'] , '<br/>';
    echo $_POST['password'] , '<br/>';

    echo 'data gathered, processing data... <br/>';
    
    echo 'attempting to login... <br/>';
    include('db_co.php');

    if (empty($_POST['username'])){
        $nameErr = 'Name is required';
    } else {
    $name = $_POST['username'];
    }

    if (empty($_POST['password'])){
        $passwordErr = 'Password is required';
    } else {
    $password = $_POST['password'];
    }
    if (empty($_POST['email'])){
        $emailErr = 'Email is required';
    } else {
    $email = $_POST['email'];
    }

    $query = "SELECT * FROM user_profile ";
    $query .= "WHERE name LIKE '{$name}';";
    
    $query2 = pg_query($db, $query);
    $result = pg_fetch_all($query2);
    // echo view_data($result);
    // echo pg_field_is_null($query2, 'name');
    
    if ((pg_field_is_null($query2, 'name') === 0) && $name !== null){
        echo 'found username <br/>';
        
        $query = "SELECT * FROM user_profile ";
        $query .= "WHERE name LIKE '{$name}'";
        $query .="AND password LIKE '{$password}'";
        
        $query2 = pg_query($db, $query);
        if((pg_field_is_null($query2,"password") === 0) && $password !== null){
            echo "found password <br/>";
        } else {
            echo "no password found";
        }
        
        $query = "SELECT * FROM user_profile ";
        $query .= "WHERE name LIKE '{$name}'";
        // $query .= "WHERE email LIKE '{$email}'";
        $query .= "AND email LIKE '{$email}'";
        // $query .="AND password LIKE '{$password}'";
        
        $query2 = pg_query($db, $query);
        if((pg_field_is_null($query2,"email") === 0) && $email !== null){
            echo "found email <br/>";
        } else {
            echo "no email found";
        }

    } else {
        echo 'username not found';
    }
?>