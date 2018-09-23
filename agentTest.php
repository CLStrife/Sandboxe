<?php
/**
 * Created by PhpStorm.
 * User: wli
 * Date: 12/07/2018
 * Time: 10:04
 */

include ('connect.php');

$requete = "SELECT * FROM advert ORDER BY nom";
$req = $db -> prepare($requete);
$req -> execute();
/*
$reponse = $db->query('SELECT * FROM advert ORDER BY nom');

*/
$compteur = 0;
$tab = array();


while($donnees = $req->fetch(PDO::FETCH_ASSOC))
{
$tab['agent'] [$compteur] =  array_map(null, $donnees);
$compteur ++;
//$tab = json_encode($tableau);
}
echo json_encode($tab, JSON_UNESCAPED_UNICODE);


<?php
include ('connect.php');

$reponse = $db->query('SELECT * FROM advert WHERE id <= 4 ORDER BY nom'); // requete à executer
echo "
    <tr>
		<th>Prenom</th>
		<th>Nom</th>
		
	</tr>";
		while($donnees = $reponse->fetch())
		{
		    echo "
    <tr>
    
	<td id =".$donnees['prenom'].">".$donnees['nom']."</td>	 
	<td id =".$donnees['prenom'].">".$donnees['prenom']."</td>	
	</tr>

";
		    //en id on met le critère pour identifier les colonnes et appliquer le CSS
		}
		$reponse->closeCursor();


