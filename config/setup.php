<?php
// Setup File:

session_start();
$errors = array();

# Database Connection Here...
$host = "localhost";
$user = "ejh2163";
$password = "48cd3f6p";
$db = "ktownapp";

$dbc = mysqli_connect($host, $user, $pass, $db) OR die('Error: '.mysqli_connect_error());
mysqli_query($dbc, "SET NAMES 'UTF8'");

# Functions:
include('functions/data.php');
include('functions/user.php');

# Views:
include('views/signup.php');
include('views/signin.php');
include('views/listing_main.php');
include('views/listing_side.php');
include('views/home.php');

# Site Variables:
$page = "";
$real_page = ["cars", "homes", "jobs", "sale", "free", "signup", "signin"];
if(!empty($_GET["page"]) && in_array($_GET["page"], $real_page)){
	$page = $_GET["page"]; }

$page_num = 1;
if(!empty($_GET["pagenum"])){
	$page_num = $_GET["pagenum"]; }

$site_title = 'socalhanin';
$page_title = ' | '.ucfirst($page);


?>
