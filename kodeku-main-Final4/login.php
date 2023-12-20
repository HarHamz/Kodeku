<?php
    $nameErr = $emailErr = $passErr = '';
    $name = $email = $pass = '';
    if(array_key_exists('login', $_POST)){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $nameErr = $emailErr = $passErr = '';
        session_start();
        // echo 'login';
        include('db_co.php');
    
        $query = "SELECT * FROM user_profile ";
        $query .= "WHERE name = '{$name}';";
        
        $query2 = mysqli_query($db, $query);
        $result = mysqli_fetch_all($query2);
        
        if ((mysqli_num_rows($query2) == true) && $name !== null){
            
            $query = "SELECT * FROM user_profile ";
            $query .= "WHERE name = '{$name}' ";
            $query .="AND password = '{$pass}';";
            
            $query2 = mysqli_query($db, $query);
            
            if((mysqli_num_rows($query2) == true) && $pass !== null){
                // echo "found password <br/>";
                
                $query = "SELECT * FROM user_profile ";
                $query .= "WHERE name = '$name' ";
                $query .= "AND email = '$email' ";
                $query .="AND password = '$pass';";
                
                $query2 = mysqli_query($db, $query);
                if((mysqli_num_rows($query2) == true) && $email !== null){
                    $_SESSION['username'] = $name;
                    $_SESSION['password'] = $pass;
                    $_SESSION['email'] = $email;
                    //echo $_SESSION['email'];
                    header('location:index.php');
                } else {
                    $emailErr = 'Email not found!';
                }
            } else {
                $passErr = 'Password did not match!';
            }
        } else {
            $nameErr = 'Username not found';

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
    <style>
        .req{
            color:red;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="navbar-container">
        <a class="navbar-brand px-3" href="index.html"><img src="img/logo_sekunder.png" alt="Logo" class="main-logo"></a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul>
                <li>
                    <a class="nav-link" href="index.php#pascal">Pascal</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <!-- Section Login -->
        <section class="container-fluid bab" id="login">
            <h1>Log In</h1>
            <p class="req">* required</p>
            <form method="post" action="
                <?php 
                echo htmlspecialchars($_SERVER["PHP_SELF"]);
                ?>">

                <div class="mb-3">
                  <label for="input_email" class="form-label">Email
                  <span class="req">* 
                        <?php
                            echo $emailErr;
                        ?>
                    </span>
                  </label>
                  <input type="email" class="form-control" id="input_email" 
                  placeholder="contoh@gmail.com" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="input_username" class="form-label">Username
                    <span class="req">* 
                        <?php
                            echo $nameErr;
                        ?>
                    </span>
                  </label>
                  <input type="text" class="form-control" id="input_username" 
                  placeholder="Ini adalah Username" name="username" required>
                </div>

                <div class="mb-3">
                  <label for="input_password" class="form-label">Password
                    <span class="req">* 
                        <?php
                            echo $passErr;
                        ?>
                    </span>
                  </label>
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