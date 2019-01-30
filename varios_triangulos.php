<?php

//Crie um programa que exiba no Console um triângulo de *

	for ($n=1; $n <= mt_rand(5, 100); $n++) {

		echo "Triangulo $n:".PHP_EOL;

		for ($i=1; $i <=5 ; $i++) { 

		echo str_pad("*", $i, "*").PHP_EOL;
	}

}

?>