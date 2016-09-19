<?php
// view_main/jobs.php:
	
	//nullable variables
	$salary = '--';
	if(!empty($row['jobs_compensation'])){ $salary = $row['jobs_compensation'];	}
	
	echo "<p class='ellipsis' id='desc-1'>".ucwords($row['jobs_employer'], " ")." • ".ucwords($row['jobs_title'], " ")."</p>";
	echo "<p class='ellipsis' id='desc-1'>".ucfirst($row['jobs_type'])."<span id='desc-2'>&nbsp Pay:".$row['jobs_compensation']."</span>"."</p>";

?>
