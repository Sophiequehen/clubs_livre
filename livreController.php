<?php
@include 'dataController.php';
class Livre extends Database{

	public function create($titre, $auteur, $club, $collection, $numero_volume, $annee, $nombre_exemplaires, $papier, $imprimeur, $relieur, $maquettiste, $caractere, $format, $notes, $proprietaire){

		$reqcreate = parent::$pdo->prepare("INSERT INTO livres (titre, auteur, club, collection, numero_volume, annee, nombre_exemplaires, papier, imprimeur, relieur, maquettiste, caractere, format, notes, proprietaire) VALUES('$titre', '$auteur', '$club', '$collection', '$numero_volume', '$annee', '$nombre_exemplaires', '$papier', '$imprimeur', '$relieur', '$maquettiste', '$caractere', '$format', '$notes', '$proprietaire')");
		$reqcreate->execute();
		echo $titre." est désormais ajouté !";
	}

	public function read(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres");
		$reqread->execute();
		return $reqread;
	}

	public function readFrancais(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres WHERE club = 'Club français du livre'");
		$reqread->execute();
		return $reqread;
	}

	public function readMeilleur(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres WHERE club = 'Club du meilleur livre'");
		$reqread->execute();
		return $reqread;
	}

	public function readMois(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres WHERE club = 'Club du livre du mois'");
		$reqread->execute();
		return $reqread;
	}

	public function readFemme(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres WHERE club = 'Club de la femme'");
		$reqread->execute();
		return $reqread;
	}

	public function readLibraires(){

		$reqread = parent::$pdo->prepare("SELECT * FROM livres WHERE club = 'Club des libraires de France'");
		$reqread->execute();
		return $reqread;
	}
	// public function edit($nom, $prenom, $annee, $commentaires, $id){

	// 	$reqedit = parent::$pdo->prepare("UPDATE personne SET nom=:nom, prenom=:prenom, annee=:annee, commentaires=:commentaires WHERE id=:id");
	// 	$reqedit->execute([':nom' => $nom, ':prenom' => $prenom, ':annee' => $annee, ':commentaires' => $commentaires, ':id' => $id]);
	// 	header('Location:liste.php');
	// }

	// public function delete($id){

	// 	$reqdelete = parent::$pdo->prepare("DELETE FROM personne WHERE id=:id");
	// 	$reqdelete->execute([':id' => $id]);
	// 	header('Location:liste.php');
	// }
}
?>

<!-- //$pattern verifies the special characters for the input
$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';     
if (preg_match($pattern, $name)){
//function
} -->