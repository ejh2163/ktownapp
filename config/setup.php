<?php
// Setup File:

# Database Connection Here...
$dbc = mysqli_connect('localhost', 'dev', '48cd3f6p', 'ktownapp_v1.0') OR die('Error: '.mysqli_connect_error());
mysqli_query($dbc, "SET NAMES 'UTF8'");

# Functions:
include('functions/data.php');
include('functions/template.php');

# Constants:

# Site Variables:
$cat = "";
$real_cat = ["cars", "homes", "jobs", "sale", "free"];
if(!empty($_GET["category"]) && in_array($_GET["category"], $real_cat)){
	$cat = $_GET["category"]; }

$page_num = 1;
if(!empty($_GET["page"])){
	$page_num = $_GET["page"]; }

$site_title = 'ktown.city';
$page_title = ucfirst($cat);

?>
