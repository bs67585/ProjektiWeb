<?php

include_once '../Database/DBConfig.php';

class UserController {
    private $connection;

    function __construct() {
        $conn = new DBConfig;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user) {

        $conn = $this->connection;

        $id = $user->getId();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (id, username, email, password) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $username, $email, $password]);

        $userId = $conn->lastInsertId();
     
    }

    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function getUserByEmailAndPassword($email, $password) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

        $statement = $conn->query($sql);
        
        if ($statement->execute()) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($user==null) {
                return null;
            } else {
                return $user;
            }
        } else {
            return null;
        }
    }

    function updateUser($id, $username, $email,  $password, $role, $active) {
         $conn = $this->connection;

         $sql = "UPDATE user SET username=?, email=?, password=?, role=?, active=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$username, $email, $password, $role, $active, $id]);
    } 

    function deleteUser($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    } 
}

?>