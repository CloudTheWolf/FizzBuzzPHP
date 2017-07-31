<?php
$NumRange = range(1,1000); //Set Range(Min,Max)
//Start Set Output Variables
define ('DIV3', 'Fizz'); //Output if it can be divideed by 3
define ('DIV5', 'Buzz'); //Output if it can be divideed by 5
foreach ($NumRange as &$number){ //Start Loop
	//Start Check 
	if($number % 15 == 0){ //If we can divide by 15 then we know we can divide by 3 and 5 
			echo DIV3 . DIV5 . "</br>";
		} elseif ($number % 5 == 0){ // We failed to divide by 15 so lets try 5 next
			echo DIV5 . "</br>";
		} elseif($number % 3 == 0){ // We failed to divide 5 so lets try 3 next
			echo DIV3 . "</br>";
		} else { // We failed to divide 3 as well so just write the number
			echo $number . "</br>";
	}
} //End Loop
?>
