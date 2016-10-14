<?php
// page_content:

switch($page){
    case '':
        include('content/home.php');
        break;
    case 'signup':
        include('content/sign_up.php');
        break;
    case 'signin':
        include('content/sign_in.php');
        break;
    case 'signout':
        include('content/sign_out.php');
        break;
    case 'password-reset':
        include('content/password-reset.php');
        break;
    case 'jobs':
    case 'homes':
    case 'cars':
    case 'sale':
    case 'services':
    case 'free':
        if ($_GET['action'] == 'edit') {
            include('content/edit.php');
        } elseif ($_GET['action'] == 'view') {
            $id = $_GET['id'];
            include('content/view.php');
        } else {
            include('content/listing.php');
        }
    	break;
    case 'advertising':
        include('content/advertising.php');
        break;
}
?>