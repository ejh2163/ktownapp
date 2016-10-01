<?php
// View listing_side.php:

function listing_side_heading($page){
	echo '<i class="glyphicon glyphicon-filter" aria-hidden="true"></i>';
	echo ' Filter by';
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
			echo " <p>사고팔고 목록</p>"; 
			break;
		case "cars":
			filter_cars($row); 
			break;
		case "homes":
			filter_homes($row); 
			break;
		case "services":
			echo " <p> services filter </p>";
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