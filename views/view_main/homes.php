<?php
// view_main/homes.php:

	//nullable variables
	$parking = '--';
	if(!empty($row['homes_parking'])){ $parking = $row['homes_parking']; }
	$sqft = '----';
	if(!empty($row['homes_sqft'])){ $sqft = number_format($row['homes_sqft']); }
	$year = '----';
	if(!empty($row['homes_year'])){ $year = $row['homes_year']; }
	
	echo "<p class='ellipsis' id='desc-1'>".$row['homes_bedrooms']." bed • ".$row['homes_bathrooms']." bath • ".$parking." parking"."</p>";
	echo "<p class='ellipsis' id='desc-1'>".strtoupper($row['homes_type']).": $".number_format($row['homes_price'])."<span id='desc-2'> &nbsp".$sqft." sqft.</span>"."</p>";

?>
