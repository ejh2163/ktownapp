<?php
// Data Functions:

function sanitize($dbc, $data){
	return mysqli_real_escape_string($dbc, $data);
}


?>