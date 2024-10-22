<?php
session_start();
if (isset($_POST['login_button'])){
    // Connect to the database server
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'martinez_registration';
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $contactnumber = mysqli_real_escape_string($conn, $_POST['loginnumber_field']);
    $pass = mysqli_real_escape_string($conn, $_POST['loginpassword_field']);
    $user_query = "SELECT * FROM authenticated WHERE authenticated.contactnumber = '{$contactnumber}'";
    $result = mysqli_query($conn, $user_query);
    $user = mysqli_fetch_assoc($result);
    if(!empty($user))
    {
        $encrypted_password = md5($pass);
        if($user['pass'] == $encrypted_password)
        {
            //this means we have a successful login!
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['contactnumber'] = $user['contactnumber'];
        }
        else
        {
            //invalid password!
            echo "Invalid password!";
        } 
    }
    else
    {
        //invalid number!
        echo "Invalid contact number!";
    }

    // Check the connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_close($conn);
    header("Location: dashboard.php");
    exit();
}
?>