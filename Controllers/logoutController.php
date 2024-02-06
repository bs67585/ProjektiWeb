<?php
include_once '../Controllers/userController.php';
include_once '../Models/user.php';

if(isset($_POST['logout-btn'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $active = 0;

    $userRepository = new UserController();

    $userRepository->updateUser($id,$email,$username,$password,$role,$active);

    header("location:/ProjektiWeb/Views/index.php");
}

?>