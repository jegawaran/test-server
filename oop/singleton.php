<?php 

class single {
	
	private  function __construct(){
		echo 'constructor';
	}
	
	private function __clone(){
		
	}
	
	public static function test(){
		return "test method";
	}
	
	
	
}

//$obj = new single();

$ob = single::test();
echo $ob;

$obj1 = single::test();
echo $obj1;

//var_dump($obj);

//$obj1 = new single();
//var_dump($obj1);




?>