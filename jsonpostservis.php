<?php
//KONVERTOR VALUTA
define('dinarDolar', 0.00892);
define('dinarEvro', 0.00813);
define('dolarEvro', 0.9105);
define('dolarDinar', 112);
define('evroDinar', 123);
define('evroDolar', 1.098);


$iznos = $_POST['iznos'];
$valutaPrva = $_POST['valutaPrva'];
$valutaDruga = $_POST['valutaDruga'];
header("Content-type: application/json");
if($valutaPrva == 'dinar' && $valutaDruga == 'dolar'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * dinarDolar),
	);
}
else if($valutaPrva == 'dinar' && $valutaDruga == 'evro'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * dinarEvro),
	);
}
else if($valutaPrva == 'dolar' && $valutaDruga == 'evro'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * dolarEvro),
	);
}
else if($valutaPrva == 'dolar' && $valutaDruga == 'dinar'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * dolarDinar),
	);
}
else if($valutaPrva == 'evro' && $valutaDruga == 'dinar'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * evroDinar),
	);
}
else if($valutaPrva == 'evro' && $valutaDruga == 'dolar'){
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos * evroDolar),
	);
}
else{
	$niz = array (
		'iznos_za_konverziju' => ($iznos),
		'iz_koje_valute' => ($valutaPrva),
		'u_koju_valutu' => ($valutaDruga),
		'rezultat' => ($iznos),
	);
}

echo json_encode($niz);

?>