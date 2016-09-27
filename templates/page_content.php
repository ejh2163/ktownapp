<?php
// page_content:

switch($page){
    case "":
        include('page_content/home.php');
        break;
        
    case "signup":
        include('page_content/signup.php');
        break;
        
    case "signin":
        include('page_content/signin.php');
        break;
    
    case "signout":
        include('page_content/signout.php');
        break;
        
    case "jobs":
    case "homes":
    case "cars":
    case "sale":
    case "free":
        if ($_GET["action"] == "edit") {
            include('page_content/edit.php');
        } else {
            include('page_content/listing.php');
        }
    	break;
}
?>