<?php
###
# Ohjelmointiputkan PHP-haasteen 2. teht�v�n vastaus.
# Tuhertanut: Kare Salo

# Ensin julistetaan oikea salasana ja k�ytt�j�tunnus base64-koodauksella koska olemme ovelia.
$salasana = base64_encode('sala123');
$tunnus = base64_encode('admin');

# Sitten tarkistamme onko annettu salasana ja k�ytt�j�tunnus oikein.

if(base64_encode($_REQUEST['salasana']) == $salasana && base64_encode($_REQUEST['tunnus']) == $tunnus)
{
echo "OK";
}
else
{
echo "VIRHE";
}
?>