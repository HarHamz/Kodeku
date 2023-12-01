    <?php
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
?>