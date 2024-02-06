<?php 

include_once "../Controllers/registerController.php"

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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="container" name="register" onsubmit="return validateForm()">
        <div class="logo">
            <img src="../Images/fbk-logo1.png" alt="Logo">
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
                <button type="submit" name="registerBtn">Sign up</button>
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