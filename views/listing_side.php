<?php
// View listing_side.php:

function listing_side_heading($page){
	echo '<i class="glyphicon glyphicon-th-large" aria-hidden="true"></i>';
	switch($page){
		case "":
			echo "&nbspHome";
			break;
		case "jobs":
			echo "&nbsp구인 목록";
			break;
		case "sale":
			echo "&nbsp사고/팔고 목록";
			break;
		case "cars":
			echo "&nbsp자동차 목록";
			break;
		case "homes":
			echo "&nbsp집/부동산 목록";
			break;
		case "services":
			echo "&nbsp전문서비스 목록";
			break;
		case "free":
			echo "&nbsp자유게시판";
			break;
	}
} // END side heading

function generate_side($page){
	switch($page){
		case "":
			echo " Home";
			break;
		case "jobs":
			filter_jobs($row); 
			break;
		case "sale":
			echo " 사고팔고 목록"; 
			break;
		case "cars":
			filter_cars($row); 
			break;
		case "homes":
			filter_homes($row); 
			break;
		case "services":
			echo " services filter";
			break;
		case "free":
			echo " 자유게시판"; 
			break;
	}
}

function filter_cars(){
	
}

function filter_jobs(){
	
}

function filter_homes(){
	
}

?>