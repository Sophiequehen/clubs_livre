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
	<div class="filters">
		<ul class="liste_clubs">
			<li class="select_club">Sélectionner un club<img id="img_down" src="img/down.png"><img id="img_top" class="display_none" src="img/top.png"></li>
			<li class="display_none" id="francais">Club français du livre</li>
			<li class="display_none" id="meilleur">Club du meilleur livre</li>
			<li class="display_none" id="mois">Club du livre du mois</li>
			<li class="display_none" id="femme">Club de la femme</li>
			<li class="display_none" id="libraires">Club des libraires de France</li>
			<li class="display_none" id="all">Voir tous les clubs</li>
		</ul>
	</div>
	<section class="home">
		<div class="container_liste">
			<input type="text" name="search_text" id="search_text" placeholder="Rechercher un titre">
			<div id="before_ajax">
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->read()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
			<div id="result">
			</div>
			<div class="display_none" id="clubs_francais">
				<h2>Clubs français du livre : </h2>
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->readFrancais()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
			<div class="display_none" id="clubs_meilleur">
				<h2>Clubs du meilleur livre : </h2>
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->readMeilleur()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
			<div class="display_none" id="clubs_mois">
				<h2>Clubs du mois : </h2>
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->readMois()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
			<div class="display_none" id="clubs_femme">
				<h2>Clubs de la femme : </h2>
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->readFemme()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
			<div class="display_none" id="clubs_libraires">
				<h2>Clubs des libraires de France : </h2>
				<?php
				Database::connect();
				$newUser = new Livre;	
				foreach ($newUser->readLibraires()->fetchAll() as $row) {
					echo "<ul class='liste_livres'>
					<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
					<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
					<li>".$row['club']."</li>
					</ul>
					<div class='container_tiret'><div class='tiret'></div></div>";
				} 
				?>
			</div>
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

				<script type="text/javascript" src="js/jquery.js"></script>
				<script type="text/javascript" src="js/filters.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#search_text').keyup(function(){
							var txt = $(this).val();
							if(txt != ''){
								$('#before_ajax').addClass('display_none');
								$.ajax({
									url:"fetch.php",
									method:"post",
									data:{search:txt},
									dataType:"text",
									success:function(data){
										$('#result').html(data);
									}
								});
							}else{
								$('#result').html('');
								$.ajax({
									url:"fetch.php",
									method:"post",
									data:{search:txt},
									dataType:"text",
									success:function(data){
										$('#result').html(data);
									}
								});
							};
						});
					});
				</script>
			</body>
			</html>