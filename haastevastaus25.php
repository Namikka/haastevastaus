<?php
###
# Ohjelmointiputkan PHP-haasteen 25. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
# Teht�v�n� on selvitt��, mik� on kahden l�himm�n luvun ero annetussa lukujoukossa.
# Luvuista 2, 8, 13, 5, 7 ja 10 l�himp�n� toisiaan ovat luvut 7 ja 8, sill� niiden ero on vain 1.
# $_REQUEST['luvut']: tutkittavat luvut pystyviivoin erotettuina
# Skriptin t�ytyy tulostaa pienin kahden luvun v�linen ero.
###

$lukukasa = explode("|", $_REQUEST['luvut']);

# Ekaks laitetaan luvut j�rjestykseen.
sort($lukukasa, SORT_NUMERIC);
$m = count($lukukasa);
$erotus = array();

for($r=0; $r<$m; $r++)
{
	if($r>0)
	{
	$erotus[$r] = $lukukasa[$r] - $lukukasa[$r-1];
	}
}

print min($erotus);
?>