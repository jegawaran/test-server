<?php
include_once('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'country_customerof_QA.xlsx';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);
$data = array(1,$objPHPExcel->getActiveSheet()->toArray(null,true,true,true));
 if($data[0]==1){ //echo '<pre>'; print_r($data[1]);
 
 
	foreach($data[1] AS $key=>$row){ //echo '<pre>'; print_r($row);
		foreach($row as $key=>$value){
			$arrayValue = array_column($data[1],$key); 
			echo '<pre>';print_r($arrayValue);
		}				
		exit;
	}
	
}


?>