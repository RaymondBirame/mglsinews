<?php
    require_once '../controller/article.php';
    require_once '../controller/categorie.php';
    $categories = mesCategories();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Acceuil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Xiibar_Yii</h1>
            <nav>
            <?php
                echo '<a href="index.php">Toute L\'Actualité</a>';
                foreach($categories as $categorie){
                    echo '<a href="index.php?categorie='.$categorie->getId().'">'.$categorie->getLibelle().'</a>';
                }
            ?>
            </nav>
        </header>
                
                <?php
                    if(isset($_GET['categorie'])){
                        $articles = mesArticlesParCategorie($_GET['categorie']);
                        $message = "".$_GET['categorie'];
                    }
                    else{
                        $articles = mesArticles();
                        $message = "Toute l'actualite";
                    }
                    echo '<h2 style="text-align: center;font-family: sans">'.$message.'</h2>';
                    if(isset($articles)){
                        foreach($articles as $article){
                            echo '<div class="wrapper2">
                                <div class="product-info">
                                <div class="product-text">';
                            echo '<h1 style="font-family: sans">'.$article->getTitre().'</h1>';
                            echo '<h3 style="font-family: sans">'.$article->getContenu().'</h3>';
                            echo  '<div><p style="font-family: sans">Date de pub : '.$article->getDateCreation();
                            echo '</div></div></div></div>';
                        }
                    }
                    else{
                        echo '<h1 style="color: blue; text-align: center;padding-top:100px;;font-family: sans">0 Articles</h1>';
                    }
                ?>
    </body>
</html>