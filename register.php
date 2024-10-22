<?php
session_start();
if (!isset($_POST["regregister_button"])){
    echo '<style>.regregister {display: block !important;}</style>';    
}

// Display messages if they exist
if (isset($_SESSION["messages"]) && count($_SESSION["messages"]) > 0) {
    foreach ($_SESSION["messages"] as $message) {
        echo "<p>$message</p>";
    }
    // Clear messages after displaying
    unset($_SESSION["messages"]);
}
?>

<DOCTYPE html>
<html lang ="en">
    <head>
        <title>Authentication 1</title>
        <link rel="stylesheet" type="text/css" href="register_style.css">
    </head>
    <body>
        <form action="registration_process.php" method="POST">
            <div class = "register_plane">
                <h1>Register Now!</h1>
                <div class = "firstname">
                    <label for="Name">First Name:</label>
                    <input type="text" id="Name" name="name_field"/>
                </div>
                <div class = "lastname">
                    <label for="Name">Last Name:</label>
                    <input type="text" id="LastName" name="lastname_field"/>
                </div>
                <div class = "contactnumber">
                    <label for="Mobile">Mobile#:</label>
                    <input type="text" id="Mobile" name="number_field"/>
                </div>
                <div class = "password">
                    <label for="Password">Password:</label>
                    <input type="password" id="Password" name="password_field"/>
                </div>
                <div class = "confirmpassword">
                    <label for="Password"> Confirm Password:</label>
                    <input type="password" id="Password" name="confirmpassword_field"/>
                </div>
                <div class = "messages">
<?php
                    if (!isset($_SESSION['messages'])){
                        echo "<p>Enter your name, mobile # and password to register!</p>";
                    }
?>                 
<?php 
                    if (isset($_SESSION['messages'])) {
                        foreach($_SESSION['messages'] as $message) {
                            echo "<p>$message</p>" . "<br>";
                        }
                    }
                    unset($_SESSION['messages']);
?>
                </div>
                <div class = "regregister">
                    <input type="submit" id="RegRegister" value = "Register" name="regregister_button">
                </div>
            </div>
        </form>
    </body>
</html>