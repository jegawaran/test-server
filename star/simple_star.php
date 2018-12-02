<?php 

function star($value){
	for($i=0;$i<=$value;$i++){
		for($j=0;$j<$i;$j++){
			echo "*";
		}
		
		echo "\n";
		
	}
	
}

star(15);


?>