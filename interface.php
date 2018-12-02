<?php 

interface jj{
	
const lava = "jegathees";

public function test();
}

class sub implements jj {
	public function test(){
		echo 'subclass';
	}
	
}

$obj = new sub();

$obj->test();
echo sub::lava;

?>