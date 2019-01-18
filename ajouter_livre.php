<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajouter un club</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
// @include 'dataController.php';//include can be put in the personneController.php
@include 'livreController.php';
@include 'navbar.php';

?> 
<body>
	<section class="home">
		<!-- <img src="img/community.jpg"> -->

		<form method="POST" action="ajouter_livre.php">
			<h1>Nouveau club !</h1>
			<div>
				<label for="titre">Titre : </label>
				<input type="text" name="titre" id="titre" required>
			</div>
			<div>
				<label for="auteur">Auteur : </label>
				<input type="text" name="auteur" id="auteur" required>
			</div>
			<div>
				<label for="club">Club : </label>
				<input type="text" name="club" id="club" required>
			</div>
			<div>
				<label for="collection">Collection : </label>
				<input type="text" name="collection" id="collection">
			</div>
			<div>
				<label for="numero_volume">N° de collection : </label>
				<input type="text" name="numero_volume" id="numero_volume">
			</div>
			<div>
				<label for="nombre_exemplaires">Nombre d'exemplaires : </label>
				<input type="text" name="nombre_exemplaires" id="nombre_exemplaires">
			</div>
			<div>
				<label for="annee">Année de publication : </label>
				<input type="number" name="annee" id="annee" placeholder="ex : 1992">
			</div>
			<div>
				<label for="papier">Papier : </label>
				<input type="text" name="papier" id="papier">
			</div>
			<div>
				<label for="imprimeur">Imprimeur : </label>
				<input type="text" name="imprimeur" id="imprimeur">
			</div>
			<div>
				<label for="relieur">Relieur : </label>
				<input type="text" name="relieur" id="relieur">
			</div>
			<div>
				<label for="maquettiste">Maquettiste(s) : </label>
				<input type="text" name="maquettiste" id="maquettiste">
			</div>
			<div>
				<label for="caractere">Caractère : </label>
				<input type="text" name="caractere" id="caractere">
			</div>
			<div>
				<label for="format">Format : </label>
				<input type="text" name="format" id="format" placeholder="ex : 21 x 29,7">
			</div>
			<div>
				<label for="notes">Remarques : </label>
				<textarea type="text" name="notes" id="notes"></textarea>
			</div>
			<div>
				<label for="proprietaire">Propriétaire : </label>
				<input type="text" name="proprietaire" id="proprietaire">
			</div>
			<!-- <div> -->
				<button type="submit" value="add">Ajouter un club</button>
				<!-- </div> -->
				<p>
					<?php
					Database::connect();

					if (!empty($_POST)){
						$titre = addslashes($_POST['titre']);
						$auteur = addslashes($_POST['auteur']);
						$club = addslashes($_POST['club']);
						$collection = addslashes($_POST['collection']);
						$numero_volume = addslashes($_POST['numero_volume']);
						$annee = addslashes($_POST['annee']);
						$nombre_exemplaires = addslashes($_POST['nombre_exemplaires']);
						$papier = addslashes($_POST['papier']);
						$imprimeur = addslashes($_POST['imprimeur']);
						$relieur = addslashes($_POST['relieur']);
						$maquettiste = addslashes($_POST['maquettiste']);
						$caractere = addslashes($_POST['caractere']);
						$format = addslashes($_POST['format']);
						$notes = addslashes($_POST['notes']);
					$proprietaire = addslashes($_POST['proprietaire']); //addslashes to avoid the probleme of apostrophe

					//Request to see if the user already exists
					$requete = Database::$pdo->prepare("SELECT titre, club FROM livres WHERE titre='$titre' AND club='$club'");
					$requete->execute();

					//if he doesn't (so equal to 0)
					if($requete->rowCount() === 0){

						$newBook = new Livre();
						$newBook->create($titre, $auteur, $club, $collection, $numero_volume, $annee, $nombre_exemplaires, $papier, $imprimeur, $relieur, $maquettiste, $caractere, $format, $notes, $proprietaire);
						
					}else{
						echo 'Ce livre existe déjà';
					}
				}
				?>
			</p>
		</form>
	</section>
</body>
</html>