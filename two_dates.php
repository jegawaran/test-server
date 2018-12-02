<?php 
$datetime1 = new DateTime('2 June 1988');
$datetime2 = new DateTime('17 Sep 2018');
//$interval = $datetime1->diff($datetime2);
//echo $interval->format('%y years %m months and %d days'); 
//echo '---------------------------';


$date1 = new DateTime("1988-07-02");
$date2 = new DateTime("2018-09-17");
$diff = $date1->diff($date2);

print_r($diff);exit;

echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days "

?>