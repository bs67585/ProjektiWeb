<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css">
    <title>Log in</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../Images/fbk-logo1.png" alt="Logo">
        </div>
        <div class="input">
            <p>Username</p>
            <input type="text" id="user-login">
        </div>
        <div class="input">
            <p>Password</p>
            <input type="password" id="pass-login">
        </div>
        <div id="login-pass-error" style="color: red;"></div>
        <div class="btn">
            <button onclick="validateForm()">Log in</button>
        </div>
        <a href="register.php">Sign up</a>
    </div>
</body>
<script>

    let passwordRegex = /^[a-zA-Z]+[0-9]{1,3}$/;

    function validateForm() {
        let passLogin = document.getElementById('pass-login');

        if (!passwordRegex.test(passLogin.value)) {
            document.getElementById('login-pass-error').innerHTML = 'Invalid Password'
            return;
        } else {
            document.getElementById('login-pass-error').innerHTML = ''
        }

    }

</script>

</html>