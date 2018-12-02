<?php 

$date1 = new DateTime("1988-07-02");
$date2 = new DateTime("2018-09-21");

$diff = $date1->diff($date2);

print_r($diff->y);


?>