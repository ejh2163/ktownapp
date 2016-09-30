<?php
// Setup File:

# session
session_start();

# db connection
$host = "localhost";
$user = "ejh2163";
$password = "48cd3f6p";
$db = "ktownapp";
$dbc = mysqli_connect($host, $user, $pass, $db) OR die('Error: '.mysqli_connect_error());
mysqli_query($dbc, "SET NAMES 'UTF8'");

# functions:
include('functions/general.php');
include('functions/user.php');
include('functions/post.php');

# view functions:
include('views/home.php');
include('views/signup.php');
include('views/signin.php');
include('views/signout.php');
include('views/profile.php');
include('views/listing_main.php');
include('views/listing_side.php');
include('views/edit_main.php');

# site variables:
$page = set_page();
$page_num = set_page_num();
$site_title = 'SOCAL 한인';
$page_title = ucfirst($page);
$errors = array();

?>
