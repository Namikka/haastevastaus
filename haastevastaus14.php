<?php
###
# Ohjelmointiputkan PHP-haasteen 14. tehtävän vastaus.
# Tuhertanut: Kare Salo
###
#Uolevilla on lottokuponki, jossa on numerot 3, 6, 7, 10, 23, 26 ja 36. Lottokone taas arpoo numerot 5, 7, 14, 18, 26, 31 ja 38. 
#Tämä tarkoittaa, että Uolevin kupongissa on kaksi numeroa oikein, nimittäin numerot 7 ja 26. 
##
#Tehtävänä on selvittää, kuinka monta numeroa on oikein, kun tiedossa ovat lottokupongin numerot sekä lottokoneen arpomat numerot. 
#Numeroita on seitsemän ja ne ovat välillä 1–39. Voit olettaa, että numerot ilmoitetaan pienimmästä suurimpaan.
##
#$_REQUEST['num1']: lottokupongissa olevat numerot pystyviivoin erotettuina 
#$_REQUEST['num2']: lottokoneen arpomat numerot pystyviivoin erotettuina

#Tehdään lottoriveistä lukujonot
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