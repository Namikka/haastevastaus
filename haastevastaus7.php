<?php
//////
// Ohjelmointiputkan PHP-haasteen 7. tehtävän vastaus.
// Tuhertanut: Kare Salo

// Lasketaan ensin 1+2+3+4+...+n
$summa = ($_REQUEST['n']*($_REQUEST['n']+1))/2;
echo $summa;
echo " ";
// sitten lasketaan 1^2+2^2+3^2+4^2+...+n^2, jotenkin näin
$tulos = $_REQUEST['n']*($_REQUEST['n']+1)*(2*$_REQUEST['n']+1)/6;
echo $tulos;
?>