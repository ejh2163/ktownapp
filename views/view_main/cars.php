<?php
// view_main/cars.php:
	
	//nullable variables
	$mileage = '---';
	if(!empty($row['cars_mileage'])){ $mileage = number_format($row['cars_mileage']); }
	
	echo "<p class='ellipsis' id='desc-1'>".$row['cars_year']." ".$row['cars_make']." ".$row['cars_model']."</p>";
	echo "<p class='ellipsis' id='desc-1'>".strtoupper($row['cars_type']).": $".number_format($row['cars_price'])."<span id='desc-2'>"."&nbsp Mileage: ".$mileage."</span>"."</p>";

?>
