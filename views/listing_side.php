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
			filter_jobs(); 
			break;
		case "sale":
			filter_sale(); 
			break;
		case "cars":
			filter_cars(); 
			break;
		case "homes":
			filter_homes(); 
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
	?>
	<div class="btn-group" role="group" aria-label="...">
		<a href="/cars/1/all" type="button" class="btn btn-default"><b>ALL</b></a>
		<a href="/cars/1/sale" type="button" class="btn btn-default">판매</a>
		<a href="/cars/1/lease" type="button" class="btn btn-default">리스</a>
		<a href="/cars/1/rent" type="button" class="btn btn-default">대여</a>
	</div>
	<?php
}
function filter_jobs(){
	?>
	<div class="btn-group" role="group" aria-label="...">
		<a href="/jobs/1/all" type="button" class="btn btn-default"><b>ALL</b></a>
		<a href="/jobs/1/full-time" type="button" class="btn btn-default">풀타임</a>
		<a href="/jobs/1/part-time" type="button" class="btn btn-default">파트/알바</a>
		<a href="/jobs/1/various" type="button" class="btn btn-default">기타</a>
	</div>
	<?php
}

function filter_homes(){
	?>
	<div class="btn-group" role="group" aria-label="...">
		<a href="/homes/1/all" type="button" class="btn btn-default"><b>ALL</b></a>
		<a href="/homes/1/sale" type="button" class="btn btn-default">분양</a>
		<a href="/homes/1/rent" type="button" class="btn btn-default">렌트</a>
		<a href="/homes/1/homestay" type="button" class="btn btn-default">하숙</a>
	</div>
	<?php
}

function filter_sale(){
	?>
	<div class="btn-group" role="group" aria-label="...">
		<a href="/sale/1/all" type="button" class="btn btn-default"><b>ALL</b></a>
		<a href="/sale/1/electronics" type="button" class="btn btn-default">전자제품</a>
		<a href="/sale/1/fashion" type="button" class="btn btn-default">패션</a>
		<a href="/sale/1/furniture" type="button" class="btn btn-default">가구</a>
		<a href="/sale/1/other" type="button" class="btn btn-default">기타</a>
	</div>
	<?php
}

?>