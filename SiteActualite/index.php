<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Actu</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div id="header">
		<div id="logo">
			<h1><span class="grand">Xiibar_Yii</span></h1>
		</div>
		<div id="menu">
			<ul>
			<?php
                 // Inclure le fichier config
                 require_once "Mysql/connexion.php";
            
                if($result = mysqli_query($link,"SELECT * FROM categorie ")){
                    if(mysqli_num_rows($result) > 0){
							
                            while($row = mysqli_fetch_array($result) ){
                                
							
                                echo '<a href="Mysql/readcategorie.php?id='. $row['id'] .'" class="me-3" ><span>'. $row['libelle'] .'</span></a>';

                                    
                            }
                        /* Free result set */
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                    }
                } else{
                    echo "Oops! Une erreur est survenue";
                }

            ?>
				
			</ul>
		</div>
	</div>

	<div id="contener">
		<span>
			<h1 style="padding-bottom: -150px">A la Une</h1> 
			
		</span>

		<div id="articles">
		<?php
                 // Inclure le fichier config
                 require_once "Mysql/connexion.php";
            
                if($result = mysqli_query($link,"SELECT * FROM article ORDER BY id DESC LIMIT 4")){
                    if(mysqli_num_rows($result) > 0){
							
                            while($row = mysqli_fetch_array($result) ){
                                
	
								echo "<h2>". $row['titre'] . "</h2>";
							
                                echo '<a href="Mysql/read.php?id='. $row['id'] .'" class="me-3" ><span>Voir</span></a>'
								;

                                    
                            }
                        /* Free result set */
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                    }
                } else{
                    echo "Oops! Une erreur est survenue";
                }

            ?>

		</div>
		<div class="clear"></div>
		
	</div>
	<div class="clear"></div>
	<br/>
	<br/><br/><br/><br/><br/>
	<div id="footer">
		<div id="haut">
			<div id="partenaires">
				<h4>Partenaires</h4>
				<ul>
					<li><a href="" title="">Vos partenaires</a></li>
					<li><a href="" title="">Vos partenaires</a></li>
					<li><a href="" title="">Vos partenaires</a></li>
					<li class="dernier"><a href="" title="">Vos partenaires</a></li>
				</ul>
			</div>
			<div id="adress">
				<h4>Nous trouver</h4>
				<table>
					<tr>
						<td>Pays:</td>
						<td>Sénégal</td>
					</tr>
					<tr>
						<td>Ville:</td>
						<td>Dakar</td>
					</tr>
					<tr>
						<td>Mobile:</td>
						<td>781234567</td>
					</tr>
					<tr>
						<td class="dernier">E-mail:</td>
						<td class="dernier"><a href="mailto:votremail@domaine.com" class="mail" title="">raybidiagne@gmail.com</a></td>
					</tr>
				</table>
			</div>
			<div id="reseaux">
				<h4>Suivez-Nous</h4>
				
				<ul>
					<li><a href="" title="">Facebook</a></li>
					<li><a href="" title="">Twitter</a></li>
					<li><a href="" title="">LinkedIn</a></li>
					<li class="dernier"><a href="" title="">Delicious</a></li>
				</ul>
			</div>
			<div id="newsletter">
				<h4>Newsletter</h4>
				<input type="text" value="Votre adresse mail" name="newsletter">
				<input type="submit" value="Envoyer" name="envoi" class="envoi">
			</div>
		</div>
	</div>
</body>
</html>
