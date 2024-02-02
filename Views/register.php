<?php

session_start();

$host = '127.0.0.1:3306';
$username = 'root';
$password = '';
$database = 'liga_basketbolli';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function register_user($username, $name, $email, $password)
{
    global $conn;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (user_username,user_name, user_email, user_password) VALUES ('$username', '$name', '$email', '$hashed_password')";

    if ($conn->query($query) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        register_user($username, $name, $email, $password);
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css">
    <title>Register</title>
</head>

<body>
    <form action="" method="post" class="container" name="register">
        <div class="logo">
            <img src="../Images/fbk-logo1.png" alt="Logo">
        </div>
            <div class="input">
                <p>Full Name</p>
                <input type="text" id="name-register" name="name">
            </div>
            <div class="input">
                <p>Username</p>
                <input type="text" id="user-register" name="username">
            </div>
            <div class="input">
                <p>E-mail</p>
                <input type="email" id="email-register" name="email">
            </div>
            <div id="register-email-error" style="color: red;"></div>
            <div class="input">
                <p>Password</p>
                <input type="password" id="pass-register" name="password">
            </div>
            <div id="register-pass-error" style="color: red;"></div>
            <div class="btn">
                <button onclick="validateForm()" type="submit" name="login">Sign up</button>
            </div>
            <a href="login.php">Log in</a>
        </form>
</body>
<script>

    let emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{1,3}$/;
    let passwordRegex = /^[a-zA-Z]+[0-9]{1,3}$/;

    function validateForm() {
        let email = document.getElementById('email-register');
        let passRegister = document.getElementById('pass-register');

        if (!emailRegex.test(email.value)) {
            document.getElementById('register-email-error').innerHTML = 'Invalid Email'
            return;
        } else {
            document.getElementById('register-email-error').innerHTML = ''
        }

        if (!passwordRegex.test(passRegister.value)) {
            document.getElementById('register-pass-error').innerHTML = 'Invalid Password'
            return;
        } else {
            document.getElementById('register-pass-error').innerHTML = ''
        }

    }

</script>

</html>