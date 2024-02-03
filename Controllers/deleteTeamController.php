<?php
session_start();

include_once '../Controllers/teamController.php';
include_once '../Models/teams.php';

$id = $_POST['id'];

    $teamRepository = new TeamController();

    $teamRepository->deleteTeam($id);

    $admin_id = $_SESSION['id'];

    header("location:/ProjektiWeb/Views/dashboard.php?id=$admin_id");

?>