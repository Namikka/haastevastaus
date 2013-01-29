<?php
//////
// Ohjelmointiputkan PHP-haasteen 23. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
// Esimerkiksi jos aloitetaan luvusta 19, siihen lis�t��n ensin 91, jolloin tulos on 110. 
// T�h�n taas lis�t��n 011 eli 11, jolloin tulos on 121 ja on saatu aikaan palindromiluku.
// Teht�v�n� on selvitt��, kuinka monta lis�yst� tarvitaan, ennen kuin tietyst� luvusta tulee palindromiluku.
// Voit olettaa, ett� aloitusluku on positiivinen kokonaisluku ja 
// alle miljoona, lis�yksi� tarvitaan korkeintaan tuhat ja lopputulos on alle miljardi.
// $_REQUEST['n']: muunnettava luku
// Skriptin t�ytyy tulostaa, kuinka monta kertaan lukuun t�ytyy lis�t� k��nteinen luku, ennen kuin tuloksena on palindromiluku.
//////
// Oh.. fuck

$alku = $_REQUEST['n'];
// Alustetaan laskuri
$a = 0;

// Kunnes alussa annettu luku on palindromiluku...
while($alku<>strrev($alku))
{
	// lis�t��n siihen k��nteinen luku nykyisest� luvusta
	$jatko = strrev($alku);
	$alku = $alku+$jatko;
	// ja laitetaan laskuri py�rim��n.
	$a++;
}

//Lopuksi n�ytet��n paljonko laskuri n�ytt��.
print $a;

?>