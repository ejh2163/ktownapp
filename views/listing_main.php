<?php
// views listing_main:

function listing_button($page){
	if (signed_in()){
        echo '<a class="btn btn-default btn-lg btn-edit btn-primary" href="/' . $page . '/edit" role="button">+글쓰기</a>';
	} else {
		echo '<a class="btn btn-default btn-edit btn-primary" href="/signin" role="button">로그인하기</a>';
	}
}

function listing_premium($r, $page){
	$num_active_premium = mysqli_num_rows($r);
	
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-6 col-sm-3 col-md-3">';
			echo '<div class="card card-premium">';
				echo '<div class="views-tag">';
					echo '<i class="fa fa-eye" aria-hidden="true"></i>';
					echo '&nbsp'.$row['views'];
				echo '</div>';
				echo '<a class="img-card" href="/'.$page.'/view/lp/'.$row['id'].'">';
					grab_image($row);
				echo '</a>';
				echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="/'.$page.'/view/lp/'.$row['id'].'">';
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
					echo '<p style="float:right; font-style:italic;">';
						echo $row['date'];
					echo '</p>';
                echo '</div>';
			echo '</div>';
		echo '</div>';
	}
	for($i=$num_active_premium; $i<4; $i++){ //activate for loop to limit num of premium listing
		echo '<div class="col-xs-6 col-sm-3 col-md-3">';
			echo '<div class="card card-premium" style="text-align: center;">';
				echo '<br /><br /><br /><br />';
				echo '<a href="/advertising">Click Here<br />to add your own<br />Premium Listing!</a>';
			echo '</div>';
		echo '</div>';
	}
}

function listing_general($r, $page){
	while($row = mysqli_fetch_assoc($r)){
		echo '<div class="col-xs-6 col-sm-3 col-md-3">';
			echo '<div class="card fade-in">';
				echo '<div class="views-tag">';
					echo '<i class="fa fa-eye" aria-hidden="true"></i>';
					echo '&nbsp'.$row['views'];
				echo '</div>';
				echo '<a class="img-card" href="/'.$page.'/view/lg/'.$row['id'].'">';
					grab_image($row);
				echo '</a>';
			    echo '<div class="card-content">';
					echo '<h3 class="card-title ellipsis">';
						echo '<a href="/'.$page.'/view/lg/'.$row['id'].'">';
							echo $row['subject'];
						echo '</a>';
					echo '</h3>';
					echo '<div class="card-description ellipsis">';
						switch($page){
							case "":
								echo "Home"; break;
							case "jobs":
								desc_jobs($row); break;
							case "sale":
								desc_sale($row); break;
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
					echo '<p style="float:right; font-style:italic;">';
						echo $row['date'];
					echo '</p>';
                echo '</div>';
			echo '</div>';
		echo '</div>';
	}
}

function desc_cars($row){
	//nullable variables
	$mileage = '---';
	if(!empty($row['cars_mileage'])){ $mileage = number_format($row['cars_mileage']); }

	echo "<p class='card-desc-1 ellipsis'>".$row['cars_year']." ".ucfirst($row['cars_make'])." ".$row['cars_model']."</p>";
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['cars_type'])." $".number_format($row['cars_price'])."<span class='card-desc-2 ellipsis'>&nbspMiles: ".$mileage."</span>"."</p>";
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
	$pay = '--';
	if(!empty($row['jobs_compensation'])){ $pay = $row['jobs_compensation'];	}
	
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['jobs_title'])."</p>";
	echo "<p class='card-desc-1 ellipsis'>".ucfirst($row['jobs_type'])."<span class='card-desc-2 ellipsis'>&nbspPay: ".number_format($pay)."</span>"."</p>";
}

function desc_sale($row){
	echo "<p class='card-desc-1 ellipsis'>$".number_format($row['sale_price'])." • Category: ".ucfirst($row['sale_type'])."</p>";
	echo "<p class='card-desc-2 ellipsis'>".($row['body'])."</p>";
}

function grab_image($row){
	if (empty($row['image'])) {
		echo '<img src="/resources/images/no-photo-no-grad.png" />';
	} else {
		echo '<img src="'.$row['image'].'" />';
	}
}

function pagination($page, $pagenum, $type){
	?>
	<nav class="pagination-nav" aria-label="listing pages">
		<ul class="pagination pagination-lg">
			<!--
			<li <?php //if($pagenum==1){echo 'class="disabled"';} ?>>
				<a href="?page=<?php// echo $page;?>&pagenum=<?php //echo ($pagenum-1);?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>-->
			<li <?php if($pagenum==1){echo 'class="active"';} ?> >
				<a href="/<?php echo $page;?>/1/<?php echo $type ;?>">1 </a>
			</li>
			<li <?php if($pagenum==2){echo 'class="active"';} ?> >
				<a href="/<?php echo $page;?>/2/<?php echo $type ;?>">2 </a>
			</li>
			<li <?php if($pagenum==3){echo 'class="active"';} ?> >
				<a href="/<?php echo $page;?>/3/<?php echo $type ;?>">3 </a>
			</li>
			<li <?php if($pagenum==4){echo 'class="active"';} ?> >
				<a href="/<?php echo $page;?>/4/<?php echo $type ;?>">4 </a>
			</li>
			<li <?php if($pagenum==5){echo 'class="active"';} ?> >
				<a href="/<?php echo $page;?>/5/<?php echo $type ;?>">5 </a>
			</li>
			<!--
			<li <?php //if($pagenum==5){echo 'class="disabled"';} ?>>
				<a href="?page=<?php// echo $page;?>&pagenum=<?php// echo ($pagenum+1);?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
			-->
		</ul>
	</nav>
	<?php
}

?>