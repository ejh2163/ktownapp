<?php
// views listing_main:

function listing_heading($page){
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
			echo "&nbsp렌트/부동산 목록";
			break;
		case "services":
			echo "&nbsp전문서비스 목록";
			break;
		case "free":
			echo "&nbsp자유게시판";
			break;
	}
} // END heading

function listing_button($page){
	if (signed_in()){
        echo '<a class="btn btn-default btn-edit" href="/' . $page . '/edit" role="button">+ 글쓰기</a>';
	} else {
		echo '<a class="btn btn-default btn-edit" href="/signin" role="button">로그인하기</a>';
	}
}

function generate_filter($page){
	switch($page){
		case "":
			echo " Home";
			break;
		case "jobs":
			?>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<a href="/jobs/1/all" type="button" class="btn btn-default">ALL</a>
				<a href="/jobs/1/full-time" type="button" class="btn btn-default">풀타임</a>
				<a href="/jobs/1/part-time" type="button" class="btn btn-default">파트타임</a>
				<a href="/jobs/1/various" type="button" class="btn btn-default">기타</a>
			</div>
			<?php
			break;
		case "sale":
			?>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<a href="/sale/1/all" type="button" class="btn btn-default">ALL</a>
				<a href="/sale/1/electronics" type="button" class="btn btn-default">전자</a>
				<a href="/sale/1/fashion" type="button" class="btn btn-default">패션</a>
				<a href="/sale/1/furniture" type="button" class="btn btn-default">가구</a>
				<a href="/sale/1/other" type="button" class="btn btn-default">기타</a>
			</div>
			<?php
			break;
		case "cars":
			?>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<a href="/cars/1/all" type="button" class="btn btn-default">ALL</a>
				<a href="/cars/1/sale" type="button" class="btn btn-default">판매</a>
				<a href="/cars/1/lease" type="button" class="btn btn-default">리스</a>
				<a href="/cars/1/rent" type="button" class="btn btn-default">렌트</a>
			</div>
			<?php 
			break;
		case "homes":
			?>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<a href="/homes/1/all" type="button" class="btn btn-default">ALL</a>
				<a href="/homes/1/sale" type="button" class="btn btn-default">분양</a>
				<a href="/homes/1/rent" type="button" class="btn btn-default">렌트</a>
				<a href="/homes/1/homestay" type="button" class="btn btn-default">하숙</a>
			</div>
			<?php
			break;
		case "services":
			echo " services filter";
			break;
		case "free":
			echo " 자유게시판"; 
			break;
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
			echo '<div class="card card-premium-empty" style="text-align: center;">';
				echo '<a href="/advertising" style="text-decoration: none;">Click Here<br />to add your own<br />Premium Listing!</a>';
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
					echo '<p style="float:left;">';
						echo $row['region'];
					echo '</p>';
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
		echo '<img src="/resources/images/no-photo.png" />';
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