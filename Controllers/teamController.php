<?php

include_once '../Database/DBConfig.php';

class teamController {
    private $connection;

    function __construct() {
        $conn = new DBConfig;
        $this->connection = $conn->startConnection();
    }


    function insertTeam($team) {

        $conn = $this->connection;

        $id = $team->getId();
        $name = $team->getName();
        $ndeshjet = $team->getNdeshjet();
        $fitoret = $team->getFitoret();
        $humbjet = $team->getHumbjet();
        $diferenca = $team->getDiferenca();
        $piket = $team->getpiket();

        $sql = "INSERT INTO ekipi (id, name, ndeshjet, fitoret, humbjet, diferenca, piket) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $ndeshjet, $fitoret, $humbjet, $diferenca, $piket]);

        $teamId = $conn->lastInsertId();
     
    }

    function getAllTeams() {
        $conn = $this->connection;

        $sql = "SELECT * FROM ekipi";

        $statement = $conn->query($sql);
        $teams = $statement->fetchAll();

        return $teams;
    }

    function getTeamById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM team WHERE id='$id'";

        $statement = $conn->query($sql);
        $team = $statement->fetch(PDO::FETCH_ASSOC);

        return $team;
    }

    // function getUserByEmailAndPassword($email, $password) {
    //     $conn = $this->connection;

    //     $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    //     $statement = $conn->query($sql);
        
    //     if ($statement->execute()) {
    //         $user = $statement->fetch(PDO::FETCH_ASSOC);
    
    //         if ($user==null) {
    //             return null;
    //         } else {
    //             // print_r($user); 
    //             return $user;
    //         }
    //     } else {
    //         return null;
    //     }
    // }

    function updateTeam($id, $name, $ndeshjet,  $fitoret, $humbjet, $diferenca, $piket) {
         $conn = $this->connection;

         $sql = "UPDATE ekipi SET name=?, ndeshjet=?, fitoret=?, humbjet=?, diferenca=?, piket=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name, $ndeshjet, $fitoret, $humbjet, $diferenca, $piket, $id]);
    } 

    function deleteTeam($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM ekipi WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    } 
}

?>