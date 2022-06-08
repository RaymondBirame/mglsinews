<?php
require_once('../Model/article.php');
require_once('connexion.php');

getArticles();
function getArticles(){
    global $conn;
    $articles = array();
    $req = "SELECT * FROM article";
    $result = $conn->query($req);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $articles[] = new article($row['id'], $row['titre'], $row['contenu'], $row['categorie'], $row['dateCreation'], $row['dateModification']);
        }
    }
    else{
        return null;
    }
    return $articles;
}

function getArticlesByCategorie($categorie){
    global $conn;
    $articles = array();
    $req = "SELECT * FROM article WHERE categorie = '$categorie'";
    $result = $conn->query($req);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $articles[] = new article($row['id'], $row['titre'], $row['contenu'], $row['categorie'], $row['dateCreation'], $row['dateModification']);
        }
    }
    else{
        return null;
    }
    return $articles;
}
?>