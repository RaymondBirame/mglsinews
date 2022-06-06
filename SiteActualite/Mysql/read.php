<?php
// Verifiez si le paramettre id existe
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Inclure le fichier config
    require_once "connexion.php";
    
    // Preparer la requete
    $sql = "SELECT * FROM article WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind les variables
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute la requette
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* recuperer l'enregistrement */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // recuperer les champs
                $titre = $row["titre"];
                $contenu = $row["contenu"];
                $date = $row["dateCreation"];
            } else{
                // Si pas de id correct retourne la page d'erreur
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! une erreur est survenue.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Si pas de id correct retourne la page d'erreur
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
    <div class="wrapper">
        <div>
            <div>
                <div>
                    <h1 >Voir l'enregistremnt</h1>
                    <div>
                        <label></label>
                        <p><b><?php echo $row["titre"]; ?></b></p>
                    </div>
                    <div>
                        <label></label>
                        <p><b><?php echo $row["contenu"]; ?></b></p>
                    </div>
                    <div>
                        <label></label>
                        <p><b><?php echo $row["dateCreation"]; ?></b></p>
                    </div>
                    <p><a href="../index.php" >Retour</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
