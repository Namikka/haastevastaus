<?php
//////
// Ohjelmointiputkan PHP-haasteen 23. tehtävän vastaus.
// Tuhertanut: Kare Salo
//////
// Esimerkiksi jos aloitetaan luvusta 19, siihen lisätään ensin 91, jolloin tulos on 110. 
// Tähän taas lisätään 011 eli 11, jolloin tulos on 121 ja on saatu aikaan palindromiluku.
// Tehtävänä on selvittää, kuinka monta lisäystä tarvitaan, ennen kuin tietystä luvusta tulee palindromiluku.
// Voit olettaa, että aloitusluku on positiivinen kokonaisluku ja 
// alle miljoona, lisäyksiä tarvitaan korkeintaan tuhat ja lopputulos on alle miljardi.
// $_REQUEST['n']: muunnettava luku
// Skriptin täytyy tulostaa, kuinka monta kertaan lukuun täytyy lisätä käänteinen luku, ennen kuin tuloksena on palindromiluku.
//////
// Oh.. fuck

$alku = $_REQUEST['n'];
// Alustetaan laskuri
$a = 0;

// Kunnes alussa annettu luku on palindromiluku...
while($alku<>strrev($alku))
{
	// lisätään siihen käänteinen luku nykyisestä luvusta
	$jatko = strrev($alku);
	$alku = $alku+$jatko;
	// ja laitetaan laskuri pyörimään.
	$a++;
}

//Lopuksi näytetään paljonko laskuri näyttää.
print $a;

?>