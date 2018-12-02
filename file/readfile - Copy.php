<?php
include_once('PHPExcel-1.8/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'country_customerof_QA.xlsx';

$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);
$data = array(1,$objPHPExcel->getActiveSheet()->toArray(null,true,true,true));
 if($data[0]==1){
	foreach($data[1] AS $row){ //echo '<pre>';print_r($data[1]);
		foreach($row AS $column){
			echo $column . ', ';
			//echo '<pre>'; print_r($column);
		}
		echo '<br />';
		
	}
	
	
}


?>