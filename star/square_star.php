<?php 

function square($value) {
	
	for ($i=1;$i<=$value;$i++){
		for($j=1;$j<=$value;$j++){
			echo "*";
		}
		echo "<br>";
	}
	
	
}

square(5);

?>