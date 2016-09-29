<?php
// Data Functions:



function get_data_premium($dbc, $page){
	$q="SELECT * FROM listings_premium
		WHERE category='{$page}'
		AND premium_status='active'
		ORDER BY date ASC
		LIMIT 3";
	$r=mysqli_query($dbc, $q);
	return $r;
}

function get_data_general($dbc, $page, $page_num){
	$limit = 15;
	$page_list = ($page_num-1)*$limit;
	$q="SELECT * FROM listings_general
		WHERE category='{$page}' 
		ORDER BY date DESC
		LIMIT $limit OFFSET $page_list";
	$r=mysqli_query($dbc, $q);
	return $r;
}

?>