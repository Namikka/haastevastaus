<?php
//////
// Ohjelmointiputkan PHP-haasteen 3. tehtävän vastaus.
// Tuhertanut: Kare Salo

// Luvun parittomuus saadaan selville jakamalla se kahdella.
$luku = $_REQUEST['luku']/2;
if(!is_float($luku))
{
// Jos tulos ei ole desimaaliluku, on se parillinen
echo "parillinen";
}
else
// Jos tulos on desimaaliluku, on se pariton.
{ echo "pariton"; }
?>