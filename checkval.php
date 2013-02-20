<?php



function checkval($attr,$val){
$counter = 0;
switch($attr){

case 'fbs':
	if($val < 70 || $val > 110){
		//return "RED";
		$counter = 1;
	}
break;

case 'total_cholesterol':
	if($val < 150 || $val > 200){
		$counter = 1;
	}
break;

case 'hdl_chol':
	if($val < 0 || $val > 130){
		$counter = 1;
	}
break;

case 'ldl_chol':
	if($val < 150 || $val > 200){
		$counter = 1;

	}
break;

case 'triglycerydes':
	if($val < 30 || $val > 135){
		$counter = 1;
	}
break;

case 'uric_acid':
	if($val < 3.7 || $val > 7.6){
		$counter = 1;
	}
break;

case 'urea':
	if($val < 8 || $val > 20){
		$counter = 1;
	}
break;

case 'creatinine':
	if($val < .8 || $val > 2.0){
		$counter = 1;
	}
break;

case 'alt_sgpt':
	if($val < 0 || $val > 42){
		$counter = 1;
	}
break;
}

if($counter == 1){
return "style='font-weight: bold;color:Red'";
}else{
return "";
}







}
?>
