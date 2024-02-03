<?php
include_once '../Controllers/userController.php';
include_once '../Models/user.php';

if(isset($_POST['logout-btn'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $role = $_POST['role'];
    $active = 0;

    $userRepository = new UserController();

    $userRepository->updateUser($id,$email,$username,$password,$role,$active);

    header("location:/ProjektiWeb/Views/index.php");
}

?>