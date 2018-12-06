<?php 
class test{
	
	public $value;
	
	public function hello(){
		echo "hello";
	}
	
	function __get($param){
		echo " $param Parameter is not available";
	}
	
	
}

$obj = new test();
$obj->hello();
$obj->value1;



?>