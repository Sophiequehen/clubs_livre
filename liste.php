<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des livres</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
// @include 'dataController.php';
@include 'livreController.php';
@include 'navbar.php';
?> 
<body>
	<section class="home">
		<div class="container_liste">
			<?php
			Database::connect();
			$newUser = new Livre;	
			foreach ($newUser->read()->fetchAll() as $row) {
				echo "<ul class='liste_livres'>
				<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
				<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
				<li>".$row['club']."</li>
				</ul>";
			} 
			?>
		</div>
	</section>
<!-- 	<li>Collection ".$row['collection']."</li>
				<li>N°".$row['numero_volume']."</li>
				<li>En ".$row['annee']."</li>
				<li>À ".$row['nombre_exemplaires']." exemplaires</li>
				<li>Imprimé par ".$row['imprimeur']."</li>
				<li>Sur du ".$row['papier']."</li>
				<li>Relié par ".$row['relieur']."</li>
				<li>Maquettes de ".$row['maquettiste']."</li>
				<li>Composé en ".$row['caractere']."</li>
				<li>Format : ".$row['format']."</li>
				<li>Remarques : ".$row['notes']."</li>
				<li>Appartient à ".$row['proprietaire']."</li> -->
			</body>
			</html>