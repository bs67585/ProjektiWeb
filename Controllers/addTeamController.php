<?php
include_once '../Controllers/teamController.php';
include_once '../Models/teams.php';

if(isset($_POST['add'])){
    if(empty($_POST['name']) || empty($_POST['ndeshjet']) || empty($_POST['fitoret']) || empty($_POST['humbjet'])
        || empty($_POST['diferenca']) || empty($_POST['piket'])
    ){
        echo "Fill all fields!";
    } else {
        $name = $_POST['name'];
        $ndeshjet = $_POST['ndeshjet'];
        $fitoret = $_POST['fitoret'];
        $humbjet = $_POST['humbjet'];
        $diferenca = $_POST['diferenca'];
        $piket = $_POST['piket'];
        $id = $name.rand(100,999);

        $team  = new Team($id, $name, $ndeshjet, $fitoret, $humbjet, $diferenca, $piket);
        $teamRepository = new TeamController();

        $teamRepository->insertTeam($team);
        header("location:/ProjektiWeb/Views/dashboard.php");
    }
}
?>
