<?php
// page_content:

switch($page){
    case "":
        include('content/home.php');
        break;
        
    case "signup":
        include('content/signup.php');
        break;
        
    case "signin":
        include('content/signin.php');
        break;
    
    case "signout":
        include('content/signout.php');
        break;
        
    case "jobs":
    case "homes":
    case "cars":
    case "sale":
    case "services":
    case "free":
        if ($_GET["action"] == "edit") {
            include('content/edit.php');
        } else {
            include('content/listing.php');
        }
    	break;
}

?>