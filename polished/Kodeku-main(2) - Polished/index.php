<?php
  session_start();
  include 'db_co.php';
  if (!isset($_SESSION['username'])){
    // header('location:login1.php');
    // echo 'redirected from index . php <br/>'; 
    echo 'redirecting to signup . php <br/>'; 

  } else if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo 'entered : ';
    echo $username;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodeku</title>
    <link rel="icon" href="img/logo_only.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <header class="navbar-container">
        <a class="navbar-brand px-3" href="index.php"><img src="img/logo_sekunder.png" alt="Logo" class="main-logo"></a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul>
                <li>
                    <a class="nav-link" href="index.php#pascal">Pascal</a>
                </li>
            </ul>
        </nav>
        <div class="logsign">
            <!-- <a class="btn btn-primary" href="login.php" role="button">Log In</a> -->
            <!-- <a class="btn btn-primary" href="signup.php" role="button">Sign Up</a> -->
            <?php 
                if (!isset($_SESSION['username'])){
                    echo '<a class="btn btn-primary" href="dummy_login.php" role="button">Log In (dummy)</a>';
                    echo '<a class="btn btn-primary" href="login.php" role="button">Log In</a>';
                    echo '<a class="btn btn-primary" href="signup.php" role="button">Sign Up</a>';
                }
                else if (isset($_SESSION['username'])){
                echo "<a class='btn btn-primary' href='#' role='button'>Welcome {$_SESSION['username']}</a>";
                echo "<a class='btn btn-primary' href='index.php' role='button'
                action='<?php session_destroy(); ?>'
                >Log Out</a>";
            }
            ?>
            <!-- <a class="btn btn-primary" href="index.php" role="button"
            action="<?php session_destroy(); ?>"
            >Log Out</a> -->
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- Background Article -->
        <article class="container-fluid top">
            <div class="background-gradient">
                <div class="main-text">
                    <h1>Belajar <br>Dasar Pemrograman dengan Mudah!</h1>
                </div>
                <img src="img/background-main-picture.png" alt="Computer" class="img-fluid background-image-front">
            </div>
        </article>

        <!-- Section Bab -->
        <section class="container-fluid">
            <div class="section-row" id="pascal">
                <h1>Pascal</h1>
                <div>
                    <div class="list-group">
                        <a href="pascal-1.html" class="list-group-item list-group-item-action">Bab 1: Pengenalan dan Tipe Data</a>
                        <a href="pascal-2.html" class="list-group-item list-group-item-action">Bab 2: Operator</a>
                        <a href="pascal-3.html" class="list-group-item list-group-item-action">Bab 3: Kondisi</a>
                        <a href="pascal-4.html" class="list-group-item list-group-item-action">Bab 4: Perulangan dan Peloncatan</a>
                        <a href="pascal-5.html" class="list-group-item list-group-item-action">Bab 5: Array</a>
                        <a href="pascal-6.html" class="list-group-item list-group-item-action">Bab 6: Prosedur dan Fungsi</a>
                        <a href="pascal-7.html" class="list-group-item list-group-item-action">Bab 7: Record</a>
                        <a href="pascal-8.html" class="list-group-item list-group-item-action">Bab 8: Pointer</a>
                      </div>
                </div>
            </div>
            <div class="section-row" id="c">
                <h1>C: Under Construction</h1>
                <!-- <div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Bab 1: Pengenalan</a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 2: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 3: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                        <a href="#" class="list-group-item list-group-item-action">Bab 4: </a>
                      </div>
                </div> -->
            </div>
            
            
        </section>
    </main>


    <!-- Footer -->
    <footer>
        &copy; 2023 - Kodeku
        <a class="navbar-brand px-3" href="index.php"><img src="img/logo_primer.png" alt="Logo" class="main-logo"></a>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">   
            <ul>
                <li><a class="nav-link" href="index.php">Beranda</a></li>
                <li><a class="nav-link" href="contact.html">Kontak</a></li>
                <li><a class="nav-link" href="about.html">Tentang</a></li>
            </ul>
        </nav>
    </footer>

    <script src="script.js"></script>
</body>
</html>