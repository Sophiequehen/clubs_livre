var $francais = $("#francais"); 
var $meilleur = $("#meilleur"); 
var $mois = $("#mois"); 
var $femme = $("#femme"); 
var $libraires = $("#libraires"); 
var $all = $("#all"); 
var $result = $("#result");
var $input = $('#search_text');


$francais.click(function() {
	$result.addClass("display_none");
	$input.addClass("display_none");
	$("#clubs_francais").removeClass("display_none");
	$("#clubs_meilleur").addClass("display_none");
	$("#clubs_mois").addClass("display_none");
	$("#clubs_femme").addClass("display_none");
	$("#clubs_libraires").addClass("display_none");
});

$meilleur.click(function() {
	$result.addClass("display_none");
	$input.addClass("display_none");
	$("#clubs_francais").addClass("display_none");
	$("#clubs_meilleur").removeClass("display_none");
	$("#clubs_mois").addClass("display_none");
	$("#clubs_femme").addClass("display_none");
	$("#clubs_libraires").addClass("display_none");
});

$mois.click(function() {
	$input.addClass("display_none");
	$result.addClass("display_none");
	$("#clubs_francais").addClass("display_none");
	$("#clubs_meilleur").addClass("display_none");
	$("#clubs_mois").removeClass("display_none");
	$("#clubs_femme").addClass("display_none");
	$("#clubs_libraires").addClass("display_none");
});

$femme.click(function() {
	$input.addClass("display_none");
	$result.addClass("display_none");
	$("#clubs_francais").addClass("display_none");
	$("#clubs_meilleur").addClass("display_none");
	$("#clubs_mois").addClass("display_none");
	$("#clubs_femme").removeClass("display_none");
	$("#clubs_libraires").addClass("display_none");
});

$libraires.click(function() {
	$input.addClass("display_none");
	$result.addClass("display_none");
	$("#clubs_francais").addClass("display_none");
	$("#clubs_meilleur").addClass("display_none");
	$("#clubs_mois").addClass("display_none");
	$("#clubs_femme").addClass("display_none");
	$("#clubs_libraires").removeClass("display_none");
});

$all.click(function() {
	$result.removeClass("display_none");
	$input.removeClass("display_none");
	$("#clubs_francais").addClass("display_none");
	$("#clubs_meilleur").addClass("display_none");
	$("#clubs_mois").addClass("display_none");
	$("#clubs_femme").addClass("display_none");
	$("#clubs_libraires").addClass("display_none");
});

