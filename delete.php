<?php
@include 'dataController.php';
@include 'personneController.php';

Database::connect();
$id = $_GET['id'];
$newUser = new Personne;
$newUser->delete($id);
?>