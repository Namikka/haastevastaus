<?php
###
# Ohjelmointiputkan PHP-haasteen 25. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
# Tehtävänä on selvittää, mikä on kahden lähimmän luvun ero annetussa lukujoukossa.
# Luvuista 2, 8, 13, 5, 7 ja 10 lähimpänä toisiaan ovat luvut 7 ja 8, sillä niiden ero on vain 1.
# $_REQUEST['luvut']: tutkittavat luvut pystyviivoin erotettuina
# Skriptin täytyy tulostaa pienin kahden luvun välinen ero.
###

$lukukasa = explode("|", $_REQUEST['luvut']);

# Ekaks laitetaan luvut järjestykseen.
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