<?php
###
# Ohjelmointiputkan PHP-haasteen 1. teht�v�n vastaus.
# Tuhertanut: Kare Salo

# Aloitetaan K.I.S.S.-menetelm�ll� ja lasketaan yhteen
# $_REQUEST[a] ja $_REQUEST[b] muuttujat.
$tulos = $_REQUEST['a']+$_REQUEST['b'];

# Tulostetaan se mit� t�st� nyt ikin� tuleekaan.
echo $tulos;
?>