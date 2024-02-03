<?php
include_once '../Controllers/userController.php';
include_once '../Models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    } else {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);
        $active = 0;

        $user  = new User($id, $username, $email, $password);
        $userRepository = new UserController();

        $userRepository->insertUser($user);
    }
}
?>
