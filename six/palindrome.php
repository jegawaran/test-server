<?php
/**
 * Created by PhpStorm.
 * User: jegatheeswaran
 * Date: 6/19/2018
 * Time: 8:50 PM
 */

class Palindrom {

    public static function isPalindrom($word){
        $value = strtoupper($word);
        if($value == strrev($value)){
            return 1;
        }else{
            return 0;
        }

    }
}

echo Palindrom::isPalindrom("Deleveledh");



?>