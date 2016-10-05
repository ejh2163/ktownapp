<?php
// Setup File:

# session
session_start();

# db connection
/*
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);*/

$host = "localhost";//$cleardb_server//
$user = "ejh2163";//$cleardb_username//
$password = "48cd3f6p"; //$cleardb_password//
$db = "ktownapp"; //$cleardb_db//
echo "SHIBAL";
$dbc = mysqli_connect($host, $user, $pass, $db) OR die('SumTingWong Error: '.mysqli_connect_error());
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
include('views/edit_side.php');

# site variables:
$page = set_page();
$page_num = set_page_num();
$site_title = 'SOCAL 한인';
$page_title = ucfirst($page);
$errors = array();

?>
