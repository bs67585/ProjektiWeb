<?php
session_start();

include_once '../Controllers/teamController.php';
include_once '../Models/teams.php';


if(isset($_POST['edit-team'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $ndeshjet = $_POST['ndeshjet'];
    $fitoret = $_POST['fitoret'];
    $humbjet = $_POST['humbjet'];
    $diferenca = $_POST['diferenca'];
    $piket = $_POST['piket'];

    $teamRepository = new TeamController();

    $teamRepository->updateTeam($id, $name, $ndeshjet, $fitoret, $humbjet, $diferenca, $piket);

    $admin_id = $_SESSION['id'];

    // header("location:/ProjektiWeb/Views/dashboard.php?id=$admin_id");
    print_r($id);
}

?>
