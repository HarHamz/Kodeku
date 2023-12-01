<?php
  if (array_key_exists ('signup',$_POST)){
      echo $_POST['username'] , "<br/>";
      echo $_POST['password'] , "<br/>";
      echo $_POST['email']    , "<br/>";
      echo $_POST['gender']   , "<br/>";
      echo $_POST['dob']      , "<br/>";
      echo 'enter', "<br/>";
          
      include('db_co.php');
      function view_data($a){
          $result = $a;
          foreach ($result as $row) {
              foreach ($row as $key => $value) {
                  echo $key, ':', $value, ' ';
              }
              echo '<br/>';
          }
          // print_r($result);
      }
      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

      $nameErr = $passwordErr = $dobErr = $genderErr = $emailErr = '';
      $name = $password = $dob = $gender = $email = '';

      if (empty($_POST['username'])){
          $nameErr = 'Name is required';
      } else {

          $query = 'SELECT * from user_profile ';
          $query .= "WHERE name='{$_POST['username']}';";
          $query2 = pg_query($db, $query);
          $result = pg_fetch_all($query2);
          // echo view_data($result), '<br/>';
          // echo pg_num_rows($query2), '<br/>';
          if (pg_num_rows($query2) === 0){
              $name = test_input($_POST['username']);
          } else {
              $nameErr = 'Name is already existed';
              echo $nameErr . '<br/>';
          }
      }
      if (empty($_POST['password'])){
          $passwordErr = 'Password is required';
          echo $passwordErr;
          echo '<br/>';
      } else {
          if ($_POST['password'] === $_POST['password2']){
              $password = test_input($_POST['password']);
          }
          else {
              $passwordErr = "password don't match";
              echo $passwordErr;
              echo '<br/>';
          }
      }
      if (empty($_POST['dob'])){
          $dobErr = 'Date of Birth is Required';
          echo $dobErr;
          echo '<br/>';
      } else {
          $dob = test_input($_POST['dob']);
      }
      if (empty($_POST['gender'])){
          $genderErr = 'Gender is required';
          echo $genderErr;
          echo '<br/>';
      } else {
      $gender = test_input($_POST['gender']);
      }
      if (empty($_POST['email'])){
          $emailErr = 'Email is required';
          echo $emailErr;
          echo '<br/>';
      } else {
          if (!preg_match("/\w+@(yahoo|gmail)(\.\w{2,3})+/",$_POST['email'])){
              // echo 'smth is wrong about your email';
              $emailErr = 'something is wrong about your email';
              echo $emailErr;
              echo '<br/>';
          }
          else {
              echo 'email is ok <br/>';
          }
      $email = test_input($_POST['email']);
      }
      if ($nameErr =='' &&  $passwordErr =='' && $dobErr =='' && $genderErr =='' && $emailErr == ''){
          echo 'all data ready ';
          echo '<br/>';
          $query = 'INSERT INTO user_profile(name, password, dob, gender, email)';
          $query .="VALUES ('{$name}', '{$password}', '{$dob}}', '{$gender}', '{$email}');";
          // $query .="VALUES ('healm', 'admin', '2004-12-31', 'm', 'email@example.com');";
          
          pg_query($db, $query);
          echo 'success login <br/>';
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodeku - Sign Up</title>
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
            <h1>Sign Up</h1>
            <form action="http://localhost:3000/signup.php" method="post">
                <div class="mb-3">
                  <label for="input_username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="input_username" 
                  value="<?php echo $name;?>"
                  placeholder="Ini adalah Username" name="username" required>
                </div>
                
                <div class="mb-3">
                    <label for="input_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input_email" 
                    value="<?php echo $email;?>"
                    placeholder="contoh@gmail.com" name="email" required>
                  </div>
  
                  <div class="mb-3">
                    <label for="input_dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="input_dob" 
                    value="<?php echo $dob;?>"
                    placeholder="Ini adalah Tanggal lahir" name="dob" required>
                  </div>
  
                  <div class="mb-3">
                    <label for="input_gender" class="form-label">Gender</label>
                      <input type='radio' id="input_gender"
                      <?php if(isset($gender) && $gender === "Male") {echo "checked";}?>
                      value='Male' name='gender'/> 
                      Male
                      <input type='radio' id="input_gender"
                      <?php if(isset($gender) && $gender === "Female") {echo "checked";}?>
                      value='Female' name='gender'/> 
                      Female 
                  </div>
                  
                <div class="mb-3">
                  <label for="input_password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="input_password" 
                  value="<?php echo $password;?>"
                  placeholder="Password" name="password" required>
                </div>
                <div class="mb-3">
                  <label for="input_password_2" class="form-label">Ketik Ulang Password</label>
                  <input type="password" class="form-control" id="input_password_2" 
                  value="<?php echo $password;?>"
                  placeholder="Retype Password" name="password2" required>
                </div>
                <button type="submit" class="btn btn-primary" name="signup" >Submit</button>
            </form>
            <br>
            <button type="button" class="btn btn-link" onclick="location.href='login.php';">Log In</button>
        </section>
    </main>


    <script src="script.js"></script>
</body>
</html>