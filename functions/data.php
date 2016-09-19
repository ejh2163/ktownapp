<?php
// Data Functions:

function get_premium_data($dbc, $category, $page_num){
	$q="SELECT * FROM premium_listings 
		WHERE category='{$category}'
		AND ad_state='active'
		ORDER BY date DESC
		LIMIT 3";
	$r=mysqli_query($dbc, $q);
	return $r;
}

function get_category_data($dbc, $category, $page_num){
	$limit = 20;
	$page_list = ($page_num-1)*$limit;
	$q="SELECT * FROM all_listings 
		WHERE category='{$category}' 
		ORDER BY date DESC
		LIMIT $limit OFFSET $page_list";
	$r=mysqli_query($dbc, $q);
	return $r;
}


?>