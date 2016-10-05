<?php
// views listing_main:

function listing_button($page){
	if (signed_in()){
        echo '<a class="btn btn-default btn-edit btn-lg btn-primary" href="?page=' . $page . '&action=edit" role="button">+글쓰기</a>';
	} else {
		echo '<a class="btn btn-default btn-edit btn-primary" href="?page=signin" role="button">로그인하기</a>';
	}
}

function listing_premium($r, $page){
	$num_active_premium = mysqli_num_rows($r);
	$num_active_plus = 0;
	
	echo '<div class="row">';
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-6 col-sm-4 col-md-4">';
			echo '<div class="card card-premium">';
				echo '<div class="views-tag">';
					echo '<i class="fa fa-eye" aria-hidden="true"></i>';
					echo '&nbsp'.$row['views'];
				echo '</div>';
				echo '<a class="img-card" href="?lp='.$row['id'].'">';
					grab_image($row);
				echo '</a>';
				echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="?lp='.$row['id'].'">';
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
					echo '</div>';
				echo '</div>';
				echo '<div class="card-read-more ellipsis">';
					echo $row['region'];
					echo '<span style="float:right; font-style:italic;">';
						echo $row['date'];
					echo '</span>';
                echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	for($i=$num_active_premium; $i<6; $i++){ //activate for loop to limit num of premium listing
		echo '<div class="col-xs-6 col-sm-4 col-md-4">';
			echo '<div class="card card-premium" style="text-align: center;">';
				echo '<br /><br /><br /><br />';
				echo '<a href="?page=business">Add Your Own<br />Premium Listing Here!</a>';
			echo '</div>'; // END row
		echo '</div>';
	}
	
	echo '</div>'; //END premium listing
}

function listing_general($r, $page){
	echo '<div class="row">';
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-6 col-sm-4 col-md-4">';
			echo '<div class="card">';
				echo '<div class="views-tag">';
					echo '<i class="fa fa-eye" aria-hidden="true"></i>';
					echo '&nbsp'.$row['views'];
				echo '</div>';
				echo '<a class="img-card" href="?lg='.$row['id'].'">';
					grab_image($row);
				echo '</a>';
			    echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="?lg='.$row['id'].'">';
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
					echo '</div>';
				echo '</div>';
				echo '<div class="card-read-more ellipsis">';
					echo $row['region'];
					echo '<span style="float:right; font-style:italic;">';
						echo $row['date'];
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

	echo "<p class='card-desc-1 ellipsis'>".$row['cars_year']." ".ucfirst($row['cars_make'])." ".$row['cars_model']."</p>";
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['cars_type'])." $".number_format($row['cars_price'])."<span class='card-desc-2 ellipsis'>"."&nbspMileage: ".$mileage."</span>"."</p>";
}

function desc_homes($row){
	//nullable variables
	$parking = '--';
	if(!empty($row['homes_parking'])){ $parking = $row['homes_parking']; }
	$sqft = '----';
	if(!empty($row['homes_sqft'])){ $sqft = number_format($row['homes_sqft']); }
	$year = '----';
	if(!empty($row['homes_year'])){ $year = $row['homes_year']; }
	
	echo "<p class='card-desc-1 ellipsis'>".$row['homes_bedrooms']." bed • ".$row['homes_bathrooms']." bath • ".$parking." parking"."</p>";
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['homes_type'])." $".number_format($row['homes_price'])."<span class='card-desc-2 ellipsis'>&nbsp".$sqft." sqft.</span>"."</p>";
}

function desc_jobs($row){
	//nullable variables
	$salary = '--';
	if(!empty($row['jobs_compensation'])){ $salary = $row['jobs_compensation'];	}
	
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['jobs_title'])."</p>";
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['jobs_type'])."<span class='card-desc-2 ellipsis'>&nbsp Pay: ".$row['jobs_compensation']."</span>"."</p>";
}

function grab_image($row){
	if (empty($row['image'])) {
		echo '<img src="resources/images/default.png" />';
	} else {
		echo '<img src="'.$row['image'].'" />';
	}
}

function pagination($page, $page_num){
	?>
	<nav class="pagination-nav" aria-label="listing pages">
		<ul class="pagination">
			<!--
			<li <?php //if($page_num==1){echo 'class="disabled"';} ?>>
				<a href="?page=<?php// echo $page;?>&pagenum=<?php //echo ($page_num-1);?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>-->
			<li <?php if($page_num==1){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=1">1 </a>
			</li>
			<li <?php if($page_num==2){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=2">2 </a>
			</li>
			<li <?php if($page_num==3){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=3">3 </a>
			</li>
			<li <?php if($page_num==4){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=4">4 </a>
			</li>
			<li <?php if($page_num==5){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=5">5 </a>
			</li>
			<li <?php if($page_num==6){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=6">6 </a>
			</li>
			<li <?php if($page_num==7){echo 'class="active"';} ?> >
				<a href="?page=<?php echo $page;?>&pagenum=7">7 </a>
			</li>
			<!--
			<li <?php //if($page_num==5){echo 'class="disabled"';} ?>>
				<a href="?page=<?php// echo $page;?>&pagenum=<?php// echo ($page_num+1);?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
			-->
		</ul>
	</nav>
	<?php
}

?>