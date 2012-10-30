<?php
###
# Ohjelmointiputkan PHP-haasteen 14. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
#Uolevilla on lottokuponki, jossa on numerot 3, 6, 7, 10, 23, 26 ja 36. Lottokone taas arpoo numerot 5, 7, 14, 18, 26, 31 ja 38. 
#T�m� tarkoittaa, ett� Uolevin kupongissa on kaksi numeroa oikein, nimitt�in numerot 7 ja 26. 
##
#Teht�v�n� on selvitt��, kuinka monta numeroa on oikein, kun tiedossa ovat lottokupongin numerot sek� lottokoneen arpomat numerot. 
#Numeroita on seitsem�n ja ne ovat v�lill� 1�39. Voit olettaa, ett� numerot ilmoitetaan pienimm�st� suurimpaan.
##
#$_REQUEST['num1']: lottokupongissa olevat numerot pystyviivoin erotettuina 
#$_REQUEST['num2']: lottokoneen arpomat numerot pystyviivoin erotettuina

#Tehd��n lottoriveist� lukujonot
$veikatturivi = explode("|", $_REQUEST['num1']);
$oikearivi = explode("|", $_REQUEST['num2']);

#Alustetaan oikeiden numeroiden laskuri
$oikein = 0;

#Foreachilla verrataan jokaista veikatun rivin lukua oikeaan lottoriviin.

foreach($veikatturivi as $luku)
{
	if(in_array($luku, $oikearivi))
	{
	$oikein++;
	}
}
echo $oikein;
?>