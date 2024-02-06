<?php
session_start();

include_once '../Controllers/userController.php';
include_once '../Models/user.php';


if(isset($_POST['edit-user'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $active = 0;

    $userRepository = new UserController();

    $userRepository->updateUser($id, $username, $email, $password, $role, $active);

    $admin_id = $_SESSION['id'];

    header("location:/ProjektiWeb/Views/dashboard.php?id=$admin_id");
}

?>
