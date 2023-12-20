
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodeku - Edit Data</title>
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
    </header>

    <!-- Main -->
    <main>
        <!-- Section SignUp -->
        <section class="container-fluid bab" id="login">
            <h1>Edit Data</h1>
            <form action="signup.php" method="post">
                <div class="mb-3">
                  <label for="input_username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="input_username" 
                  placeholder="Ini adalah Username" name="username" required>
                </div>
                
                <div class="mb-3">
                    <label for="input_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input_email" 
                    placeholder="contoh@gmail.com" name="email" required>
                  </div>
  
                  <div class="mb-3">
                    <label for="input_dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="input_dob" 
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
                  placeholder="Password" name="password" required>
                </div>
                <div class="mb-3">
                  <label for="input_password_2" class="form-label">Ketik Ulang Password</label>
                  <input type="password" class="form-control" id="input_password_2" 
                  placeholder="Retype Password" name="password2" required>
                </div>
                <br>
                <!-- TODO: SUBMIT EDITAN -->
                <button type="submit" class="btn btn-primary" name="signup" >Konfirmasi</button>
            </form>
            <br>
            <!-- TODO: LOKASI BARU -->
            <button type="button" class="btn btn-link" onclick="confirmdelete()">Hapus Akun</button>
            <script>
                function confirmdelete() {
                    var result = confirm("Konfirmasi penghapusan akun?");
                    if (result) {
                        // User clicked "Ok"
                        // TODO: Add the logic to delete the account or perform any other action
                        alert("Akun dihapus!");
                    } else {
                        // User clicked "Cancel" or closed the dialog
                        alert("Penghapusan akun dibatalkan.");
                    }
                }
            </script>
        </section>
    </main>


    <script src="script.js"></script>
</body>
</html>