<?php
//////
// Ohjelmointiputkan PHP-haasteen 31. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////

// T�m� versio on l�himp�n� oikeita vastauksia.

$annettu_lukujono = "1";

if($_REQUEST['n']==1)
{
exit("1");
}
for($o=1;$o<$_REQUEST['n'];$o++)
{
	// Regexpin replace funktiota k�ytet��n
	$annettu_lukujono =  preg_replace_callback("/(1{1,3})|(2{1,3})|(3{1,3})/", "lipsu", $annettu_lukujono);
}

function lipsu($luku) {
	// Funktio palauttaa pituuden ja luvun
	$pituus = strlen($luku[0]);
	return $pituus.$luku[0][0];
}
print_r($annettu_lukujono);
?>