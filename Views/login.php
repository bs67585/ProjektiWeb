<?php 

include_once "../Controllers/loginController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css">
    <title>Log in</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="container">
            <div class="logo">
                <img src="../Images/fbk-logo1.png" alt="Logo">
            </div>
            <!-- <div class="input">
                <p>Username</p>
                <input type="text" id="user-login" name="username">
            </div> -->
            <div class="input">
                <p>E-mail</p>
                <input type="text" id="user-email" name="email">
            </div>
            <div id="login-email-error" style="color: red;"></div>
            <div class="input">
                <p>Password</p>
                <input type="password" id="pass-login" name="password">
            </div>
            <div id="login-pass-error" style="color: red;"></div>
            <div class="btn">
                <button onclick="validateForm()" type="submit" name="login">Log in</button>
            </div>
            <a href="register.php">Sign up</a>
    </form>
</body>
<script>

    let passwordRegex = /^[a-zA-Z]+[0-9]{1,3}$/;

    function validateForm() {
        let emailLogin = document.getElementById('user-email');
        let passLogin = document.getElementById('pass-login');

        if (!emailRegex.test(emailLogin.value)) {
            document.getElementById('login-email-error').innerHTML = 'Invalid Email'
            return;
        } else {
            document.getElementById('login-email-error').innerHTML = ''
        }
        if (!passwordRegex.test(passLogin.value)) {
            document.getElementById('login-pass-error').innerHTML = 'Invalid Password'
            return;
        } else {
            document.getElementById('login-pass-error').innerHTML = ''
        }

    }

</script>

</html>