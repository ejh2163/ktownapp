<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_title.' | '.$page_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require('config/js.php'); ?>
	<?php include('config/css.php'); ?>
</head>
<body>
	<?php require('views/navbar.php'); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="border: 1px solid black;">
				<?php require('views/view_side.php'); ?>
			</div> <!-- END side content -->
			
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="border: 1px solid black;">
				<?php require('views/view_main.php'); ?>
				<?php require('views/pagination.php'); ?>
				
			</div> <!-- END main content -->
		</div> <!-- END row -->
	</div> <!-- END container -->
	
	<?php require('views/footer.php'); ?>
	<!--<?php mysqli_close($dbc); ?>-->
</body>
</html>