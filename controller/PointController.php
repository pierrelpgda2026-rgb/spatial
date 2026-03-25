<?php
class PointController {
    private $model;

    public function __construct($connexion){
        $this->model = new PointModel($connexion);
    }

    public function list(){
        $points = $this->model->getAll();
         require_once './view/point/list.php';
    }

    public function create(){
        if($_POST){
            $this->model->create($_POST['latitude'], $_POST['longitude'], $_POST['surface'], $_POST['id_zone']);
            header("Location: index.php?action=listPoints");
        }
        require "view/point/create.php";
    }

    public function edit(){
        $id = $_GET['id'];
        if($_POST){
            $this->model->update($id, $_POST['latitude'], $_POST['longitude'], $_POST['surface'], $_POST['id_zone']);
            header("Location: index.php?action=listPoints");
        }
        $point = $this->model->getById($id);
        require "view/point/edit.php";
    }
}
?> 