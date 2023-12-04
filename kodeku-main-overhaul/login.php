<?php
    if(array_key_exists('login', $_POST)){
        session_start();
        echo 'login';
        
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
            $query .="AND password LIKE '{$password}'";
            
            $query2 = pg_query($db, $query);
            if((pg_field_is_null($query2,"email") === 0) && $email !== null){
                echo "found email <br/>";

                echo  "entering main page ... <br/>";
                $_SESSION['username'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;
                header('location:index.php');
            } else {
                echo "no email found";
            }
    
        } else {
            echo 'username not found';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodeku - Log In</title>
    <link rel="icon" href="img/logo_only.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <header class="navbar-container">
        <a class="navbar-brand px-3" href="index.html"><img src="img/logo_sekunder.png" alt="Logo" class="main-logo"></a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul>
                <li>
                    <a class="nav-link" href="index.html#pascal">Pascal</a>
                </li>
            </ul>
        </nav>
        <!-- <div class="logsign">
            <a class="btn btn-primary" href="login.html" role="button">Log In</a>
            <a class="btn btn-primary" href="signup.html" role="button">Sign Up</a>
        </div> -->
    </header>

    <!-- Main -->
    <main>
        <!-- Section Login -->
        <section class="container-fluid bab" id="login">
            <h1>Log In</h1>
            <form method="post" action="
                <?php 
                echo htmlspecialchars($_SERVER["PHP_SELF"]);
                ?>">
                <div class="mb-3">
                  <label for="input_email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="input_email" 
                  placeholder="contoh@gmail.com" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="input_username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="input_username" 
                  placeholder="Ini adalah Username" name="username" required>
                </div>

                <div class="mb-3">
                  <label for="input_password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="input_password" 
                  placeholder="Password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
            <br>
            <button type="button" class="btn btn-link" onclick="location.href='signup.php';">Sign Up</button>
        </section>
    </main>


    <script src="script.js"></script>
</body>
</html>