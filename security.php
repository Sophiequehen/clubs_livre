<?php 
function securite_BDD($string){
	//on regarde si le type de string est un entier (int)
	if (ctype_digit($string)) {
		$string = intval($string);
	}else{
		//Pour tous les autres types
		// $string = mysqli_real_escape_string($string);
		$string = mysqli_real_escape_string($string);
		$string = addcslashes($string, '%_');
	}
	return $string;
}
?>