<?php
//////
// Ohjelmointiputkan PHP-haasteen 6. teht�v�n vastaus.
// Tuhertanut: Kare Salo

$vuosi = $_REQUEST['vuosi'];
// Koska date-funktio jotenkin kusee..
// Katsotaan jos luku voidaan jakaa 4:ll� tai 400:lla
if(!is_float($vuosi/4) AND $vuosi%100 OR !is_float($vuosi/400))
{
// T�ten se siis on karkausvuosi
	echo "1";
}
else
{
	echo "0";
}
?>