<?php 
/*class books{
	
	public function name() {
		echo 'jegatheeswaran';
	}
	
	public function number(){
		
		echo '9036219359';
	}
	
}

$obj = new books();

$obj->name();
$obj->number(); */

class mobile {
	
	var $price;
	var $name;
	
	public function setPrice($price){
		$this->price = $price;		
	}
	
	public function getPrice(){
		echo $this->price."</br>";
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
	public function getName(){
		echo $this->name."</br>";
	}	
	
}

class charger extends mobile {
	
	
	public function setPrice($price1){
	    $this->price = $price1;	
	}
	
	
	public function getPrice(){
		
		echo $this->price."---child class </BR>";
	}
	
	
}

class cover extends charger{
	
	public function history(){
		echo "class mobile --". $this->getName()."</br>";
		echo "class charger --". $this->getPrice()."</br>";
		echo "class conver--"."</br>";
	}
}

$obj1= new mobile();
$obj2= new charger();
$obj3= new cover();
$obj1->setPrice(70);
$obj1->getPrice();


$obj2->setPrice(10);
$obj2->getPrice();

$obj1->setName("soap");
$obj1->getName();

$obj3->history();




?>