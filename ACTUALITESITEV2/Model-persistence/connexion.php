<?php
$conn = new mysqli("localhost", "mglsi_user", "passer", "mglsi_news");
if($conn->connect_error){
    die("Erreur de connection");
}

?>