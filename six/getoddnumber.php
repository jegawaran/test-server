<?php
/**
 * Created by PhpStorm.
 * User: jegatheeswaran
 * Date: 6/21/2018
 * Time: 3:44 PM
 */


function getOddnumber(array $srcValues){

    $sizeof = sizeof($srcValues);

//echo '<pre>'; print_r($sizeof);

    for($i=0;$i<$sizeof;$i++){
        //print_r([$srcValues][$i]);
        $count= 0;
        for($j=0;$j<$sizeof;$j++){
            if($srcValues[$i]== $srcValues[$j]){
                $count++;
            }
            if($count %2 !=0){
                return $srcValues[$i];
            }
        }

    }
    return -1;

}

$value = [1,2,5,5,5,3,4,5,6,7];
echo getOddnumber($value);

?>