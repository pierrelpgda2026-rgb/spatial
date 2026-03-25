<?php
require_once "model/database.php";
require_once "controller/PointController.php";
require_once "model/PointModel.php";
require_once "view/header.php";
$connexion = mysqli_connect("localhost", "root", "", "spatial_db");

$controller = new PointController($connexion);

$action = $_GET['action'] ?? 'listPoints';

switch($action){
    case 'createPoint':
        $controller->create();
        break;
    case 'editPoint':
        $controller->edit();
        break;
    default:
        $controller->list();
}
require_once "view/footer.php";
?>