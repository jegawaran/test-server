<?php 

/* class vehicle {
	public $model="Benz";
	public $color ="yellow";
	
	public function hello() {
		return "My model is ".$this->model." and my color is ".$this->color;		
	}	
}


$obj = new vehicle();

$obj->model="BMW";
$obj->color="Black";

	echo $obj->hello(); */
	
	class vehicle1 {
		
		private $model;
		
		public function setModel($model) {
			$this->model = $model;
			
		}
		
		public function getModel() {
			return "This is my car model - ".$this->model;
			
		}
		
		
	}
	
	$obj1 = new vehicle1();
	
	$obj1->setModel("Maruthi");
	echo $obj1->getModel();
	




?>