<?php
// Setup File:

# session
session_start();

# db connection
#c9 local db
/*$host = "localhost";
$user = "ejh2163";
$password = "48cd3f6p";
$db = "ktownapp";
$dbc = mysqli_connect($host, $user, $pass, $db) OR die('SumTingWong Error: '.mysqli_connect_error());*/

#heroku cleardb
$url = parse_url(getenv("mysql://b5175459eff71f:d8abedaf@us-cdbr-iron-east-04.cleardb.net/heroku_c8edf2b6a59f733?reconnect=true"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = new mysqli($server, $username, $password, $db);
$dbc = $conn;

mysqli_query($dbc, "SET NAMES 'UTF8'");

# functions:
include('functions/general.php');
include('functions/user.php');
include('functions/post.php');

# view functions:
include('views/home.php');
include('views/sign_up.php');
include('views/sign_in.php');
include('views/sign_out.php');
include('views/profile.php');
include('views/listing_main.php');
include('views/listing_side.php');
include('views/edit.php');

# site variables:
$page = set_page();
$pagenum = set_page_num();
$user_data = set_user_data($dbc);
$site_title = 'SOCAL 한인';
$page_title = ucfirst($page);
$errors = array();

?>
