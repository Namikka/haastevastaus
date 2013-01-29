<?php
//////
// Ohjelmointiputkan PHP-haasteen 15. teht�v�n vastaus.
// Tuhertanut: Kare Salo
//////
//Toteuta ��nestyskone nelj�lle ��nest�j�lle. Yksi ��nest�jist� on puheenjohtaja, jonka ��ni ratkaisee, mik�li ��net menev�t tasan. 
//Esimerkki 1: Puheenjohtaja ��nest�� asian puolesta ja muut ��nest�v�t asiaa vastaan. ��nestystulos on asiaa vastaan, koska kolme
//henkil�� ��nest�� asiaa vastaan ja vain yksi sen puolesta. 
////
//Esimerkki 2: Puheenjohtaja ja 2. ��nest�j� ��nest�v�t asian puolesta ja 1. ��nest�j� ja 3. ��nest�j� ��nest�v�t asiaa vastaan.
//��nestystulos on asian puolesta, koska ��net menev�t tasan ja puheenjohtaja ��nest�� asian puolesta. 
////
//Sy�tteess� numero 1 tarkoittaa asian puolesta ja numero 0 asiaa vastaan.

//Ihmisten puolueesta muuttujien nimet.
$Tapsa = $_REQUEST['pj'];
$Topi_Petteri = $_REQUEST['a'];
$Hannes = $_REQUEST['b'];
$Regina = $_REQUEST['c'];

//Tai tehd��n niist� sittenkin lukujono
$puolue = array($Tapsa, $Topi_Petteri, $Hannes, $Regina);

//alustetaan tulos-muuttuja
$tulos = 0;

//Lasketaan ��net
foreach($puolue as $vote)
{
$tulos = $tulos + $vote;
}

//Jos puheenjohtajan ��nest�� puolesta, ja ��net menev�t tasan, Tapsan ��ni ratkaisee voiton, ja tulostetaan 1
if($Tapsa == 1 && $tulos == 2)
{
echo "1";
}
//Jos enemm�n kuin kaksi on ��nest�nyt puolesta, demokratia voittaa ja tulostetaan 1
elseif($tulos > 2)
{
echo "1";
}
else
//Jos enemm�n kuin kaksi on ��nest�nyt vastaan, tai puheenjohtaja on ��nest�nyt vastaan kun ��net menee tasan
//hyl�t��n ehdotus ja tulostetaan 0
echo "0";
?>