<?php 
function numberPattern($value){
for($i=0;$i<=$value;$i++){	
	for($j=1;$j<=$i;$j++){
		echo $i;
	}
	echo "\n";
}	
	
}

numberPattern(5);


?>