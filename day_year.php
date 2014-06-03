<?php 
	$year = $_GET['year'];
	$month = $_GET['month'];
	$is_leap_year = (($year % 4) == 0) ? true : false;

	switch($month){
		case "January":
		case "March":
		case "May":
		case "July":
		case "August":
		case "October":
		case "December":
			echo json_encode(
				array('result'=> 'success', 'day' => 31)
				);
			break;
		case "April":
		case "June":
		case "September":
		case "November":
			echo json_encode(
				array('result'=> 'success', 'day'=> 30)
				);
			break;
		case "February":
			if($is_leap_year){
				echo json_encode(
					array('result'=> 'success', 'day'=> 29)
					);
			}else{
				echo json_encode(
					array('result'=> 'success', 'day'=> 28)
					);
			}
			break;
		default:
			echo json_encode(
				array('result'=> 'failed', 'month'=> $month, 'year'=> $year)
				);
	}
	
 ?>