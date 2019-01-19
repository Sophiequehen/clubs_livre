<?php
$host = '127.0.0.1';
$dbname = 'clubs_livres';
$username = 'root';
$password = 'simplon';
$charset = 'utf8';
$collate = 'utf8_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_PERSISTENT => false,
	PDO::ATTR_EMULATE_PREPARES => false,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];

$pdo = new PDO($dsn, $username, $password, $options);

$output = '';
$result = $pdo->prepare("SELECT * FROM livres WHERE titre LIKE '%".$_POST["search"]."%' OR auteur LIKE '%".$_POST["search"]."%' OR maquettiste LIKE '%".$_POST["search"]."%' ");
$result->execute();
$count = $result->rowCount();
if($count > 0){ 	
	while ($row = $result->fetch()){
		$output .= "<ul class='liste_livres'>
		<li class='liste_titre'><a href='profil.php?id=".$row['id_livre']."'>".$row['titre']."</a></li>
		<li>Écrit par <span class='liste_datas'>".$row['auteur']."</span></li>
		<li>".$row['club']."</li>
		</ul>
		<div class='container_tiret'><div class='tiret'></div></div>";
	}
	echo $output;
}else{
	echo '<p>Pas de club correspondant</p>';
}
?>
