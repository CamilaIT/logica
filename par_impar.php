<?php
/*Faça um programa que percorra todos os números de 1 até 100. Para os números ímpares, deve ser exibido um * e para os números pares ** */


	for ($i = 1; $i <= 100; $i++){
	
		if($i % 2 == 1){
			echo "$i.*".PHP_EOL;
		}
		
		else{
			echo "$i.**".PHP_EOL;
		}

		
	}
	

?>
