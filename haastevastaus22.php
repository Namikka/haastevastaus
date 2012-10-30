<?php
###
# Ohjelmointiputkan PHP-haasteen 22. teht‰v‰n vastaus.
# Tuhertanut: Kare Salo
###
# Taikaneliˆ on n x n -ruudukko, johon on sijoitettu luvut 1ñn2. 
# Kun taikaneliˆn mink‰ tahansa rivin, sarakkeen tai l‰vist‰j‰n luvut lasketaan yhteen, tulos on sama. 
# Teht‰v‰n‰ on tarkistaa, onko annettu 4 x 4 -taikaneliˆ kelvollinen 
# eli sis‰lt‰‰kˆ se kaikki luvut 1ñ16 ja onko jokaisen rivin, sarakkeen ja l‰vist‰j‰n lukujen summa sama.
# Jos taikaneliˆ on kelvollinen, skriptin t‰ytyy tulostaa luku 1. Muuten skriptin t‰ytyy tulostaa luku 0.
###

# Tai sit tehd‰‰n t‰ysi skannaus taikaneliˆn lukuihin. 
$lukunelio = explode("|", $_REQUEST['nelio']);

# Jos eka vaikka katotaan mink‰s kokoinen sivu tuolla neliˆll‰ on..
$rivi = sqrt(count($lukunelio));

for($r=1; $r<=16; $r++)
{
	if(!in_array($r, $lukunelio))
	{
	die("0");
	}
}

if($rivi<>4)
{
die("0");
}
#Ja p‰tkit‰‰n se sopivan kokoisiin paloihin.
$chopped = array_chunk($lukunelio, $rivi);

# Rivit ja sarakeet saa samalla silmukalla
# Ristiin menev‰t sit menis omalla laskurilla 
# Alustetaan laskurit kunnolla.
for($r=0; $r<$rivi; $r++)
{
$rivitulos[$r] = 0;
$saraketulos[$r] = 0;
}
$g = 0;
$f = $rivi-1;
$vyoa = $oyva = 0;
foreach($chopped as $pala)
{
	# Rivit ja sarakkeet lasketaan n‰in
	for($r=0; $r<$rivi; $r++)
	{
	$rivitulos[$g] = $rivitulos[$g]+$chopped[$g][$r];
	$saraketulos[$g] = $saraketulos[$g]+$chopped[$r][$g];
	}

# Vasemmasta yl‰kulmasta oikeaan alakulmaan tulos.
$vyoa = $vyoa+$chopped[$g][$g];

# Ja oikeasta yl‰kulmasta vasempaan alakulmaan tulos.
$oyva = $oyva+$chopped[$g][$f];

$g++;
$f--;
}


##DEBUGGING!!
#print_r($rivitulos);
#print "<br>";
#print_r($saraketulos);
#print "<br>";
#print $oyva;
#print "<br>";
#print $vyoa;
#print "<br>";

$fugu = count(array_diff($rivitulos, $saraketulos));

if($vyoa == $oyva && $fugu==0)
{
print "1";
}
else
{
print "0";
}

?>