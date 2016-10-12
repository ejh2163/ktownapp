<?php
// Setup File:

# session
session_start();

# db connection
$db_loc = "local";
switch($db_loc){
    case "heroku":
        #heroku cleardb
        $url = parse_url(getenv("mysql://b5175459eff71f:d8abedaf@us-cdbr-iron-east-04.cleardb.net/heroku_c8edf2b6a59f733?reconnect=true"));
        $server = $url["host"];
        $db_username = $url["user"];
        $db_password = $url["pass"];
        $db = substr($url["path"], 1);
        $dbc = new mysqli($server, $db_username, $db_password, $db);
        break;
    case "local":
        #c9 local db
        $host = "localhost";
        $db_username = "ejh2163";
        $db_password = "";
        $db = "ktownapp";
        $dbc = mysqli_connect($host, $db_username, $db_password, $db) OR die('SumTingWong Error: '.mysqli_connect_error());
        break;
}
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
$type = set_page_type();
$pagenum = set_page_num();
$user_data = set_user_data($dbc);
$site_title = 'SOCALSEOUL';
$page_title = ucfirst($page);
$errors = array();


?>
