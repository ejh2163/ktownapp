<?php
// General functions:

function sanitize($dbc, $data){
	return mysqli_real_escape_string($dbc, $data);
}

function output_errors($errors){
    $output = array();
    foreach($errors as $error){
        $output[] = '<li>' . $error . '</li>';
    }
    return '<ul>' . implode('', $output) . '</ul>'; 
}

function set_page(){
    $page = "";
    $real_page = [
    	"cars", 
    	"homes", 
    	"jobs", 
    	"sale", 
    	"services", 
    	//"free", 
    	"signup", 
    	"signin",
    	"signout", 
    	"profile"
    ];
    if(!empty($_GET["page"]) && in_array($_GET["page"], $real_page)){
    	$page = $_GET["page"]; 
    }
    return $page;
}

function set_page_num(){
    $page_num = 1;
    if(!empty($_GET["pagenum"])){
	    $page_num = $_GET["pagenum"]; 
    }
    return $page_num;
}


?>