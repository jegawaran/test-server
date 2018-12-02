<?php

/*$str = "jegatheeswaran";

$value = explode(",",$str);

print_r($value); */



$s = 'Lavanya jegatheeswaran';

$strvalue = strlen($s);
//echo 'value-----'.$strvalue;
$i=0;
//print_r($s[$i]);
while (isset($s[$i]) != '') {
  $i++;
  echo $i;
}
print $i;

?>

1) implode & explode
2) find out the size of lenth without pre-defined function_exists
3) session and cookies 
4) if page is blank what to do?