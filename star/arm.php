<?php 

/**  (4*4*4)+(0*0*0*)+(7*7*7)+(1*1*1) **/

$num = 4071;
$x = $num;
$total =0;

while($x !=0){
	
	$rem = $x%10;
	$total = $total+$rem*$rem*$rem;
	$x = $x/10;
	
}

if($num == $total){
	echo "yes--".$num;
}else {
	echo "no--".$num;
}
	




?>