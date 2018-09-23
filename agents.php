<?php 
include ('connect.php');

$reponse = $db->query('SELECT * FROM advert WHERE id <= 4 ORDER BY nom');
echo 
	"<tr>
		
		<th>Prenom</th>
		<th>Nom</th>
		
	</tr>";
		
		while($donnees = $reponse->fetch())

		{ 
			echo 
	
	"<tr>
	<td id =".$donnees['prenom'].">".$donnees['nom']."</td>	
	<td id =".$donnees['prenom'].">".$donnees['prenom']."</td>	
	
	</tr>
	

";


		}
			//<td>".$donnees['nom']."</td><td>".$donnees['mail']."</td>
		$reponse->closeCursor();
		//$obj = json_encode($reponse);


