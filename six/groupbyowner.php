<?php
/**
 * Created by PhpStorm.
 * User: jegatheeswaran
 * Date: 6/19/2018
 * Time: 9:10 PM
 */


class FileOwners{

    public static function groupByOwners(array $files){

    //echo '<pre>';print_r($files);
        $arrayValue = array();
        foreach($files as $key=>$res){ //echo '<pre>'; print_r($value);echo '=>'; print_r($key);
            $arrayValue[$res][]= $key;
        }
        return $arrayValue;
    }
}

$files = [
    'input.txt'=>'Randy',
    'Code.py'=>'Stan',
    'Output.txt'=> 'Randy'
];
//var_dump($files);

var_dump(FileOwners::groupByOwners($files));


?>