<?php
// index.php:
ob_start();
include('config/setup.php');

//ini_set('default_charset', 'UTF-8');
//header('Content-Type: text/html;charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<?php 
		include('config/js.php');
		include('config/css.php'); 
	?>
	<title><?php echo $site_title." | ".$page_title;?></title>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<?php include('templates/navbar.php'); ?>
	
	<div class="content">
		<?php include('templates/content.php'); ?>
	</div>
	
	<?php include('templates/footer.php'); ?>
	<?php mysqli_close($dbc); ?>

</body>
</html>
