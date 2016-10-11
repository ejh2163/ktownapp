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

function get_data_general($dbc, $page, $pagenum, $type_filter){
	$limit=20;
	$page_list=($pagenum-1)*$limit;
	$q="SELECT * FROM listings_general
		WHERE category='{$page}'
		$type_filter
		ORDER BY datetime DESC
		LIMIT $limit OFFSET $page_list";
	$r=mysqli_query($dbc, $q);
	return $r;
}

function filter_by_type($page, $type){
	switch($type){
		case "all":
			$type_filter = "";
			break;
	//cars, homes
		case "rent":
		case "homestay":
		case "lease":
		case "sale":
	//jobs
		case "full-time":
		case "part-time":
		case "various":
		case "contract":
	//sale
		case "electronics":
		case "fashion":
		case "furniture":
		case "other":
	//services	
		case "law":
		case "accounting":
		case "moving":
		case "gardening":
			$type_filter = " AND " . $page . "_type='{$type}'";
			break;
	}
	return $type_filter;
}





?>