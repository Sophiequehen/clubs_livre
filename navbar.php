<section class="nav">	
	<?php 
	$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$edit = strstr($url, 'edit.php');//search the string in the variable
	$profil = strstr($url, 'profil.php');
	if($url=="monlocal.local/clubs_livre/index.php"){
		echo "<a href='ajouter_livre.php'><h2>AJOUTER UN LIVRE</h2></a>";
		echo "<h1>LISTE DES LIVRES</h1>";
	}else if($url=="monlocal.local/clubs_livre/ajouter_livre.php"){
		echo "<a href='index.php'><h2>LISTE DES LIVRES</h2></a>";
		echo "<h1>AJOUTER UN CLUB</h1>";
	}else if($edit == true){
		echo "<a href='ajouter_livre.php'><h2>LISTE DES LIVRES</h2></a>";
		echo "<h1>MODIFIER CE CLUB</h1>";	
	}else if($profil == true){
		echo "<a href='index.php'><h2>LISTE DES LIVRES</h2></a>";
		echo "<h1>DESCRIPTION</h1>";	
	}
	?>
</section>