<?php
// index.php:
ob_start();
include('config/setup.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_title.' | '.$page_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/js.php'); ?>
	<?php include('config/css.php'); ?>
</head>
<body>
	<?php include('templates/navbar.php'); ?>
	
	<div class='content'>
		<?php include('templates/page_content.php'); ?>
	</div>
	
	<?php include('templates/footer.php'); 
	//mysqli_close($dbc);
	?>
	
</body>
</html>