<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit this User</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
@include 'dataController.php';
@include 'personneController.php';
@include 'navbar.php';
?> 
<body>
	<section class="home">
		<!-- <img src="img/community.jpg"> -->
		<?php
		Database::connect();
		$id = $_GET['id'];
		if (empty($_POST)){
			$requete = Database::$pdo->prepare("SELECT nom, prenom, annee, commentaires FROM personne WHERE id = :id");
			$requete->execute(['id' => $id]);
			foreach ($requete->fetchAll() as $row) {

				?>
				<form method="POST" action="edit.php?id=<?php echo $id; ?>">
					<div class="name">
						<div>
							<label for="nom">Nom : </label>
							<input type="text" name="nom" id="nom" required value="<?php echo $row['nom'] ?>">
						</div>
						<div>
							<label for="prenom">Prénom : </label>
							<input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom'] ?>" required>
						</div>
						<label for="annee">Année de naissance : </label>
						<input type="number" name="annee" id="annee" value="<?php echo $row['annee'] ?>" min="1898" max="2012" required>
					</div>
					<label for="commentaires">Commentaires : </label>
					<textarea type="text" name="commentaires" id="commentaires"><?php echo $row['commentaires'] ?></textarea>
					<button type="submit" value="add">Modifier cette personne</button>

					<?php
				}
			}else{
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$annee = $_POST['annee'];
				$commentaires = addslashes($_POST['commentaires']);
				$newUser = new Personne;	
				$newUser->edit($nom, $prenom, $annee, $commentaires, $id);
			}

			?>
		</form>
	</section>
</body>
</html>