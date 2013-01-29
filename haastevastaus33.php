<?php
// Eli tarkoituksena on luoda skripti joka luo annetun rivin Pascalin kolmiosta.
// The Challeneg is to make a script that creates the given row from Pascal's triangle
// Rivin numero annetaan $_REQUEST['n'] muuttujana
// The row-number is given as $_REQUEST['n']-variable
// skriptiä varten tarvitsemma itse tehtyä funktiota joka laskee n!/k!*(n-k)!
// For the script we need to use a function that calculates n!/k!*(n-k)!
// Emme voi käyttää GMP-kirjastoa koska sitä ei toisella puolella ole.
// GMP-library can't be used since the server I'm using don't have that PHP-library

// Something's fucked on the script, so using $_REQUEST['n'] is not okay
$n = $_REQUEST['n']-1;
$k = 0;
while($k <= $n)
{
	// Tässä loopissa teemme seuraavaa:
	// In this loop we are doing the following things:
	
	// Laskemme paljonko on n! , k! ja (n-k)!
	// We calculate how much is n! , k! and (n-k)!
	$n_factored = factorial($n);
	$k_factored = factorial($k);
	$nMinusk_factored = factorial($n-$k);
	

	// Laskemme myös tuon k!*(n-k)!
	// Also let's calculate how much is k!*(n-k)!
	$lower = $k_factored*$nMinusk_factored;

	// Lopuksi laskemme n!/(k!*(n-k)!).
	// And then we do the math on how much is n!/(k!*(n-k)!).
	$result = $n_factored/$lower;
	print $result." ";
	$k++;
}

// Since gmp-library can't be used, here's a function that calculates the factorial of given number
// Function is partly copied from ghsot at ghost-tech dot com dot au-users function at http://php.net/manual/en/function.gmp-fact.php
// Also, this function can't stand if the number given to it is >170
function factorial($number)
{
	if(is_int($number))
	{
		$i = $a = 1;
		while ($i<=$number){
			$a = $a * $i;
			$i++;
		}
		$a = sprintf('%f', $a); //Convert from Scientific notation
		return substr($a, 0, -7); //Remove the trailing decimal places
	}
}
?>