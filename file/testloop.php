<?php
         $array = array( 1, 2, 3, 4, 5);
         $arrayValue = array();
         foreach( $array as $value ) {
            //echo "Value is $value <br />";
			$arrayValue[] = $value;
         }
		 
		 echo '<pre>'; print_r($arrayValue);
      ?>