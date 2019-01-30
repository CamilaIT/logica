/* Faça um programa que percorra todos os números de 1 até 100. Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, exiba o próprio número. */


	<?php
		for ($i = 1; $i <= 100; $i++){
	
		  if($i % 4 == 0){

		    echo "PIN".PHP_EOL;
		  }
		
		else{

		    echo "$i".PHP_EOL;
		}

		
	}

	?>

