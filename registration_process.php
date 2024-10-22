<?php
session_start();

if (!isset($_SESSION["messages"])){
    $_SESSION["messages"] = array(); // Initialize the session variable as an empty array
}
//validation starts here:
if (isset($_POST["regregister_button"])){
    if (!empty(trim($_POST["name_field"])) && !empty(trim($_POST["lastname_field"])) && !empty(trim($_POST["number_field"])) && !empty(trim($_POST["password_field"])) && !empty(trim($_POST["confirmpassword_field"]))){
        if (preg_match('/^[A-Za-z]{2,}$/', $_POST["name_field"]) && preg_match('/^[A-Za-z]{2,}$/', $_POST["lastname_field"]) && preg_match('/^[0-9]{11}$/', $_POST["number_field"]) && (strlen($_POST["password_field"]) <= 8 && $_POST["password_field"] === $_POST["confirmpassword_field"])){
            $firstname = $_POST['name_field'];
            $lastname = $_POST['lastname_field'];
            $contactnumber = $_POST['number_field'];
            $pass = md5($_POST['password_field']);
            date_default_timezone_set('Asia/Manila');
            $date = date('Y-m-d H:i:s');
            $alert = "Congratulations! Registration successful." . "<br>" . "<br>" ."Go back to previous page to login";
            $_SESSION["messages"][] = $alert;

            //Store data in SESSION variables
            $_SESSION["date"] = $date;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["number"] = $contactnumber;
            $_SESSION["password"] = $pass;
            
            // Connect to the database server
            $db_host = 'localhost';
            $db_user = 'root';
            $db_password = '';
            $db_name = 'martinez_registration';
            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

            // Check the connection
            if (!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully<br>";

            // Create the table
            $sql = "CREATE TABLE IF NOT EXISTS authenticated (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            date_time DATETIME NOT NULL,
            contactnumber VARCHAR(11) NOT NULL,
            pass VARCHAR(100) NOT NULL
            )";
            if (mysqli_query($conn, $sql)) {
                echo "Registration_entries created successfully<br>";
            } else {
                echo "Error creating table: " . mysqli_error($conn) . "<br>";
            }

            // Insert the data
            $sql = "INSERT INTO authenticated (firstname, lastname, date_time, contactnumber, pass)
            VALUES ('$firstname', '$lastname', '$date', '$contactnumber', '$pass')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
            }
            mysqli_close($conn);  
            header("Location: register.php");
            exit();
            }
    } else{
        $alert = "First name and last name should not be empty and should only contain letters and must not be less than 3 characters long! --------- Mobile number should be exactly 11 digits without any letters! --------- Password should not be more than 8 characters long! ---------- Confirm password must be equal to password!";
        $_SESSION["messages"][] = $alert;
        header("Location: register.php");
        exit();
    }
}
?>