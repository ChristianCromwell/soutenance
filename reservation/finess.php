<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form HTML Template</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
<?php

$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "ange";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["reserver"])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nom = $_POST["Nom"];
		$destination = $_POST["destination"];
		$agence = $_POST["agence"];
		$heure_depart = $_POST["heure_depart"];
		$bagage = $_POST["bagage"];
		$classe = $_POST["classe"];
		$siege = $_POST["siege"];
		$adulte = $_POST["adulte"];
		$enfant = $_POST["enfants"];
		$sql = "INSERT INTO reservation (Nom, destination, agence, heure_depart, bagage, classe, siege,adulte,enfant)
				VALUES ('$nom', '$destination', '$agence', '$heure_depart', '$bagage', '$classe', '$siege','$adulte','$adulte')";

		if ($conn->query($sql) === TRUE) {
			?>
			<script> alert("La réservation a été effectuée avec succès");</script>
		<?php
			
		} else {
			echo "Erreur lors de la réservation : " . $conn->error;
		}
	}
}
?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>FINESS VOYAGE</h1>
							<p>"Chez FINESS VOYAGE, nous croyons que chaque voyage est une chance de créer des souvenirs précieux, 
								de se connecter avec les autres et de découvrir de nouvelles cultures.".
							</p>
							<p>Nous avons une équipe d'agents de voyage professionnels et sympathiques qui accueillent chaleureusement les clients 
								dans notre bureau. Ils sont en train de discuter avec les clients, de planifier des itinéraires personnalisés et 
								de répondre à toutes leurs questions avec expertise.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="" method = "post">
								<div class="form-group">
									<span class="form-label">Nom</span>
									<input class="form-control" type="text" placeholder="Enter votre nom" name = "Nom">
								</div>
								<div class="form-group">
									<span class="form-label">Destination</span>
									<input class="form-control" type="text" placeholder="Enter a destination" name = "destination">
								</div>
								<div class="form-group">
									<span class="form-label">Agence</span>
									<input class="form-control" type="text" placeholder="Choisir l'agence" name = "agence">
								</div>
								<div class="row">
									<div class="col-sm-6">
									<div class="form-group">
											<span class="form-label">heure_depart</span>
											<input class="form-control" type="time" id=" heure" required name="heure_depart">
										</div>
									</div>
									<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">siege</span>
										<select class="form-control" name = "siege">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
										</select>
										<span class="select-arrow"></span>
									</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">bagage</span>
										<select class="form-control" name = "bagage">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">classes</span>
											<select class="form-control" name = "classe">
												<option>classe</option>
												<option>confort</option>
												<option>vip</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Adulte</span>
											<select class="form-control" name = "adulte">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">enfant</span>
											<select class="form-control" name = "enfants">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								
								<div class="form-btn row">
									<button class="btn btn-primary" name = "reserver">Resever</button>
									
									<button class="btn btn-success">
										 <a href ="./index.php">RETOUR</a>
									</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>