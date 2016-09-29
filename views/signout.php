<?php
// View signout.php:

function signout_process(){
    session_start();
    session_destroy();
    $_SESSION = array();
    header('Location: ./');
}

?>