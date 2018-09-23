<?php 
include ('connect.php');

$reponse = $db->query('SELECT * FROM advert WHERE id > 4 ORDER BY nom');
echo 
	"<tr>
		<th>Nom</th>
		<th>Prenom</th>
	</tr>";

		while($donnees = $reponse->fetch())

		{ 
			echo 
	
	"<tr>
    <td>".$donnees['nom']."</td>
	<td>".$donnees['prenom']."</td>
	
	</tr>";
	//for ($i=0; $i < 10; $i++) { 
	//	echo $donnees[1][0];
	//}
	
		}
			//<td>".$donnees['prenom']."</td>	
	//<td>".$donnees['mail']."</td>
		$reponse->closeCursor();
		$obj = json_encode($reponse);
		
 ?>