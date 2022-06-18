<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <title> Gestionnaire RT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures du bâtiment RT </h1>
    <!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style1.css -->

   </header><!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style2.css -->
  

<h1> Présentation des données </h1>


<h2 class="centre"> Affichage des mesures des capteurs du bâtiment RT </h2>

<?php
include ("SAE23.php");

				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";
				/* Affichage de la liste des pièces  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';


					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
			?>

		<footer>
			<p><a href="login_gest.php">Retour à l'identification</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
  </body>
    
</html>
