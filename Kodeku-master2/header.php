
<?php
    $username = $email = '';
    session_start();
    include_once 'db_co.php';
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
    }
    if (isset($_GET['logout'])){
        session_unset();
        header("location:index.php");
    }
    if(isset($_POST['delete_yes'])){
        $edit_password = $_POST['password'];
        $query = "DELETE FROM user_profile ";
        $query .= "WHERE email = '$email' ";
        $query .= "AND password = '$edit_password'; ";
        mysqli_query($db, $query);
        // echo '<labelclass="form-label">Akun Telah Dihapus</label>';
        session_unset();
        header("location:index.php");
    }
?>

<?php 
    echo '
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
    ';

    if (!isset($_SESSION['username'])){
        // echo '<a class="btn btn-primary" href="dummy_login.php" role="button">Log In (dummy)</a>';
        echo '<a class="btn btn-primary" href="login.php" role="button">Log In</a>';
        echo '<a class="btn btn-primary" href="signup.php" role="button">Sign Up</a>';
    }
    else if (isset($_SESSION['username'])){
        echo "<a href='edit.php'> Welcome {$_SESSION['username']} </a>";
        echo "
            <a class='btn btn-primary' href='index.php?logout=<'>Log Out</a>
        ";
    }

    echo '       
        </div>
    </header>
    ';
?>