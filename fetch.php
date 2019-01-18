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
$result = $pdo->prepare("SELECT * FROM livres WHERE titre LIKE '%".$_POST["search"]."%'");
$result->execute();
$count = $result->rowCount();
if( $count > 0){
	$output .= '<h4>Résultats :</h4>';
	while ($row = $result->fetch()){
		$output .= '<h3>'.$row["titre"].'</h3>';
	}
	echo $output;
}else{
	echo 'Pas de club inventorié';
}
?>
