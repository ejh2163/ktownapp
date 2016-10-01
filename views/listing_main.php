<?php
// views listing_main:

function listing_main_heading($page){
	echo '<i class="glyphicon glyphicon-th-large" aria-hidden="true"></i>';
	switch($page){
		case "":
			echo "&nbspHome"; break;
		case "jobs":
			echo "&nbsp구인 목록"; break;
		case "sale":
			echo "&nbsp사고/팔고 목록"; break;
		case "cars":
			echo "&nbsp자동차 목록"; break;
		case "homes":
			echo "&nbsp집/부동산 목록"; break;
		case "services":
			echo "&nbsp전문서비스 목록"; break;
		case "free":
			echo "&nbsp자유게시판"; break;
	}
} // END main heading

function listing_button($page){
	if (signed_in()){
        echo '<a class="btn btn-default btn-lg btn-edit" href="?page=' . $page . '&action=edit" role="button">+글쓰기</a>';
	} else {
		echo '<a class="btn btn-default btn-edit" href="?page=signin" role="button">로그인하러가기</a>';
	}
}

function listing_premium($r, $page){
	$num_active = mysqli_num_rows($r);
	
	echo '<div class="row">';
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-12 col-sm-6 col-md-4">';
			echo '<div class="card card-premium">';
				echo '<a class="img-card" href="http://www.fostrap.com/">';
					echo '<img src="--------- YOUR IMAGE URL ----------" />';
				echo '</a>';
			    echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="#">';
							echo $row['subject'];
						echo '</a>';
					echo '</h3>';
					echo '<div class="card-description ellipsis">';
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
						echo $row['region'];
					echo '</div>';
				echo '</div>';
				echo '<div class="card-read-more">';
					echo $row['date'];
					echo ' by ' . $row['username'];
					echo '<span style="float: right;">';
						echo '<i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>';
						echo '&nbsp'.$row['views'];
					echo '</span>';
                echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	//for($i=$num_active; $i<6; $i++){ //activate for loop to limit num of premium listing
		echo '<div class="col-xs-12 col-sm-6 col-md-4">';
			echo "<div class='card card-premium'  style='text-align: center;'>";
				echo '<br /><br /><br /><br /><br /><br /><br />';
				echo '<a href="#">Click Here to add your own Premium Listing!</a>';
			echo '</div>'; // END row
		echo '</div>';
	//}
	echo '</div>'; //END premium listing
}

function listing_general($r, $page){
	echo '<div class="row">';
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-12 col-sm-6 col-md-4">';
			echo '<div class="card">';
				echo '<a class="img-card" href="http://www.fostrap.com/">';
					echo '<img src="--------- YOUR IMAGE URL ----------" />';
				echo '</a>';
			    echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="#">';
							echo $row['subject'];
						echo '</a>';
					echo '</h3>';
					echo '<div class="card-description ellipsis">';
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
						echo $row['region'];
					echo '</div>';
				echo '</div>';
				echo '<div class="card-read-more">';
					echo $row['date'];
					echo ' by ' . $row['username'];
					echo '<span style="float: right;">';
						echo '<i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>';
						echo '&nbsp'.$row['views'];
					echo '</span>';
                echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	echo '</div>'; //END main listing
}

function desc_cars($row){
	//nullable variables
	$mileage = '---';
	if(!empty($row['cars_mileage'])){ $mileage = number_format($row['cars_mileage']); }

	echo "<p class='card-desc-1'>".$row['cars_year']." ".ucfirst($row['cars_make'])." ".$row['cars_model']."</p>";
	echo "<p class='card-desc-1'>".ucfirst($row['cars_type'])." $".number_format($row['cars_price'])."<span class='card-desc-2'>"."&nbsp Mileage: ".$mileage."</span>"."</p>";
}

function desc_homes($row){
	//nullable variables
	$parking = '--';
	if(!empty($row['homes_parking'])){ $parking = $row['homes_parking']; }
	$sqft = '----';
	if(!empty($row['homes_sqft'])){ $sqft = number_format($row['homes_sqft']); }
	$year = '----';
	if(!empty($row['homes_year'])){ $year = $row['homes_year']; }
	
	echo "<p class='card-desc-1'>".$row['homes_bedrooms']." bed • ".$row['homes_bathrooms']." bath • ".$parking." parking"."</p>";
	echo "<p class='card-desc-1'>".ucfirst($row['homes_type'])." $".number_format($row['homes_price'])."<span class='card-desc-2'> &nbsp".$sqft." sqft.</span>"."</p>";
}

function desc_jobs($row){
	//nullable variables
	$salary = '--';
	if(!empty($row['jobs_compensation'])){ $salary = $row['jobs_compensation'];	}
	
	echo "<p>".ucwords($row['jobs_employer'], " ")." • ".ucwords($row['jobs_title'], " ")."</p>";
	echo "<p>".ucfirst($row['jobs_type'])."<span class='card-desc-2'>&nbsp Pay:".$row['jobs_compensation']."</span>"."</p>";
}

?>