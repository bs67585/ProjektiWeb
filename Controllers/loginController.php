<?php
session_start();
include_once '../Controllers/userController.php';
include_once '../Models/user.php';

if(isset($_POST['login'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION["email"] = $_POST['email'];
        $_SESSION["password"] = $_POST['password'];

        $userRepository = new UserController();

        $user  = $userRepository->getUserByEmailAndPassword($email,$password);

        if($user==null){
            echo "Invalid Credentials!";
        }elseif($user['role'] === 'admin'){
            $_SESSION["id"] = $user['id'];
            $_SESSION["active"] = 1;
            $_SESSION["role"] = $user['role'];
            $userRepository->updateUser($user['id'], $user['username'], $email, $password, $user['role'], $_SESSION["active"]);
            header("location:/ProjektiWeb/Views/dashboard.php?id=$user[id]");
        }
        else{
            $_SESSION["id"] = $user['id'];
            $_SESSION["active"] = 1;
            $_SESSION["role"] = $user['role'];
            $userRepository->updateUser($user['id'],$email,$user['username'],$password,$user['role'],$_SESSION["active"]);
            header("location:/Projekt-UBT---Sem.-3/views/account.php?id=$user[id]");
        }
    }
}
?>