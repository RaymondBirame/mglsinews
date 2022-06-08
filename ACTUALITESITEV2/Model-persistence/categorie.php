<?php
require_once('../Model/categorie.php');
require_once('connexion.php');

function getCategories(){
    global $conn;
    $categories = array();
    $req = "SELECT * FROM categorie";
    $result = $conn->query($req);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $categories[] = new categorie($row['id'], $row['libelle']);
        }
    }
    else{
        return null;
    }
    return $categories;
}
?>