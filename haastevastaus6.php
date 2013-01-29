<?php
//////
// Ohjelmointiputkan PHP-haasteen 6. tehtävän vastaus.
// Tuhertanut: Kare Salo

$vuosi = $_REQUEST['vuosi'];
// Koska date-funktio jotenkin kusee..
// Katsotaan jos luku voidaan jakaa 4:llä tai 400:lla
if(!is_float($vuosi/4) AND $vuosi%100 OR !is_float($vuosi/400))
{
// Täten se siis on karkausvuosi
	echo "1";
}
else
{
	echo "0";
}
?>