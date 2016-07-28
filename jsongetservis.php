<?php
//KALKULATOR POTROSNJE GORIVA I CENA PUTOVANJA
define('benzin', 150);
define('dizel', 140);
define('autogas', 110);

$ukupnaCena = "";
$ukupnaPotrosnja = "";


$potrosnja = $_GET['potrosnja'];
$kilometraza = $_GET['kilometraza'];
$gorivo = $_GET['gorivo'];
header("Content-type: application/json");
if($gorivo == 'benzin'){
	$ukupnaPotrosnja = ($potrosnja * $kilometraza)/100;
	$niz = array (
		'ukupna_potrosnja_goriva' => ($ukupnaPotrosnja),
		'troskovi' => (benzin * $ukupnaPotrosnja),
	);
}
else if($gorivo == 'dizel'){
	$ukupnaPotrosnja = ($potrosnja * $kilometraza)/100;
	$niz = array (
		'ukupna_potrosnja_goriva' => ($ukupnaPotrosnja),
		'troskovi' => (dizel * $ukupnaPotrosnja),
	);
}
else{
	$ukupnaPotrosnja = ($potrosnja * $kilometraza)/100;
	$niz = array (
		'ukupna_potrosnja_goriva' => ($ukupnaPotrosnja),
		'troskovi' => (autogas * $ukupnaPotrosnja),
	);
}

echo json_encode($niz);


?>