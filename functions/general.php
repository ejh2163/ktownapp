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
    
    /*
<div class="modal fade" id="tc-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
*/
}

function set_page(){
    $page = "";
    $real_page = [
    	"cars", 
    	"homes", 
    	"jobs", 
    	"sale", 
    	//"services", 
    	//"free", 
    	"signup", 
    	"signin",
    	"signout", 
    	"profile",
    	"password-reset",
    ];
    if(!empty($_GET["page"]) && in_array($_GET["page"], $real_page)){
    	$page = $_GET["page"]; 
    }
    return $page;
}

function set_page_num(){
    $pagenum = 1;
    if(!empty($_GET["pagenum"])){
	    $pagenum = $_GET["pagenum"]; 
    }
    return $pagenum;
}

function set_page_type(){
    $type = "all";
    if(!empty($_GET["type"])){
        $type = $_GET["type"];
    }
    return $type;
}

?>