<?php
session_start();

include_once '../Controllers/userController.php';
include_once '../Models/user.php';

$id = $_POST['id'];

    $userRepository = new UserController();

    $userRepository->deleteUser($id);

    $admin_id = $_SESSION['id'];

    header("location:/ProjektiWeb/Views/dashboard.php?id=$admin_id");

?>