<?php
// Template Functions:

function generate_main_heading($cat){
	echo "<heading><i class='fa fa-th-list' aria-hidden='true'></i>";
	switch($cat){
		case "":
			echo " Home"; break;
		case "jobs":
			echo " 구인 목록"; break;
		case "sale":
			echo " 사고팔고 목록"; break;
		case "cars":
			echo " 자동차 목록";  break;
		case "homes":
			echo " 부동산 목록"; break;
		case "free":
			echo " 자유게시판"; break;
	}
	echo "</heading>";
	echo "<div class='clear'></div>";
} // END category heading

function generate_premium_listing($r, $cat){
	while($row = mysqli_fetch_array($r)){
		echo "<div class='card card-premium '>";
			echo "<div class='row'>";
				echo "<div class='col-xs-11'>";
					echo "<p class='ellipsis' id='subject'>".$row['subject']."</p>";
				echo "</div>"; // END subject line
				echo "<div class='col-xs-12 col-sm-7'>";	
					include('views/view_main/'.$cat.'.php');
				echo "</div>"; // END desc left side
				echo "<div class='col-xs-12 col-sm-5'>";
					echo "<p class='ellipsis' id='desc-2'>".$row['region']."</p>";
					echo "<p class='ellipsis hidden-xs' id='desc-3'>".$row['date']." by ".$row['username']."</p>";
				echo "</div>"; // END desc right side
			echo "</div>"; // END row
			
		echo "<div class='clear'></div>";
	echo "</div>"; // END card
	} //END premium listing
}

function generate_category_listing($r, $cat){
	while($row = mysqli_fetch_array($r)){
		echo "<div class='card'>";
			echo "<div class='row'>";
				echo "<div class='col-xs-12'>";
					echo "<p class='ellipsis' id='subject'>".$row['subject']."</p>";
				echo "</div>"; // END subject line
				echo "<div class='col-xs-12 col-sm-7'>";
					include('views/view_main/'.$cat.'.php');
					
				echo "</div>"; // END desc left side
				echo "<div class='col-xs-12 col-sm-5'>";
					echo "<p class='ellipsis' id='desc-2'>".$row['region']."</p>";
					echo "<p class='ellipsis hidden-xs' id='desc-3'>".$row['date']." by ".$row['username']."</p>";
				echo "</div>"; // END desc right side
			echo "</div>"; // END row
			
			echo "<div class='clear'></div>";
		echo "</div>"; // END card
	} //END main listing
}

function generate_cars_text(){
	//nullable variables
	$mileage = '---';
	if(!empty($row['cars_mileage'])){ $mileage = number_format($row['cars_mileage']); }
	
	echo "<p class='ellipsis' id='desc-1'>".$row['cars_year']." ".$row['cars_make']." ".$row['cars_model']."</p>";
	echo "<p class='ellipsis' id='desc-1'>".strtoupper($row['cars_type']).": $".number_format($row['cars_price'])."<span id='desc-2'>"."&nbsp Mileage: ".$mileage."</span>"."</p>";
}

?>