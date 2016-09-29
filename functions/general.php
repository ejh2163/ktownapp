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


?>