<?php

function den($amount,$denom) { //echo '<pre>';print_r($denom);

    if($amount > 0){
        $size = sizeof($denom);
        $denomValue=0;
        for($i=0;$i<$size;$i++){
            $amount = $amount % $denom[$i];
            //print_r($amount);exit;
            $denomValue = $amount/$denom[$i];


            if(floor($denomValue) !=0){
                //print_r(floor($denomValue)); echo '<br>';
               $calculatedValue = $denom[$i] * floor($denomValue);
                echo $denom[$i].' X '.floor($denomValue).' = '.$calculatedValue.'<br>';
            }

        }
        //echo 'value--------------'.$amount;

    }
}

$de= array(2000,1000,500,100,10,5);

den(2910, $de);


?>