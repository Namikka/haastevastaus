<?php
//////
// Ohjelmointiputkan PHP-haasteen 15. tehtהvהn vastaus.
// Tuhertanut: Kare Salo
//////
//Toteuta ההnestyskone neljהlle ההnestהjהlle. Yksi ההnestהjistה on puheenjohtaja, jonka ההni ratkaisee, mikהli ההnet menevהt tasan. 
//Esimerkki 1: Puheenjohtaja ההnestהה asian puolesta ja muut ההnestהvהt asiaa vastaan. ִהnestystulos on asiaa vastaan, koska kolme
//henkilצה ההnestהה asiaa vastaan ja vain yksi sen puolesta. 
////
//Esimerkki 2: Puheenjohtaja ja 2. ההnestהjה ההnestהvהt asian puolesta ja 1. ההnestהjה ja 3. ההnestהjה ההnestהvהt asiaa vastaan.
//ִהnestystulos on asian puolesta, koska ההnet menevהt tasan ja puheenjohtaja ההnestהה asian puolesta. 
////
//Syצtteessה numero 1 tarkoittaa asian puolesta ja numero 0 asiaa vastaan.

//Ihmisten puolueesta muuttujien nimet.
$Tapsa = $_REQUEST['pj'];
$Topi_Petteri = $_REQUEST['a'];
$Hannes = $_REQUEST['b'];
$Regina = $_REQUEST['c'];

//Tai tehdההn niistה sittenkin lukujono
$puolue = array($Tapsa, $Topi_Petteri, $Hannes, $Regina);

//alustetaan tulos-muuttuja
$tulos = 0;

//Lasketaan ההnet
foreach($puolue as $vote)
{
$tulos = $tulos + $vote;
}

//Jos puheenjohtajan ההnestהה puolesta, ja ההnet menevהt tasan, Tapsan ההni ratkaisee voiton, ja tulostetaan 1
if($Tapsa == 1 && $tulos == 2)
{
echo "1";
}
//Jos enemmהn kuin kaksi on ההnestהnyt puolesta, demokratia voittaa ja tulostetaan 1
elseif($tulos > 2)
{
echo "1";
}
else
//Jos enemmהn kuin kaksi on ההnestהnyt vastaan, tai puheenjohtaja on ההnestהnyt vastaan kun ההnet menee tasan
//hylהtההn ehdotus ja tulostetaan 0
echo "0";
?>