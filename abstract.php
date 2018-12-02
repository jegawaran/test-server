<?php 
abstract class parentvalue {
	
	public function parenttest(){
		return "abstract method";		
	}
	
	abstract function parentmail();
	
}

class child extends parentvalue {
	
	public function childtest(){
		
		return "child method";
	}
	
	public function parentmail(){
		
	}
	
}


$obj1 = new child();
echo '<br>'.$obj1->parenttest();
echo '<br>'.$obj1->childtest();



?>