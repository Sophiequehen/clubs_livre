<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THIS USER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php 
// @include 'dataController.php';
@include 'livreController.php';
@include 'navbar.php';
?>

<body>
	<?php
	Database::connect();
	$id = $_GET['id'];
	$requete = Database::$pdo->prepare("SELECT titre, auteur, club, collection, numero_volume, annee, nombre_exemplaires, papier, imprimeur, relieur, maquettiste, caractere, format, notes, proprietaire FROM livres WHERE id_livre = :id");
	$requete->execute(['id' => $id]);
	foreach ($requete->fetchAll() as $row) {

		?>
		<section class="home profil">
			<div class="name-profil">
				<p><?php echo $row['titre'] ?></p>
				<p class="auteur"><?php echo $row['auteur'] ?></p>
			</div>

			<div class="infos-profil">
				<?php echo
				"<ul>
				<li class='titre'>".$row['club']."</li>
				<li class='infos'>Collection ".$row['collection'].", N°".$row['numero_volume']."</li>
				<li class='infos'>Publié en ".$row['annee']."</li>
				<li class='infos'>À ".$row['nombre_exemplaires']." exemplaires</li>
				<li class='infos'>Imprimé par ".$row['imprimeur']."</li>
				<li class='infos'>Sur du ".$row['papier']."</li>
				<li class='infos'>Relié par ".$row['relieur']."</li>
				<li class='infos'>Maquettes de ".$row['maquettiste']."</li>
				<li class='infos'>Composé en ".$row['caractere']."</li>
				<li class='infos'>Format : ".$row['format']."</li>
				<li class='infos'>Remarques : ".$row['notes']."</li>
				<li class='infos'>Appartient à ".$row['proprietaire']."</li>
				</ul>"
				?>
			</div>
		</section>
		<?php
	}
	?>
</body>
</html>