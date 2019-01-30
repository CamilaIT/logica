<?php

//Crie um programa que exiba no Console vários triângulos de *


	$x = mt_rand(3, 25);

	echo "Total de triangulos: $x".PHP_EOL;

	for ($n=1; $n <= $x ; $n++) {

			echo "$n".PHP_EOL;

		for ($i=1; $i <=5 ; $i++) { 

			echo str_pad("*", $i, "*").PHP_EOL;
		}
	}

?>