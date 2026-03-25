<?php
class PointModel {
    private $connexion;

    public function __construct($connexion){
        $this->connexion = $connexion;
    }

    // Lister avec zone (JOIN)
    public function getAll(){
        $sql = "SELECT point.*, zone.nom as zone_nom 
                FROM point 
                JOIN zone ON point.id_zone = zone.id";
        return mysqli_query($this->connexion, $sql);
    }

    // Ajouter
    public function create($lat, $long, $surface, $id_zone){
        $sql = "INSERT INTO point(latitude, longitude, surface, id_zone)
                VALUES('$lat','$long','$surface','$id_zone')";
        mysqli_query($this->connexion, $sql);
    }

    // Récupérer un point
    public function getById($id){
        $sql = "SELECT * FROM point WHERE id=$id";
        return mysqli_query($this->connexion, $sql);
    }

    // Modifier
    public function update($id, $lat, $long, $surface, $id_zone){
        $sql = "UPDATE point 
                SET latitude='$lat', longitude='$long', surface='$surface', id_zone='$id_zone'
                WHERE id=$id";
        mysqli_query($this->connexion, $sql);
    }
}
?>