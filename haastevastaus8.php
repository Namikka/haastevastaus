<?php
//////
// Ohjelmointiputkan PHP-haasteen 8. teht�v�n vastaus.
// Tuhertanut: Kare Salo
// Jaetaan sana ensin lukujonoksi.
$sana = str_split($_REQUEST['sana']);
// Koska en l�yt�nyt mit��n kivaa funktiota, joudun tekem��n lukujonoja.

$vokaalit = array("a","e","i","o","u","y", "A","E","I","O","U","Y");
$kokosana = count($sana);
$vokaaliluku = 0;
$konsonanttiluku = 0;
foreach($sana as $kirjain)
{
	if(in_array($kirjain, $vokaalit))
	{
	$vokaaliluku++;
	}
	else
	{ $konsonanttiluku++; }
}
print "$vokaaliluku $konsonanttiluku";
?>