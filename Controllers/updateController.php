<?php
include_once '../Controllers/userController.php';
include_once '../Models/user.php';

if(isset($_POST['save-profile-btn'])){
    if(empty($_POST['email']) ||  empty($_POST['username']) || empty($_POST['password'])){
        // echo "<script>alert('Fill all fields!'); </script>";
    }else{
        $email = $_POST['email'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $user_id = $_POST['id'];
        $role = $_POST['role'];

        $userRepository = new UserController();

        if($role==='admin'){
            $userRepository->updateUser($user_id, $name, $username, $email, $password, $role, $user_Admin['active']);
            header("location:/ProjektiWeb/Views/dashboard.php?id=$user_id");
        }else if($role==='role'){
            $userRepository->updateUser($user_id,$name, $email, $username, $password, $role, $user['active']);
            header("location:/Projekt-UBT---Sem.-3/views/account.php?id=$user_id");
        }
    }
}
?>