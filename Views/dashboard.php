<?php
session_start();

function isUserLoggedIn() {
    return isset($_SESSION['id']);
}

if (isUserLoggedIn()) {
    $userId = $_SESSION['id'];

    include_once '../Controllers/userController.php';
    include_once '../Controllers/user.php';
    // include_once '../controller/updateController.php';
    include_once '../controller/logoutController.php';

    $userRepository = new UserController();
    $user_Admin = $userRepository->getUserById($userId);
}else{
   $userId = null; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="">Ekipet</a>
                </li>
                <li>
                    <a href="">Lojtarët</a>
                </li>
                <li>
                    <a href="">Profili</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="profile">
                <p>Name: </p>
                <p>Username: </p>
                <p>Email: </p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['logout-profile-btn'])){
        session_unset();
    }
?>