<?php
// Post Functions:

function get_data_premium($dbc, $page){
	$q="SELECT * FROM listings_premium
		WHERE category='{$page}'
		AND premium_status='active'
		ORDER BY datetime ASC
		LIMIT 3";
	$r=mysqli_query($dbc, $q);
	return $r;
}

function get_data_general($dbc, $page, $pagenum){
	$limit = 18;
	$page_list = ($pagenum-1)*$limit;
	$q="SELECT * FROM listings_general
		WHERE category='{$page}' 
		ORDER BY datetime DESC
		LIMIT $limit OFFSET $page_list";
	$r=mysqli_query($dbc, $q);
	return $r;
}







?>