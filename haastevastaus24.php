<?php
###
# Ohjelmointiputkan PHP-haasteen 24. teht�v�n vastaus.
# Tuhertanut: Kare Salo
###
# Skriptin t�ytyy tulostaa sana ROT13-salattuna.
# T�ss� teht�v�ss� tutkitaan sanoja, jotka muodostuvat kirjaimista A�Z.
# ROT13-salauksessa jokaista sanan kirjainta siirret��n 13 askelta eteenp�in aakkosissa
# Teht�v�n� on kohdistaa ROT13-salaus annettuun sanaan.
# Voit olettaa, ett� sanassa on korkeintaan sata kirjainta.

print str_rot13($_REQUEST['sana']);
?>