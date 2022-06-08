<?php
require_once('../Model-persistence/article.php');

function mesArticles(){
    return getArticles();
}

function mesArticlesParCategorie($categorie){
    return getArticlesByCategorie($categorie);
}

?>