<?php
function primoInferior ($numero){
	for ($a = 1; $a <= $numero; $a++){
		$divisor = 0;

		 for($b = $a; $b >= 1; $b--){
		 		if (($a % $b) == 0) {
                    $divisor++; 
                }

		    }

		    if ($divisor == 2){
		    	echo $a.",";
		    }


		}
	}

 
echo primoInferior(10);
echo primoInferior(30);

?>