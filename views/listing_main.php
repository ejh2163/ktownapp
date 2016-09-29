<?php
// views listing_main:


function listing_main_heading($page){
	switch($page){
		case "":
			echo "&nbspHome"; break;
		case "jobs":
			echo "&nbsp구인 목록"; break;
		case "sale":
			echo "&nbsp사고팔고 목록"; break;
		case "cars":
			echo "&nbsp자동차 목록"; break;
		case "homes":
			echo "&nbsp집 • 부동산 목록"; break;
		case "services":
			echo "&nbspservices"; break;
		case "free":
			echo "&nbsp자유게시판"; break;
	}
} // END main heading

function listing_premium($r, $page){
	$num_active = mysqli_num_rows($r);
	
	while($row = mysqli_fetch_assoc($r)){
		echo "<div class='card card-premium'>";
			echo "<div class='row'>";
				echo "<div class='col-xs-11'>";
					echo "<p class='ellipsis' id='subject'>".$row['subject']."</p>";
				echo "</div>"; // END subject line
				echo "<div class='col-xs-12 col-sm-6'>";	
					switch($page){
						case "":
							echo " Home"; break;
						case "jobs":
							desc_jobs($row); break;
						case "sale":
							echo " <p>사고팔고 목록</p>"; break;
						case "cars":
							desc_cars($row); break;
						case "homes":
							desc_homes($row); break;
						case "services":
							echo " services list"; break;
						case "free":
							echo " 톡톡 자유게시판"; break;
					}
				echo "</div>"; // END desc left side
				echo "<div class='col-xs-12 col-sm-6'>";
					echo "<p class='ellipsis' id='desc-2'>".$row['region']."</p>";
					echo "<p class='ellipsis hidden-xs' id='desc-3'>".$row['date']." by ".$row['username']."</p>";
				echo "</div>"; // END desc right side
			echo "</div>"; // END row
			
		echo "<div class='clear'></div>";
		echo "</div>"; // END card
	} //END premium listing
	
	// for($i=$num_active; $i<3; $i++){
		echo "<div class='card card-premium'>";
			echo "<div class='row'>";
				echo "<div class='col-xs-12 empty-premium-text'>";
					echo "<br>";
					echo "<a href='#'>Click Here to add your own Premium Listing!</a><br>";
					echo "<br>";
				echo "</div>";
			echo "</div>"; // END row
			
		echo "<div class='clear'></div>";
		echo "</div>";
	// }
}

function listing_general($r, $page){
	while($row = mysqli_fetch_assoc($r)){
		echo "<div class='card'>";
			echo "<div class='row'>";
				echo "<div class='col-xs-12'>";
					echo "<p class='ellipsis' id='subject'>".$row['subject']."</p>";
				echo "</div>"; // END subject line
				echo "<div class='col-xs-12 col-sm-6'>";
					switch($page){
						case "":
							echo " Home"; break;
						case "jobs":
							desc_jobs($row); break;
						case "sale":
							echo " 사고팔고 목록"; break;
						case "cars":
							desc_cars($row); break;
						case "homes":
							desc_homes($row); break;
						case "services":
							echo " services list"; break;
						case "free":
							echo " 자유게시판"; break;
					}
				echo "</div>"; // END desc left side
				echo "<div class='col-xs-12 col-sm-6'>";
					echo "<p class='ellipsis' id='desc-2'>".$row['region']."</p>";
					echo "<p class='ellipsis hidden-xs' id='desc-3'>".$row['date']." by ".$row['username']."</p>";
				echo "</div>"; // END desc right side
			echo "</div>"; // END row
			
		echo "<div class='clear'></div>";
		echo "</div>"; // END card
	} //END main listing
}

function desc_cars($row){
	//nullable variables
	$mileage = '---';
	if(!empty($row['cars_mileage'])){ $mileage = number_format($row['cars_mileage']); }

	echo "<p class='ellipsis' id='desc-1'>".$row['cars_year']." ".ucfirst($row['cars_make'])." ".$row['cars_model']."</p>";
	echo "<p class='ellipsis' id='desc-1'>".ucfirst($row['cars_type'])." $".number_format($row['cars_price'])."<span id='desc-2'>"."&nbsp Mileage: ".$mileage."</span>"."</p>";
}

function desc_homes($row){
	//nullable variables
	$parking = '--';
	if(!empty($row['homes_parking'])){ $parking = $row['homes_parking']; }
	$sqft = '----';
	if(!empty($row['homes_sqft'])){ $sqft = number_format($row['homes_sqft']); }
	$year = '----';
	if(!empty($row['homes_year'])){ $year = $row['homes_year']; }
	
	echo "<p class='ellipsis' id='desc-1'>".$row['homes_bedrooms']." bed • ".$row['homes_bathrooms']." bath • ".$parking." parking"."</p>";
	echo "<p class='ellipsis' id='desc-1'>".ucfirst($row['homes_type'])." $".number_format($row['homes_price'])."<span id='desc-2'> &nbsp".$sqft." sqft.</span>"."</p>";
}

function desc_jobs($row){
	//nullable variables
	$salary = '--';
	if(!empty($row['jobs_compensation'])){ $salary = $row['jobs_compensation'];	}
	
	echo "<p class='ellipsis' id='desc-1'>".ucwords($row['jobs_employer'], " ")." • ".ucwords($row['jobs_title'], " ")."</p>";
	echo "<p class='ellipsis' id='desc-1'>".ucfirst($row['jobs_type'])."<span id='desc-2'>&nbsp Pay:".$row['jobs_compensation']."</span>"."</p>";
}

?>