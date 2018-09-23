<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="cc_tableau.css">
	<title>Call Center</title>
</head>
<body>
	<h1 class="banniere">Booking</h1>
	<div class="zone1">
		<div class="container">

		<div class="col-lg-1" id="tableau">
			<table class="table table-bordered" id="table">
				<tr>
					<th scope="col">Nom</th>
					<th scope="col">Prenom</th>
					<th scope="col">Mail</th>
				</tr>
				

			</table>
		</div>
		
	</div>
	</div>

	<div class="waitingCall">
		<table id="numCall" class="table table-bordered">

		</table>
	</div>

	<div>
		<p id="random">
			
		</p>
	</div>


	<script>
        var timer = 12000;
        var num = 0;
        var list_File = ['agents.php', 'agents2.php'];// array des scripts à charger
        var xhr = new XMLHttpRequest();


        function  refresh() {
            xhr.open("GET", list_File[num], true); //xhr charge les configuration de fonction(), (methode de la requete = GET, appel de la liste de fichiers)
            xhr.send();
        }

        function charger() {
             // envoie de la requête
            //refresh();

            if (num < list_File.length - 1) { // tant que le compteur num est inférieur à la taille de l'array list_File
                num++; // incrémentation
            }
            else {
                num = 0; // sinon on affecte la valeur 0 pour revenir au début de l'array
            }
        }
        function load() {


            xhr.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('table').innerHTML = this.responseText;
                }
            }
            setInterval(charger, timer);
            setTimeout("setInterval(refresh, timer /4)", 100);
            //setTimeout("setInterval(refresh, timer)", timer /2);
            //setTimeout("setInterval(refresh, timer)", 3 * timer / 4);
            }

        window.onload = load; // évènement à executer au chargement de la fenêtre
        /*{
            load();
        }
*/

	</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>