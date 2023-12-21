
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
    <?php
        include "header.php";
    ?>

    <!-- load self data -->
    <?php
        $email = $_SESSION['email'];
        session_start();
        include_once('db_co.php');
        $query = "SELECT * FROM user_profile WHERE ";
        $query .= "email = '{$email}'";
        
        $result = mysqli_fetch_assoc(mysqli_query($db, $query));
        $gender = $result['gender'];
    ?>

    <!-- edit proses -->
    <?php
        if(array_key_exists("edit", $_POST)){
            $edit_name = $_POST['username'];
            $edit_gender = $_POST['gender'];
            $edit_dob = $_POST['dob'];
            $edit_email = $_POST['email'];
            $edit_description = $_POST['description'];
            $edit_password = $_POST['password'];
            $edit_password_new = $_POST['password_new'];

            $query = "UPDATE user_profile SET ";
            $query .= "name = '$edit_name', ";
            $query .= "gender = '$edit_gender', ";
            $query .= "dob = '$edit_dob', ";

            if ($edit_password_new !==''){
                $query .= "password = '$edit_password_new', ";
            }

            $query .= "description = '$edit_description'";
            $query .= "WHERE email = '$edit_email' ";
            $query .= "AND password = '$edit_password';";
            mysqli_query($db, $query);
            $_SESSION['username'] = $edit_name;
        }
    ?>

    <!-- Main -->
    <main>
        <!-- Section SignUp -->
        <section class="container-fluid bab" id="login">
            <!-- TODO: LOKASI BARU -->
            <h1>Edit Data</h1>
            <!-- <button type="button" class="btn btn-link" onclick="confirmdelete()">Hapus Akun</button> -->
            <?php
                $form_username = $form_email = '';
                if (!empty($_SESSION['username'])){
                    $form_username = $_SESSION['username'];
                }
                if (!empty($_SESSION['email'])){
                    $form_email = $_SESSION['email'];
                }
            ?>
            <form action="edit.php" method="post">
                <div class="mb-3">
                  <label for="input_username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="input_username" 
                  placeholder="Ini adalah Username" name="username" 
                  value="<?php echo $form_username; ?>"
                  required>
                </div>
                
                <div class="mb-3">
                    <label for="input_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input_email" 
                    placeholder="contoh@gmail.com" name="email" 
                    value="<?php echo $form_email; ?>"
                    readonly required>
                </div>
    
                <div class="mb-3">
                    <label for="input_dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="input_dob" 
                    placeholder="Ini adalah Tanggal lahir" name="dob" 
                    value="<?php echo $result['dob'];?>"
                    >
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
                    <label for="message" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="input_message" 
                    placeholder="Deskripsi" name="description"></textarea>
                </div>
                  
                <div class="mb-3">
                  <label for="input_password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="input_password" 
                  placeholder="Password" name="password" required>
                </div>

                <div class="mb-3">
                  <label for="input_password_2" class="form-label">Ketik Ulang Password Baru, Kosongkan Jika Tidak Mengubah Password</label>
                  <input type="password" class="form-control" id="input_password_new"
                  placeholder="New Password" name="password_new">
                </div>
                <br>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="edit" >Konfirmasi</button>
                    <button type="submit" class="btn btn-primary" name="delete" >Hapus Akun</button>
                    <?php
                    if(isset($_POST['delete_yes'])){
                        $edit_password = $_POST['password'];
                        $query = "DELETE FROM user_profile ";
                        $query .= "WHERE email = '$email' ";
                        $query .= "AND password = '$edit_password'; ";
                        mysqli_query($db, $query);
                        echo '<labelclass="form-label">Akun Telah Dihapus</label>';
                        session_unset();
                        header("location.index.php");
                        // href='index.php?logout=<'
                        
                    }elseif(isset($_POST['delete'])){
                        echo'<br/>';
                        echo '<label class="form-label">Konfirmasi Penghapusan Akun?</label>';
                        echo'<br/>';
                        echo'<button type="submit" class="btn btn-primary" name="delete_yes" >Ya, Hapus Akun Saya</button>';
                        echo'<button type="submit" class="btn btn-primary" name="delete_no" >Tidak</button>';
                    }
                    ?>
                </div>
            </form>
            <br>
            
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