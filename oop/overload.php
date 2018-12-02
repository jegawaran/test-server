<?php 
class Addition {
  function compute($first, $second) {
    echo 'first';
    return $first+$second;
  }

  function compute($first, $second, $third) {
    echo 'second';
    return $first+$second+$third;
  }
}

$obj = new Addition();
echo $obj->compute(1,2);